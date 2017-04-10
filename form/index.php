<?php
error_reporting(E_ALL);
session_start();

spl_autoload_register(function($className) {
    $filePath = "classes/{$className}.php";
    
    if (!file_exists($filePath)) {
        die("file {$filePath} not found");
    }
    
    require_once($filePath);
});

$request = new Request($_GET, $_POST);

define('DATA_FILE', 'messages.txt');
define('FLASH_KEY', 'flash_message');
// functions

// todo : определять в какой цвет закрасить сообщение в зависимости от успеха/фейла
function setFlash($message)
{
    $_SESSION[FLASH_KEY] = $message;
}

function getFlash()
{
    if (!isset($_SESSION[FLASH_KEY])) {
        return null;
    }
    
    $message = $_SESSION[FLASH_KEY];
    unset($_SESSION[FLASH_KEY]);
    
    return $message;
}


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

$flashMessage = $request->get('flash');

// todo: delete
if ($request->get('action') == 'delete') {
 
 
 // delete script
 // redirect + flash message
 
    
}




$form = new ContactForm($request);

if ($request->isPost()) {
    // todo: добавить проверку капчи, задавать соответствующее значение для сообщения + менять капчу если успех
    if ($form->isValid()) {
        
        $message = createMessage($form->username, $form->email, $form->message);
        saveMessage($message);
        
        setFlash('Your message was sent');
        // redirect("/form");
    } 
    
    // todo: убрать
    setFlash('Fill the fields');
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
    <b><?=getFlash() ?></b>
    
    <form method="post">
        <input type="name" name="username" value="<?=$form->username ?>"><br>
        <input type="email" name="email" value="<?=$form->email ?>"><br>
        <textarea name="message"><?=$form->message ?></textarea><br>
        <img src="https://mon-fri-andrii-popov.c9users.io/form/captcha.php"> <br>
        <input type="text" name="security_number"/><br>
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