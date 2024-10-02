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
    for($i = $stringLength -1; $i >=0 ; $i --){
        $reverseString .= $string[$i];
    } return $reverseString;
 
}

echo stringReverse("Hello World") . "<br>";
//7. a PHP function called calculate that takes two numbers and an operator (+, -, *, /) as arguments and returns the result of the operation

function opera($Num1, $Num2, $operator){
    if($operator == '+'){
        $operations = $Num1 + $Num2;
    } elseif($operator == '-'){
        $operations = $Num1 - $Num2;
    }elseif($operator == '/'){
        $operations = $Num1 / $Num2;
    }
    elseif($operator == '*'){
        $operations = $Num1 * $Num2;
    }

    return $operations;
}

echo "the operarions carried on 3 and 10: ". opera(3,10,'+')."<br>";


//8. a PHP function that converts temperature from Celsius to Fahrenheit  Fahrenheit = (Celsius * 9/5) + 32.

function tempConvert($tempreture){
    return ($tempreture * (9/5)) + 32;
    
}
echo "the converted tempreture from celcius to fahrenheit is: " .tempConvert(40) . "<br>";

//9. a PHP function that generates an email address using a person's name and a domain. Display the generated email

function emailGen($name, $domain){
    return $name .'@'. $domain;
}

echo "the email generated is: ". emailGen("ahmad","swe.com") ."<br>";

//10. Imagine you have a PHP script that calculates the total cost of items in a shopping cart.
// How would you handle passing the item prices and quantities to the script and return the calculated total?
// to handle such you are to use and associative array and link the prices of each item with the quantity of the item

function calculateTotal($ShoppingItems){
    $totalCost =0;
    foreach ($ShoppingItems as $items => $itemInfo) {
        $price = $itemInfo['price'];
        $quantity = $itemInfo['quantity'];

        $totalCost += $price * $quantity;
    }
    return $totalCost;

}
// example to illustrate
$ItemsDemo = [
    "Pencil" => ["price" => 20, "quantity" => 3],
    "Biro" => ["price" => 50, "quantity" => 3],
    "Book" => ["price" => 250, "quantity" => 2]
];
echo "The total cost of items in the shopping cart is: " . calculateTotal($ItemsDemo) ; 

/*11. 11. Write a PHP function to calculate;
a. (a+b) power 2
b. (a+b) power 3
c. (a2-b2) 
*/

function FirstFuntion($a, $b){
    return ($a + $b)**2;    
}
function SecondFunction($a, $b){
    return ($a + $b) ** 3;
}
function ThirdFunction($a, $b){
    return (($a**2) - ($b**2));
}
