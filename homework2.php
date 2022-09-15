<?php
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
echo count($arr) . "<br>";

for ($i=0; $i < 4; $i++) { 
	$a = array_shift($arr);
	array_push($arr, $a);
}
print_r($arr);
array_push($arr, $a);
var_dump($arr);

$sum = 0;

for ($i=3; $i < 6; $i++) { 
	$sum = $sum + $arr[$i];
	
}

var_dump($sum);

$firstArr = [
  'one' => 1,
  'two' => 2,
  'three' => 3,
  'foure' => 5,
  'five' => 12,
];

$secondArr = [
  'one' => 1,
  'seven' => 22,
  'three' => 32,
  'foure' => 5,
  'five' => 13,
  'six' => 37,
];
$resultarr = [];
foreach ($secondArr  as $key => $value) {
	if (!in_array($value, $firstArr) && !array_key_exists($key, $firstArr)) {
		$resultarr[$key] = $value;
	}
}
var_dump($resultarr);

$resultarr1 = [];
foreach ($firstArr  as $key => $value) {
	if (!in_array($value, $secondArr) && !array_key_exists($key, $secondArr)) {
		$resultarr1[$key] = $value;
	}
}
var_dump($resultarr1);
$reultarr2 = [];
foreach ($secondArr  as $key => $value) {
	if (in_array($value, $firstArr) && array_key_exists($key, $firstArr)) {
		$resultarr2[$key] = $value;
	}
}
var_dump($resultarr2);

$resultarr3 = [];
foreach ($secondArr  as $key => $value) {
	if (!in_array($value, $firstArr)) {
		$resultarr3[$key] = $value;
	}
}
var_dump($resultarr3);

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
$secarr = [];
foreach ($firstArr1 as $value) {
	if (is_array($value)) {
		$counter = 0;
		foreach($value as $var1) {
			$counter++;
			if ($counter == 2) {
				$secarr[] = $var1;
			}
		}

	}
}
	var_dump($secarr);

	$val2 = [];
	foreach ($firstArr1 as $value1) {
		$val2[] = $value1;
	}
	foreach ($firstArr1 as $value2) {
		if (is_array($value2)) {
			foreach ($value2 as $value3) {
				$val2[] = $value3;
			}
		}
	}

var_dump(count($val2));
var_dump(array_sum($val2));



?>