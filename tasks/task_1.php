<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check if a number is prime number</title>
</head>
<body>
    
    <h1>Check if a number is prime number</h1>
    
    <form method='post'>
        <input type="number" name="number" min="2" required/>
        <button>Go</button>
    </form>
    
    
    <?php 
        if ($_POST) { 
            
            $number = (int) $_POST['number'];
            $result = true;
            
            if ($number == 2) {
                $result = true;
            } else {
                for ($i = 2; $i < $number; $i++) {
                    if ($number % $i == 0) {
                        $result = false;
                        break;
                    }
                }
            }
            
            echo  "Result: " . ($result ? '' : 'Not ') . 'prime';
        }  
    ?>
    
    
</body>
</html>