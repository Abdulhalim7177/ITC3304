<?php
// 1. php script to calculate sum of all prime numbers within a given range
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= ($num*0.5); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
function sumOfPrimes($startNum, $endNum) {
    $sumOfPrime = 0;
    for ($startNum; $startNum <= $endNum; $startNum++) {  
        if (isPrime($startNum)) { 
            $sumOfPrime +=$startNum;
        }  
    } return $sumOfPrime;
}

echo sumOfPrimes(1,50);