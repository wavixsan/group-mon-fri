<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random dimension table</title>
</head>
<body>
    
    <h1>Random dimension table</h1>
    <h3>Make gradients from left to right on each row</h3>
    <?php
    
        $rows = rand(1, 10);
        $cols = rand(1, 10);
        $max_color_value = pow(16, 6);
    ?>
    
    <table border="1">
        <?php for ($i = 1; $i <= $rows; $i++): ?>
            <tr>
                <?php for ($j = 1; $j <= $cols; $j++): 
                
                    $color = dechex(rand(0, $max_color_value));
                    ?>
                    <td style="background-color: #<?=$color?>"><?=$color ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    
    
</body>
</html>