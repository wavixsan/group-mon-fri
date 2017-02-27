<?php
error_reporting(E_ALL);

define('DATA_FILE', 'messages.txt');
// functions

function createMessage($username, $email, $message)
{
    $id = uniqid();
    return compact('username', 'email', 'message');
}

function redirect($to)
{
    header("Location: {$to}");
    die;
}

function requestPost($key, $default = null)
{
    return isset($_POST[$key]) ? $_POST[$key] : $default;
}

function requestGet($key, $default = null)
{
    return isset($_GET[$key]) ? $_GET[$key] : $default;
}

function isRequestPost()
{
    return (bool) $_POST;
}

function isFormValid()
{
    return trim(requestPost('username')) != '' && trim(requestPost('email')) != '' && trim(requestPost('message')) != '';
}


// todo: argument for filename
function saveMessage(array $message)
{
    $s = serialize($message);
    file_put_contents(DATA_FILE, $s . PHP_EOL, FILE_APPEND);
}

function loadMessages()
{
    $messages = file_get_contents(DATA_FILE);
    $messages = explode(PHP_EOL, $messages);
    
    foreach ($messages as $key => $message) {
        if ($message) {
            $messages[$key] = unserialize($message);
            continue;
        }
        
        unset($messages[$key]);
    }
    
    return $messages;
}


// logic

$flashMessage = requestGet('flash');

// todo: delete
if (requestGet('action') == 'delete') {
 
 
 // delete script
 // redirect + flash message
 
    
}

if (isRequestPost()) {
    if (isFormValid()) {
        $flashMessage = 'Your message was sent';
        
        $message = createMessage(requestPost('username'), requestPost('email'), requestPost('message'));
        saveMessage($message);

        redirect("/form?flash={$flashMessage}");
    } 
    
    $flashMessage = 'Fill the fields';
}


$messages = loadMessages();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    
</head>
<body>
    
    <h1>Form</h1>
    <b><?=$flashMessage ?></b>
    
    <form method="post">
        <input type="name" name="username" value="<?=requestPost('username') ?>"><br>
        <input type="email" name="email" value="<?=requestPost('email') ?>"><br>
        <textarea name="message"><?=requestPost('message') ?></textarea><br>
        <button>GO</button>
    </form>
    
    <hr>
    
    <?php foreach ($messages as $key => $message) : ?>
        
        <i><?=$message['username']?></i><br>
        <?=$message['message']?>
        
        <a href="index.php?action=delete&amp;id=<?=$key?>">Delete</a>
    <hr>
    <?php endforeach ?>
    
    
</body>
</html>