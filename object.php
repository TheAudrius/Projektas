<?php

$array = [
    0=> 'Petras',
    1=> 'Antanas',
    2=> (object)['vardas3' => 'Jonas',],
];

$list = (object)[
    'Duona',
    'Suris',
    'Varske',
];

$obj = new stdClass();
$obj ->vardas1 = 'Petras';
$obj ->vardas2 = 'Antanas';
$obj ->mas = $array;

echo '<pre>';
print_r($array);
echo '<br>';
print_r($obj);

echo $array[1];
echo '<br>';

echo $obj->vardas1;
echo '<br>';
print_r($obj->mas);

echo $obj->mas[1];
echo '<br>';
echo $obj->mas[2]->vardas3;
echo $obj->mas[1];

print_r ($list);
echo $list->{0};

echo '</pre>';

$data = (object)[
    'auto1' => 'BMW',
    'auto2' => 'Audi',
    'auto3' => 'MB',
];

$data1 = new stdClass();
$data1->auto1 = 'BMW';
$data1->auto2 = 'Audi';
$data1->auto3 = 'MB';

echo '<pre>';
print_r($data);
print_r($data1);
echo '</pre>';

echo $data->auto1 . '<br>';
echo $data->auto2 . '<br>';
echo $data->auto3 . '<br>';

