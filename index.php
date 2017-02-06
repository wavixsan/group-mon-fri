<?php
error_reporting(E_ALL);

    $employee1 = array(
        'age' => 61, 
        'weight' => 75.35, 
        'name' => 'Mike',
        'surname' => 'Johnson',
        'can_swim' => false
    );
    
    $employee2 = [
        'age' => 34, 
        'weight' => 70.35, 
        'name' => 'Steve',
        'surname' => 'Anderson',
        'can_swim' => true
    ];
    
    $employees = [$employee1, $employee2];
    
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Document</title>
</head>
<body>
     
    
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Age</th>
            <th>Weight</th>
            <th>Can swim</th>
        </tr>
        <tr>
            <td><?=$employees[0]['name'] ?></td>
            <td><?=$employees[0]['surname'] ?></td>
            <td><?=$employees[0]['age'] ?></td>
            <td><?=$employees[0]['weight'] ?></td>
            <td><?=$employees[0]['can_swim'] ?></td>
        </tr>
        <tr>
            <td><?=$employees[1]['name'] ?></td>
            <td><?=$employees[1]['surname'] ?></td>
            <td><?=$employees[1]['age'] ?></td>
            <td><?=$employees[1]['weight'] ?></td>
            <td><?=$employees[1]['can_swim'] ?></td>
        </tr>
    </table>
    
    <hr>
    <?php
       
        var_dump(isset($x));
    
    ?>
    
  
</body>
</html>