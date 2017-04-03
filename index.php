<?php
error_reporting(E_ALL);

spl_autoload_register(function($className) {
    $filePath = "classes/{$className}.php";
    
    if (!file_exists($filePath)) {
        die("file {$filePath} not found");
    }
    
    require_once($filePath);
});

// $n = 20;

// // for, rand

// $classes = ['Circle', 'Square'];
// $figures = [];

// for ($i = 0; $i < $n; $i++) {
//     $key = array_rand($classes);
//     $class = $classes[$key];
    
//     $figure = new $class(rand(1, 100));
//     var_dump($figure->getArea());
//     $figures[] = $figure;
// }
// var_dump($figures);

// var_dump(new Hatchback(1,2,3,4,5));

$test = new Test();
// $testCloned = clone $test;

// var_dump($test, $testCloned);

// $test->p = 123;
// $test->test();
// echo Test::someMethod();

$c1 = new Counter();
$c2 = new Counter();
$c3 = new Counter();
$c54 = clone $c3;
// unset($c3);
echo $c54;

// __get, __set, __clone, __call, __toString, __wakeup, __sleep
