<?php
error_reporting(E_ALL);
    $age = 61;
    $weight = 75.35;
    $name = 'Mike';
    $surname = ' Johnson';
    $canSwim = false;
    //$x = null;
    
    $a = & $b;
    
    $a = '256';
    $b = '512';
    $a = '456';
    var_dump($a, $b);
    
    unset($a);
    
    
    
    $info = "His name is {$name}. His surname is {$surname}. He is {$age} years old.";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Document</title>
</head>
<body>
    <?=$info[4] ?>    
    
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Age</th>
            <th>Weight</th>
        </tr>
        <tr>
            <td><?=$name ?></td>
            <td><?=$surname ?></td>
            <td><?=$age ?></td>
            <td><?=$weight ?></td>
        </tr>
    </table>
    
    <hr>
    <?php
       
        var_dump(isset($x));
    
    ?>
    
  
</body>
</html>