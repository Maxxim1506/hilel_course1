<?php
// function takes_array($arr)
// {
//     var_dump($arr);
// }
// $firstarr = array(1 => 'one', [1 => 'one', 2 => 'two', 3 => 'three'], [1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four']);
// takes_array($firstarr);

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
