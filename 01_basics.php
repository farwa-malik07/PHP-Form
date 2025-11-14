<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Project</title>
</head>
<body>
	<div class="container">
		its my first php website....

		<br>

		<?php
		echo "hello world this is php ";

		$variable1 = 5;
		$variable2 = 2;
		echo "<br>";
		echo $variable1;
		echo $variable2;

		echo $variable1 + $variable2;
		echo "<br>";

		//operators in PHP
		// Arithematic Operators 
		echo "<h1> Arithematic Operators</h1>";

		echo "The Value of variable1 + variable2 is";
		echo "<br>";
		echo $variable1 + $variable2;
		echo "<br>";
		echo "The Value of variable1 - variable2 is";
		echo "<br>";
		echo $variable1 - $variable2;
		echo "<br>";
		echo "The Value of variable1 * variable2 is";
		echo "<br>";
		echo $variable1 * $variable2;
		echo "<br>";
		echo "The Value of variable1 / variable2 is";
		echo "<br>";
		echo $variable1 / $variable2;
		echo "<br>";
		// Assignment operators 
		echo "<h1> Assignment Operators</h1>";

		$newVar = $variable1;
		$newVar += 1;
		echo "The value of new variable is = ";
		echo $newVar;
		echo "<br>";
		// comparison operators
		echo "<h1> Comparison Operators </h2>";
		echo "<br>";
		echo "The value of 1==4 is    :";
		echo var_dump(1==4);
		echo "<br>";
		echo "The value of 1!=4 is    :";
		echo var_dump(1!=4);
		echo "<br>";
		echo "The value of 1>=4 is    :";
		echo var_dump(1>=4);
		echo "<br>";
		echo "The value of 1<=4 is    :";
		echo var_dump(1<=4);
		
		// increment/decrement operators
		echo "<h1> increment/decrement Operators</h1>";

		echo "<br>";
		echo $variable1++;
		echo "<br>";
		echo $variable1;
		echo "<br>";
		echo $variable1--;
		echo "<br>";
		echo ++$variable1;
		echo "<br>";
		echo $variable1;
		echo "<br>";
		echo --$variable1;

		// Logical operators
		echo "<h1> Logical Operators</h1>";
		// and (&&)
		// or (||)
		// xor
		// not (!)

		$myVar = 4;
		$myVar = (true and true);
		echo var_dump($myVar);
		echo "<br>";
		$myVar = (false and true);
		echo var_dump($myVar);
		echo "<br>";
		$myVar = (true or true);
		echo var_dump($myVar);
		echo "<br>";
		$myVar = (false or true);
		echo var_dump($myVar);
		echo "<br>";
		$myVar = (true xor true);
		echo var_dump($myVar);
		echo "<br>";
		$myVar = !(true);
		echo var_dump($myVar);
		?>

		<?php
		// Data Types :
		// 1. String
		// 2. Integer
		// 3. Float
		// 4. Boolean
		// 5. Array
		// 6. Object
		echo "<br> <br><h1>Data Types</h1>";
		$var = "this is string";
		echo var_dump($var);
		$var = 66;
		echo "<br>";
		echo var_dump($var);
		$var = 66.5;
		echo "<br>";
		echo var_dump($var);
		$var = true;
		echo "<br>";
		echo var_dump($var);
		?>

		<?php
		echo "<h1>Functions</h1>";

		function print_number($number){
			echo "<br> Your Number is :";
			echo $number;
		}
		print_number(45);
		print_number(435);
		print_number(4);

		function print5(){
			echo "<br> <br>My name is Farwa";
		}
		print5();
		print5();
		print5();
		print5();

		echo "<br>";
		$length = array("Farwa", "Tara", "Eman");
		// echo var_dump($length);
		echo "<br>";
		echo "My name is :";
		echo $length[2];
		echo "<br>";
		echo count($length);
		
		// loops in php
		echo "<h1> Loop in PHP  </h1>";
		$a = 0;
		while ($a <=10){
			echo "<br> The value of a is: ";
			echo $a;
			$a++;
		}
		?>

		<?php
		echo "<h1>Functions of string in PHP</h1>";
		$str = "This is a string";
		echo $str. "<br>";
		$lenn = strlen($str);
		echo "The length of this string is ". $lenn .". Thank you. <br>";
		echo "The number of words in this string is ". str_word_count($str) . ". Thank you <br>";
		echo "The reversed string is ". strrev($str). ".Thank you <br>";
		echo "The search of this string is ". strpos($str, "a"). ".Thank you <br>";
		echo "The replace string is ". str_replace("string", "Full string", $str). ".Thank you <br>";

		?>

	</div>
</body>
</html>
