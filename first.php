<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hello World in PHP</title>
</head>

<body>
	<?php

	//..................Variables......................

	// echo " Hello World";

	$name = ' Taufiq Azad Siam';
	// echo $name;
	$sum = 34 + 34;
	echo $sum . " " . $name;

	$familly = "<h1>Taslima Akter</h1>";

	echo $familly;


	//...................Math in PHP.........................


	echo 34 + 56;

	echo "<br>";

	echo 34 - 23;

	echo "<br>";

	echo 34 * 23;

	echo "<br>";

	echo 34 / 23;

	//...................Array in PHP...............................

	$nameList = ['<h1>Taufiq Azad Siam</h1>', "Salman Omar", "Sadhin Ahnaf", "Tamim Zabir"];
	$printRShowCase = ['a' => 'Apple', 'b' => 'Banana', 'c' => ['x', 'y', 'z']];


	// echo $nameList[0];

	print_r($nameList);
	echo "<br>";
	print_r($printRShowCase[a]);


	//.............Associative Array......................

	$names = ["first_name" => "Salman", "last_name" => "Omar", "first_name" => "Taufiq Azad", "last_name" => "Siam"];

	echo $names["first_name"] . " " . $names["last_name"];


	//..........Practice with Adwin Diaz..................

	$number1 = 10;
	$number2 = 20;

	echo $number1 + $number2;

	$numberList = [12, 34, 56, 78, 90];
	$numberList = ["first_number" => 12, "middle_number" => 34,];

	//....................if statement..................

	$name = "Salman Omayer";


	if ($name === "Omar") {
		echo "<h1>Logged In</h1>";
	} else if ($name === "Salman Omayer") {
		echo "don't log in";
	} else {
		echo "Login First";
	}

	//............Switch..................

	$number = 100;

	switch ($number) {
		case 34:
			echo "This is right";
			break;
		case 20:
			echo "This is right";
			break;
		case 10:
			echo "<h1>This is right</h1>";
			break;
		case 15:
			echo "This is right";
			break;
		case 5:
			echo "This is right";
			break;

		default:
			echo "<h2>We can't find Anything!</h2>";
	}


	//.............while Loop.................

	$i = 0;

	while ($i < 10) {
		echo "<h1>Siam is The PhP Boss</h1>";

		// $i++;

		$i = $i + 1;
	}


	//.....................For Loop..........
	for ($i = 1; $i < 10; $i++) {
		echo "<h1>" . $i . "</h1>";
	}

	//.........Most Used Loop in PHP ForEach Loop...........

	$phoneNumbers = ["01681054169", "01796409836", "01725656600", "01710763003"];

	foreach ($phoneNumbers as $phoneNumbers) {
		echo "Phone Number of User: " . $phoneNumbers . "<br>";
	}


	//................Function...................

	function say_something()
	{

		echo "Hello Siam! How are you?";
	}

	say_something();

	function calculate($a, $b)
	{
		$calc = $a + $b;
		echo $calc;
	}

	calculate(23, 56);


	function calculator($numberA, $numberB)
	{
		$calculate = $numberA * $numberB;
		return $calculate;
	}

	$result = calculator(34, 56);
	echo $result;

	//..............Global And Local Scopes................ 

	$x = "Outside";
	echo $x;
	echo "<br>";
	function scopes()
	{
		global $x;

		$x = "inside";
	}

	echo $x;

	//............Const in PHP.................
	define("name", 34);
	echo name;
	//...........New Const In PHP................
	const love = "I love Someone that never change!";
	echo love;

	//.................Built in Function (Math).................
	echo pow(2, 4);
	echo "<br>";
	echo rand(1, 6);
	echo "<br>";
	echo ceil(2.5);
	echo "<br>";
	echo floor(5.7);
	echo "<br>";
	echo round(3.668494);
	echo "<br>";
	echo sqrt(100);
	echo "<br>";




	?>
</body>

</html>