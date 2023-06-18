<?php


$langs = array("HTML", "CSS", "JS");
echo "I learnt " . $langs[0] . ", " . $langs[1] . " and " . $langs[2] . ".";

array_push($langs, 'react', 'jQuery');
var_dump("<br>",$langs);


$progLangs = ['laravel' => 'php' , 'spring' => 'java' , 'rails' => 'ruby'];

$progLangs['js'] = 'nextJs';
echo '<pre>';
var_dump($progLangs);
echo '<pre/>';



// multidimintion Array
$cars = [
['vehicleName' => 'Volvo' , 'price' => 120000],
['vehicleName' => 'BMW' , 'price' => 9999999]
];

echo '<pre>';
var_dump($cars);
echo '<pre/>';


$arrTest = ['e' => 'emad' , 'm' => 'mohamed' , 'e' => 'eslam'];

var_dump($arrTest['e']);
?>