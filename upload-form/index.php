<?php

if (!empty($_FILES['document'])) {
    $doc = $_FILES['document'];
    
    file_put_contents('debug.txt', print_r($doc, 1));
    
    if (!$doc['error']) {
        move_uploaded_file($doc['tmp_name'], $doc['name']);
    }
}

?>

<!DOCTYPE html>
<html>
    <body>
        <form method='post' enctype='multipart/form-data'>
            <input type="file" name="document[]" multiple />
            <input type="submit" value="Submit"/>
        </form>
    </body>
</html>