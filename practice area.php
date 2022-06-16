<?php

/*
// Multi Dimensional Array
$blogs = [
	['Bubu is gone', 'It is amazing', 90],
	['The End is Near', 'Are we Ready', 10]
];
array_pop($blogs);
print_r($blogs);

// Multi Dimensional Associate Array 
$blogz = [
	['HeadLine' => 'Bubu is gone', 'Full Details' => 'It is amazing', 'Likes' => 90],
	['HeadLine' => 'The End is Near', 'Full Details' =>'Are we Ready', 'Likes' => 10]
];

$blogz[] = ['HeadLine' => 'It Will End in priase', 'Full Details' =>'What God cannot see doesnt exists', 'Likes' => 800];

print_r($blogz);

//Creating Variables 
$name = "Joy Egbala";

//Creating constant
define("ALIAS", "Ewazi Kolo");

//Creating Arrays
$male = ['Bubuzor', 'Ekweli', 'Nzube'];
$female = ['Ifunanya', 'Osinachi', 'Adai'];

echo $names[0];

//Addind Elements to the end of the array
$male[] = 'Emeka';

// Merging Arrays
$allnames = array_merge($male, $female); 

//Associate array
$associateTwo = array('Keys' =>'Values' ,'AnotherKey' =>'AnotherValue');
$associate['ThirdKey'] = 'ThirdValue';
echo $associate['Key'];
print_r($associate);
print_r($associateTwo);
print_r($allnames);

//For loop
for ($i=0; $i <count($female) ; $i++) { 
	echo $female[$i]. '<br/>';
}
foreach ($female as $values) {
	echo $values. '<br />';
}

foreach ($blogz as $News) {
	echo $News['HeadLine'] . ' - ' . $News['FullDetails'] . ' - ' . $News['Likes'];
	echo '<br />';
}


//Loops
$female = ['Ifunanya', 'Osinachi', 'Adai'];
$blogz = [
	['HeadLine' => 'Bubu is gone', 'FullDetails' => 'It is amazing', 'Likes' => 90],
	['HeadLine' => 'The End is Near', 'FullDetails' =>'Are we Ready', 'Likes' => 10]
];
$i = 0;
while ( $i < count($female)) {
	echo $female[$i] . '<br />';
	$i++;
}*/
function sayHello($product){
	echo 'Hello World';
	echo "Your product name is {$product['name']} amd the price of this product is {$product['price']}";
}
sayHello(['name' => 'Ekpang Kuwor', 'price' => 'N 500']);
include 'ninja.php';
	require('ninja.php');

	echo "End of the Road";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2> HeadLines  </h2>
<p>
	<!--<?php #echo "Hello Welcome Miss $name, also known as ".ALIAS ?>-->
	<?php foreach ($blogz as $blog) { ?>
		<h4> <?php 
			echo $blog['HeadLine']. '<br />';
		?> </h4>

	<?php } ?>
	</p>
</body>
</html>