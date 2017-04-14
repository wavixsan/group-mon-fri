<?php
error_reporting(E_ALL);

spl_autoload_register(function($className) {
    $filePath = "classes/{$className}.php";
    
    if (!file_exists($filePath)) {
        die("file {$filePath} not found");
    }
    
    require_once($filePath);
});


$dsn = 'mysql: host=localhost; dbname=fractures';
$user = 'root';
$pass = '';



/**
 * 1) вывести список логов
 * 2) под списком форма для двух дробей
 * 3) отправляем форму - проверка, создаем объекты Fraction, складываем
 * 4) сохраняем в базу, редирект на ту же страницу
 * 5) используем Fracture, FractureException, FractureForm
 * 
 * 
 * 
 * /




echo 'Header <hr>';




try {
    $a = rand(-2, 2); // super error
    
    $pdo = new PDO($dsn, $user, $pass);
    
    // all records
    // $sth = $pdo->query('select * from log');
    
    // while ($res = $sth->fetch(PDO::FETCH_ASSOC)) {
    //     // todo: create Fracture objects & fancy output
    //     var_dump($res);
    // }
    
    // single record
    $sth = $pdo->prepare('select * from log where id = :id');
    $sth->execute([
        'id' => 2
    ]);
    
    
    // prepare('insert into log values (null, :f1, :f2, :sum)');
    // execute([
    //   'f1' => $f1,
    //   'f2' => $f2,
    //   'sum' => $f3
    // ])
    var_dump($sth->fetch(PDO::FETCH_ASSOC));
    
    
    if (!$a) {
        throw new Exception('Some random sheet');
    }
    
    $f1 = new Fracture(1, 0);
    $f2 = new Fracture(1, 3);
    $f3 = Fracture::add($f1, $f2);
    var_dump($f1, $f2, $f3);
} catch(FractureException $e) {
    echo "Catched Fracture exception " . $e->getMessage();
} catch(Exception $e) {
    echo "Catched base exception " . $e->getMessage();
}

echo '<hr> Footer &copy;';




























// $car = new Car(1, 2, 3, 4);
// Registry::set('car', $car);

// var_dump(Registry::get('car'));


// function test1()
// {
//     $s1 = Singleton::getInstance();
//     $s2 = Singleton::getInstance();
//     var_dump($s1);
//     var_dump($s2);
// }

// function test() 
// {
//     test1();    
// }

// test();



// // $s = serialize($s1);
// // unserialize($s);



// $son = new SingletonSon();
// var_dump($son);
