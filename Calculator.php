<?php
class Calculator
{
 
    public function add($a, $b): float
    {
        return $a + $b;
    }

    public function multiply($a, $b): float
    {
        return $a * $b;
    }

    public function division($a, $b): float
    {
        return $a / $b;
    }
    public function esPar($a): boolean
    {
        if($a%2==0)
            return true;
        else
            return false;
    }   
 
}
