<?php

class Fracture
{
    public $numerator;
    public $denominator;
    
    public function __construct($n, $d)
    {
        $this->numerator = $n;
        
        if ($d == 0) {
            throw new Exception("Division by zero");
        }
        
        $this->denominator = $d;
    }
    
    public function print()
    {
        // 3/4
    }
    
    // todo добавить метод для сокращения дроби, арифм действия и т.п.
}