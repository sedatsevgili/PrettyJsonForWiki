<?php
/**
 * Prints json content pretty for editing wiki templates
 */
$jsonContent = '{ "YOUR_JSON_CONTENT": "BLA_BLA_BLA" }';
$json = json_decode($jsonContent, true);
$str = ' {' . PHP_EOL;
$k = 0;
foreach($json as $mainKey => $array) {
	$str .= '  "' . $mainKey . '": [' . PHP_EOL;
	for($i = 0; $i < count($array); $i++) {
		$value = $array[$i];
		$str .= '   "' . $value . '"';
		if($i < count($array) - 1) {
			$str .= ',';
		}
		$str .= PHP_EOL;
	}
	$str .= '  ]';
	if($k < count($json) - 1) {
		$str .= ',';
	}
	$str .= PHP_EOL;
	$k++;
}
$str .= ' }' . PHP_EOL;
echo $str;


