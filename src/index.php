<?php
//declare(strict_types=1);
//
//$variable = [];
//$variable = array();
//
////$array = [4 =>'elem1', 'elem2', 'elem3', 'elem4', 'elem5'];
//
//$array = ['elem1', 'elem2', 'elem3', 'elem4', 'elem5'];
//
//$array[10] = 'elem6';
//
////var_dump($array[2]);
//
//$assocArray = ['name' => 'Jim', 'age' => 25, 'location' => 'Odesa'];
//echo $assocArray['name'] . PHP_EOL;
//$assocArray['position'] = 'Developer';
//$assocArray[] = 'test string';
//
//var_dump($assocArray);

//$multiArray = ['name' => 'Jim', 'age' => 25, 'location' => [
//	'country' => 'Ukraine',
//	'city' => 'Odessa',
//	'coords' => [
//		'lang' => -54,
//		'lat' => 15
//	]
//]];
//
//echo $multiArray['location']['coords']['lang'] . PHP_EOL;


//$array = [1,2,3,4,5];
//
//$i = 1;
//$sum = 0;
//while (false) {
//	echo $i . PHP_EOL;
//	$i++;
//}

//do {
//	echo $i . PHP_EOL;
//	$i++;
//} while (false);

//$array = ['elem1', 'elem2', 'elem3'];
//
//foreach ($array as $k => $v) {
//		$array[$k] = 'test';
//		$v = 'test';
//}
//
//var_dump($array);
//var_dump($v);


//for ($i = 1, $j = 2; $i <= 10, $j <=4; $i++, $j +=2) {
//	echo $i . PHP_EOL;
//	echo "--------------" . PHP_EOL;
//	echo $j . PHP_EOL;
//}

//$array = [1 ,2, 3, 4, 5];
//$length = count($array);
//for ($i = 1; $i < $length; $i++){
//	echo $array[$i] . PHP_EOL;
//}
//echo count($array) . PHP_EOL;

//$array = [1, 2, 3, 44, 5, 6, 72, 8, 9, 10];
//foreach ($array as $value){
//	if ($value === 6) {
//		break;
//	}
//	$result[] = $value;
//}
//
//var_dump($result);


//$result = [];
//foreach ($array as $value) {
//	if ($value % 2 !== 0){
//		continue;
//	}
//	$result  = $value;
//}
//var_dump($result);
//
//$result = [];
//foreach ($array as $value) {
//	if ($value % 2 === 0){
//		$result[]  = $value;
//	}
//}
//
//$vacancies = [
//	['title' => 'PHP DEVELOPER' , 'salary' => 2000, 'location_id' => 1, 'sector_id' => 1],
//	['title' => 'JS DEVELOPER' , 'salary' => 2500, 'location_id' => 2, 'sector_id' => 1],
//	['title' => 'Finance Manager' , 'salary' => 3000, 'location_id' => 3, 'sector_id' => 2],
//];
//
//$locations = [
//	['id' => 1, 'name'=> 'Odesa'],
//	['id' => 2, 'name'=> 'Lviv'],
//];
//
//$sectors = [
//	['id' => 1, 'name' => 'IT'],
//	['id' => 2, 'name' => 'Finance'],
//];
//
//foreach ($vacancies as &$vacancy){
//	$locationId = $vacancy['location_id'];
//	$vacancy['location'] = 'Not found';
//	foreach ($locations as $location) {
//		if ($location['id'] == $locationId){
//			$vacancy['location'] = $location['name'];
//			break;
//		}
//	}
//	$sectorId = $vacancy['sector_id'];
//  	$vacancy['sector'] = '';
//	foreach ($sectors as $sector) {
//		if($sector['id'] === $sectorId) {
//			$vacancy['sector'] = $sector['name'];
//			break;
//		}
//	}
//}
//
//var_dump($vacancies);


function generateArray(int $length = 10, int $min = 1, int $max = 10) : array
{
	$array = [];
	for ($i = 0; $i < $length; $i++) {
		$array[] = rand($min, $max);
	}
	return $array;
}

$myArray = generateArray();
var_dump($myArray);