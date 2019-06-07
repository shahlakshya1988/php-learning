<?php
// variables
/**
 * variables rules
 * - Starts with $
 * - should not be reserved word or keyword
 * - no spaces
 * - can't start with Number
 * - Can have alphabet, numbers, underscore
 * - Case sensitive
 */
/**
 * Variables can be used between double quotes
 */
$greetings = "Hello World"."<br>"; // $greeting variable is having Hello World
$greetings = "Hello"."<br>"; // $greeting variable is having only Hello, previous value is overwritten

$name = "Lakshya";
echo "Hello, {$name}"."<br>";
echo "Hello, $name"."<br>";
echo 'Hello, $name'."<br>";
echo 'Hello '.$name; //Used . as contactination 
?>
