<?php 

	echo '// Variables <br>';
	
$var1 = 'Variable 1';
$var2 = 'Variable 2';

echo $var1 . $var2;

##########################################
echo '<br><br>########<br><br>';

 echo '<br> <br> Basic if statements';
 
if (1 == 2 || 2 == 2){ 					// this means if either of those statments are true, it will return 'test'
	echo '<br> <br>test';
}

//////////////////////////////////

	// if one of the variables is equal to true it will return true, otherwise it will be false

$a = true;
$b = false;

if ($a == true){
	echo '<br><br> True';
}else{
	echo '<br><br> False';
}

/////////////////////////////////

	// "the turnary operator"
	
$ten = 10;
$twelve = 12;

if($ten === $twelve){
	$var = true;	
}else{
	$var = false;
}

// or you could do a sorter version of the code above here:

$var = ($a === $b) ? true : false;

var_dump($var);

########################################
echo '<br><br>########<br><br>';

	echo 'Arrays<br><br>';
	
	echo 'Array1<br><br>';
	
$names = array('Graham', 'Gareth', 'Ciara');

print_r($names);

////////////////////////////

echo '<br><br> Array2 <br><br>';

	// assigning variables to array elements
	
$list = array(
		'key' => 'Orange',
		'key1' => 'Apple',
		'key2' => 'Pear'
);

print_r($list);

///////////////////////////

echo '<br><br> Array3 <br><br>';

$users = array(
		'Mike' => array(
				'firstname' => 'Mike',
				'lastname' => 'Fox',
		),
		'John' => array(
				'firstname' => 'John',
				'lastname' => 'Smith',
		)
);

print_r($users);

#########################################
echo '<br><br>########<br><br>';

echo '<br><br> Functions <br><br>';

$string = 'This is a string';
$length = strlen($string);  // This will tell you how many characters are in the string "strlen()"!

echo $length;

echo '<br><br>';

// String split function = convert the string into an array:

$string1 = 'This is another string';
$length = str_split($string1);

print_r($length);

echo '<br><br>';

echo'Encrpting a string:';

$string2 = 'Encrypt this string: ';

function encrypt($string2){
	$string2 = strrev($string2);
	$string2 = base64_encode($string2);
	$string2 = md5($string2);
	
	echo $string2;
}

encrypt($string2);

echo '<br><br>########<br><br>';

echo'Loops <br><br>';
	
	echo '<br> While Loop:<br>';
	
	$x = 0;
	
	while($x <=5){
		echo $x, '';
		++$x;
	}

	echo '<br><br>For Loop:<br>';
	
	for ($z = 0; $z <= 10; ++$z){ // 3 parts, the first part is defining the $z variable as 0/ the initial condition of z. second & thirs part is: while z is less than 10 increment is by 1 unitl 10 is reached, then return what's in the curly brackets.
		echo "{$z} ";
	}
	
	echo '<br><br>Foreach Loop:<br>'; // does something for each element in an array
			
	$men = array('Bob', 'John', 'Mike');
	
	foreach ($men as $man){
		echo $man, ' ';
	}
	
	echo '<br><br>Do while Loop:<br>';
	
	$v = 0;
	
	do{
		echo $v, '';
		++$v;
	}while($v <= 10);
		
echo '<br><br>########<br><br>';

	echo 'Classes <br>';
		

	// a class is a collection of functions and properties that all wprk together
	
class example{
	public function test(){
		echo 'testing';
	}
}

$class = new example();
$class->test();



	
	
	
	
?>