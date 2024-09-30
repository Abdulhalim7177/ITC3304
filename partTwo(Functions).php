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

echo " sum of prime numbers between 1 to 20: " . sumOfPrimes(1,20) . "<br>";

//2. a script to calculate the lenght of a string wituout using the built in function

function customStringLenght($string){
    $count = 0;
    for ($i = 0; isset($string[$i]); $i++) {
        $count++;
}
return $count;
}
echo  "length of string 'hello world' is: " . customStringLenght("hello world") . "<br>";

//3.a PHP code snippet to input 2 no’s from the user & do their addition, subtraction, multiplication & division
 
function AddNum($FirstNum, $SecondNum){
    return $FirstNum + $SecondNum;
}
function SubtractNum($FirstNum, $SecondNum){
    return  $FirstNum - $SecondNum;

}
function MultiplyNUm($FirstNum, $SecondNum){
    return $FirstNum  * $SecondNum;
}
function  DivideNum($FirstNum, $SecondNum){
    if ($SecondNum != 0) {
        return $FirstNum / $SecondNum;
    }
    else 
    return false;
}

if  ($_SERVER["REQUEST_METHOD"]== "POST") {
    $FirstNum = $_POST["firstNum"];
    $SecondNum = $_POST["secondNum"];
    
   echo  "Addition: " . AddNum($FirstNum, $SecondNum) . "<br>";
   echo   "Subtraction: " . SubtractNum($FirstNum, $SecondNum) . "<br>";
   echo "Multiplication: " .  MultiplyNUm($FirstNum, $SecondNum) . "<br>";
   echo "Division: " . DivideNum($FirstNum, $SecondNum) . "<br>";

}
//4. function called calculateSum that takes two parameters, $num1 and $num2, and returns their sum.

function calculateSum($num1, $num2){
    return $num1 + $num2;
}
echo "Sum of 5 and 8 using calculateSum function: ". calculateSum(5, 8) . "<br>";

//5. PHP function called calculatePower that takes two parameters, $base and $exponent, and returns the result of raising the base to the power of the exponent.

function calculatePower($base, $exponent){
    return $base **  $exponent;
}
echo "Using calculatePower function to find the exponent of 2 power 5 = ". calculatePower(2, 5) . "<br>";


//6. Write a PHP function that takes a string as input and returns its reverse.

function stringReverse($string){
    $reverseString='';
    $stringLength = strlen($string);
    for($i = $stringLength; $i >=0 ; $i --){
        $reverseString .= $string[$i];
    } return $reverseString;
 
}

echo stringReverse("Hello World");