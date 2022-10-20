<?php
$array = ['Max', 'Alex', 'Nick'];

function generateList(array $array, string $header, string $listType) : string 
{
	$html = "<h3>$header</h3>";
	$html .= "<$listType>";

	foreach ($array as $value) {
		$html .= "<li>$value</li>";
	}

	$html .= "</$listType>";
	return $html;
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>homework6</title>
</head>
<body>
<?=generateList($array, "Names", "ul"); ?>
</body>
</html>