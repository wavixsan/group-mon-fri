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
    
    $employee3 = [
        'age' => 43, 
        'weight' => 112.35, 
        'name' => 'Hank',
        'surname' => 'Jobbs',
        'can_swim' => false
    ];
    
    
    $employees = [$employee1, $employee2, $employee3];
    
    
    
    
    print_r($employees);
    for ($i = 1; ;$i++ ) {
       
       if ($i % 2) {
           continue;
       }
       
       if ($i > 10) {
           break;
       }
       
       echo $i . '<hr>';
       
    }
        echo $i;
        
    
    
   
    
    // $a = -234;
    
    // if ($a > 0) {
    //     echo 'Positive';
    // } elseif (!$a) {
    //     echo 'zero';
    // } else {
    //     echo 'negative';
    // }
    
  
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Document</title>
</head>
<body>
     
    
    <table border="1" cellspacing="0">
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Age</th>
            <th>Weight</th>
            <th>Can swim</th>
        </tr>
        <?php foreach ($employees as $employee) : ?>
            <tr>
                <td><?=$employee['name'] ?></td>
                <td><?=$employee['surname'] ?></td>
                <td><?=$employee['age'] ?></td>
                <td><?=$employee['weight'] ?></td>
                <td><?=$employee['can_swim'] ? 'Yes' : 'No' ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
    
    <hr>
    <?php
       
        var_dump(isset($x));
    
    ?>
    
  
</body>
</html>