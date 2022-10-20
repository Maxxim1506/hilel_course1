<?php

// Создание списка рандомных чисел

function randomValues(int $lenght)
{
	$values= [];
	for ($i=0; $i < 50; $i++) { 
	$values[] = mt_rand(0, 50);
	}
	return $values;
}
 // var_dump(randomValues(50));
function renderHtml(array $array)
{
	$html = "<ol>";
	foreach ($array as $value) {
		$html .= "<li>$value</li>";
	} $html .= "</ol>";
	return $html;
}


// Сумма значений элементов массива

$randomValues = randomValues(50);

$sum = array_sum($randomValues);
// var_dump($sum);


// Среднее значение элементов массива

$avarage = $sum / count($randomValues);
 // var_dump($avarage);

 // Сортировка значений массива по возрастанию

 asort($randomValues);
 // var_dump($randomValues);

// Вывод 5 минимальных значения 
 $sortValuesMin = [];
 $counter = 0;
 foreach ($randomValues as $value) {
  	$sortValuesMin[]= $value;
  	$counter++;
  	if ($counter == 5) {
  		break;
  	}
  } 
 	
// var_dump($sortValues);

// Сортировка значений массива по убыванию

arsort($randomValues);
// var_dump($randomValues);

// Вывод 5 максимальных значений

$sortValuesMax = [];
$counter = 0;
foreach ($randomValues as $value) {
	$sortValuesMax[] = $value;
	$counter++;
	if ($counter == 5) {
	 	break;
	 } 
}
// var_dump($sortValuesMax);

print_r(renderHtml($randomValues));
