<?php
// 1 print message 10 times
$message = "this is a message";
for($i= 1; $i <= 10; $i++){
    echo $i . "  ". $message . "<br>";
}
// you can use the string manufulation function

echo str_repeat("print this message again <br>", 10);

//2. print first  10 natural number

for($j = 1; $j <=10; $j++){
    echo  $j . "<br>";

}

//3a. find factorial using for loop
$factorialNum=1;
$numberFactorial=5;
for($k = 1; $k <= $numberFactorial; $k++){
    $factorialNum = $factorialNum * $k;
}
echo $factorialNum;

//3b. find factorial using while loop
$factorialNum2=1;
$numberFactorial2=5;
$j = 1;

while($j <=$numberFactorial2){
    $factorialNum2 = $factorialNum2 * $j;
    $j++;
}

echo $factorialNum2;

// 4. code to print even numbers out of 100 numbers using for loop
for ($i=0; $i <= 100; $i++) { 
    if ($i  % 2 == 0) {
        echo $i,", ";
}
}

//5. a ternary operator is a shorthand way of writting if  else statement its called ternary  operator because it has three parts condition,  value if true, value if false example

$color = 'Red';
$selectedColor = ($color == 'Red')? 'Yes the color is red': 'No its another color';
echo $selectedColor;

//6. script to check wether a number is even or odd

$givenNumber = 20;

if($givenNumber % 2==1){
    echo "the given number $givenNumber is odd";
} else{
    echo "the given number $givenNumber is even";
}

//7. script to show days in a week using switch

$selectedDay = 'Monday';

switch ($selectedDay) {
    case 'Sunday':
       echo 'the selected day is Sunday';
        break;
    case 'Monday':
       echo 'the selected day is Monday';
        break;
    case 'Tuesday':
       echo 'the selected day is Tuesday';
        break;
    case 'Wednesday':
       echo 'the selected day is Wednesday';
        break;
    case 'Thursday':
       echo 'the selected day is Thursday';
        break;
    case 'Friday':
       echo 'the selected day is Friday';
        break;
    case 'Sartuday':
       echo 'the selected day is Sartuday';
        break;
    
    default:
        echo 'Please select a day';
        break;
} echo "<br>";

/*8. 8. Write a PHP code snippet to do following:
i. 
    1
    1 2
    1 2 3
    1 2 3 4
    1 2 3 4 5
*/
for ($i=1; $i <= 5; $i++) {
    for ($j=1; $j <= $i; $j++) {
        echo $j. ' ';
    }
    echo "<br>";
}


/*
//ii. 
    1
    2 2
    3 3 3
    4 4 4 4
    5 5 5 5 5
*/
for ($i=1; $i <=5 ; $i++) { 
    for ($j=1; $j <= $i; $j++) {
        echo $i.' ';
    }
    echo "<br>";
}



/*


//iii.
          1
        1 2 1
      1 2 3 2 1
    1 2 3 4 3 2 1
  1 2 3 4 5 4 3 2 1
*/

for($i = 1; $i <= 5; $i++) {
    for($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    for($k = $i - 1; $k >= 1; $k--) {
        echo $k . " ";
    }
    echo "<br>";
}









//bonus -> function for finding factorial 
function factorial($num) {
    $fact = 1;
    for($i = 1; $i <= $num; $i++ ){
        $fact *=$i;   
    }
    return  $fact;
}
