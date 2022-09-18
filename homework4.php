<?php
$firstArr = [
'one' => 1,
'two' => [
  	'one' => 1,
  	'seven' => 22,
  	'three' => 32,
  ],
'three' => [
	'one' => 1,
	'two' => 2,
 ],
'foure' => 5,
'five' => [
   'three' => 32,
   'foure' => 5,
   'five' => ['12' => 1, '13' => 2],
],  
];

function arraySearch($array, $number)
{
	$resultArray = [];
	$counter = 1;
	foreach ($array as $value){
				if ($counter == $number) {
					$resultArray[] = $value;
				}
					if (is_array($value)) {
							$resultArray[] = arraySearch($value, $number);
					}
	  $counter++;
	}
	return $resultArray;
}
echo '<pre>';
print_r(arraySearch($firstArr, 2));
echo '</pre>';


$str = 'bbbbbbbbbbbbbbaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbb';

function counterB($str)
{
	if (is_string($str)) {
	return substr_count($str, 'b');
	} else {
	return false;
	}	
}
$result = counterB($str);
var_dump($result);

$firstArr1 = [
'one' => 1,
'two' => [
  	'one' => 1,
  	'seven' => 22,
  	'three' => 32,
  ],
'three' => [
	'one' => 1,
	'two' => 2,
 ],
'foure' => 5,
'five' => [
   'three' => 32,
   'foure' => 5,
   'five' => 12,
],  
];
function counterValues($array)
{
	$sum = array_sum($array);
	foreach ($array as $value) {
			if (is_array($value)) {
				$sum = counterValues($value) + $sum;				
			}
		}
	return $sum;
}
var_dump(counterValues($firstArr1));

function squareSize($big, $small)
{
	$a = pow($big, 2);
	$b = pow($small, 2);
	$result = $a / $b;
	return floatval($result);
}
var_dump(squareSize(7, 3));