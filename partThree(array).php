<?php

// Question 1: Write a PHP code snippet to convert a string to an array of characters

$arr_test = array();
$strint_test = "Abdulhaleem";
// the str_split function splits the string and stores it in array
$arr_test = str_split($strint_test);
print_r($arr_test);


// Question 2:  How do you create and use a multidimensional array in PHP? Provide two examples

// im not answering this😊, read your notes

//Question 3:  Given an array of numbers, write PHP code to calculate and display the sum and average of 
//the numbers. 

$arr_num = array('1','2','3');
//im simply using a function for the sum but you can also use forloop
$summ = array_sum($arr_num);
$aver = $summ / count($arr_num);

echo "the sum is $summ . <br>";
echo "the average is $aver . <br>";

//Question 4:   Write a PHP code snippet to find the maximum and minimum values in an array of numbers.

$arr_num2 = array('1','2','3');
$maximum = max($arr_num2);
$mini = min($arr_num2);
echo "the maximum is $maximum . <br>";
echo "the minimum is $mini . <br>";

// Question 5: Describe the purpose of the array_search(), array_key_exists(),  array_merge() , 
//array_reverse()  array_shift() and array_pop()  functions in PHP and provide an example of using 
//each.

//from CHATGPT!
//Sure! Here's a more concise description and examples for each of the mentioned PHP array functions:

    // ### 1. **array_search()**
    // **Purpose**: Finds the key of a given value in an array.
    
    // **Example**:
    // ```php
    $fruits = ["apple", "banana", "cherry"];
    $key = array_search("cherry", $fruits); // Returns 2
    echo $key; // Outputs: 2
    
    // ### 2. **array_key_exists()**
    // **Purpose**: Checks if a specified key exists in an array.
    
    // **Example**:
    // ```php
    $person = ["name" => "John", "age" => 30];
    $exists = array_key_exists("age", $person); // Returns true
    
    
    // ### 3. **array_merge()**
    // **Purpose**: Merges one or more arrays into one.
    
    // **Example**:
    // ```php
    $array1 = ["a" => "apple"];
    $array2 = ["b" => "banana"];
    $merged = array_merge($array1, $array2); // Returns ["a" => "apple", "b" => "banana"]
    
    
    // ### 4. **array_reverse()**
    // **Purpose**: Returns an array in reverse order.
    
    // **Example**:
    // ```php
    $numbers = [1, 2, 3];
    $reversed = array_reverse($numbers); // Returns [3, 2, 1]
    // ```
    
    // ### 5. **array_shift()**
    // **Purpose**: Removes the first element of an array and returns it.
    
    // **Example**:
    // ```php
    $colors = ["red", "green"];
    $firstColor = array_shift($colors); // Returns "red", $colors now contains ["green"]
    // ```
    
    // ### 6. **array_pop()**
    // **Purpose**: Removes the last element of an array and returns it.
    
    // **Example**:
    // ```php
    $vegetables = ["carrot", "lettuce"];
    $lastVegetable = array_pop($vegetables); // Returns "lettuce", $vegetables now contains ["carrot"]
    // ```
    
    // These functions help with various array manipulations in PHP efficiently!

    //Question 6: Create a PHP function that calculates and displays the Body Mass Index (BMI) based on 
//weight and height inputs.

    function bmi_calc($weight,$height){
        $bmi = $weight / pow($height, 2);
        return $bmi;
    }
    echo "your bmi is" . bmi_calc(60,1.81);


    //last question

    //from CHATGPT
  
// Associative array of student names and their scores
$students = [
    "Alice" => 85,
    "Bob" => 92,
    "Charlie" => 78,
    "Diana" => 88,
    "Eve" => 95,
    "Frank" => 79
];

// Initialize variables for highest and lowest scores
$maxScore = -PHP_INT_MAX; // Set to a very low value
$minScore = PHP_INT_MAX;  // Set to a very high value

$maxStudent = "";
$minStudent = "";

// Loop through the array to find the highest and lowest scores
foreach ($students as $student => $score) {
    if ($score > $maxScore) {
        $maxScore = $score;
        $maxStudent = $student;
    }
    if ($score < $minScore) {
        $minScore = $score;
        $minStudent = $student;
    }
}

// Display the highest and lowest scores with corresponding student names
echo "Highest score: $maxStudent with $maxScore points\n";
echo "Lowest score: $minStudent with $minScore points\n";

