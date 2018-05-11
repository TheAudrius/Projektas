<?php

function buyproducts($eggs = true)
{
    $milk = 1;

    if ($eggs == true)
    {
$milk = 10;
    }

    echo 'Pieno:' . $milk . '<br>';
}

buyproducts(false);
$number = 10;
if ($number <5) 
{
    echo 'tikrai taip';
}
 elseif  ($number > 5)
{ 
    
    echo 'lyg ir taip';
}   
else 
{
    echo 'tikrai ne';
}
echo '<br>';
//LOGINIAI operatoriai:
// && (and) || (or)

$prekesKiekis = 10;
$norimasKiekis = 1;
$galimaParduoti = true;

if($norimasKiekis <= $prekesKiekis && $galimaParduoti != false) 
{
    echo'dedam <br>';
}
else
{
    echo 'nededam <br>';
}

$prekesKiekis = 5;
$norimasKiekis = 10;
$galimakeisti = true;
if($prekesKiekis<= $norimasKiekis && $galimakeisti == true && $norimasKiekis ==1)
{
    echo 'prekes kiekis mazesnis arba lygus prekes kiekiui ir galima parduoti ir norimas isigyti prekes kiekis yra minimum 1'. '<br>';
}
else
{
    echo 'prekes kiekis ne mazesnis arba lygus prekes kiekiui ir ne galima parduoti ir norimas isigyti prekes kiekis nera minimum 1'. '<br>';
}

define('PAVADINIMAS', 'puslapis');
define ('KIEKIS', 10);
if( defined ('PAVADINIMAS'))
{
    echo PAVADINIMAS;
}
else
{
    echo 'Please define PAVADINIMAS';
}
echo '<br>';
$norimasKiekis = 15;

if(KIEKIS>=$norimasKiekis)
{
    echo 'galima deti i krepseli';
}
else {
    echo 'truksta kiekio parduotuveje';
}


$masyvas1 = ['isplauti indus',
'isvalyti grindis',
'isnesti siuksles',
'pavedzioti suni',
];

$masyvas2 = [0 =>'isplauti indus',
1=>'isvalyti grindis',
2=>'isnesti siuksles',
3=>'pavedzioti suni',
];
$masyvas3 = [
    'Pavadinimas' => 'Automobiliai',
    [
        'marke' => 'Audi',
        'modelis' => 'A6',
        'kubatura' => 1995,
        'metai' => 2016,
    ],
    [
        'marke' => 'bmw',
        'modelis' => 'M3',
        'kubatura' => 2995,
        'metai' => 2018,
    ],
];

echo '<pre>';
print_r ($masyvas1);
print_r ($masyvas2);
print_r ($masyvas3);
echo '</pre>'; 

$Prekes = [
 'Sviestas',
 'Duona',
 'Desra',
 'Desreles',
 'Suris',
 'Pienas',
];  

$automobiliai = [
    'Pavadinimas' => 'Automobiliai',
    [
        'id' => 54,
        'marke' => 'Audi',
        'modelis' => 'A6',
        'kubatura' => 1995,
        'metai' => 2016,
    ],
    [
        'id' => 23,
        'marke' => 'bmw',
        'modelis' => 'M3',
        'kubatura' => 2995,
        'metai' => 2018,
    ],
];
$automobiliai1 = [
    'Pavadinimas' => 'Automobiliai',
    [
        'id' => 24,
        'marke' => 'Renault',
        'modelis' => 'Espace',
        'kubatura' => 1598,
        'metai' => 2013,
    ],
    [
        'id' => 55,
        'marke' => 'Peugot',
        'modelis' => '206',
        'kubatura' => 1300,
        'metai' => 2000,
    ],
];

echo '<pre>';
print_r($Prekes);
print_r(array_chunk($Prekes, 2 ));
$arrayColumn = array_column($automobiliai, 'modelis', 'id');
print_r ($arrayColumn);
var_dump(array_key_exists(44, $Prekes));
print_r(array_keys($arrayColumn));
print_r(array_merge($automobiliai, $automobiliai1));
array_pop($Prekes);
array_pop($Prekes);
print_r($Prekes);

array_push($Prekes, ['suris', 'sausainiai']);
array_push($Prekes, 'suris');
array_push($Prekes, 'sausainiai');
print_r ($Prekes);

print_r(array_search( 'suris', $Prekes ));

array_shift($Prekes);

print_r($Prekes);
$prekiuKainos= [5, 4.3, 3, 'textas', 6, 8 , '3'];
print_r(array_sum($prekiuKainos));

$prekes1 = ['suris', 'desra', 'suris', 'duona', '3'];
print_r(array_unique($prekes1));

print_r(array_values($automobiliai[0])) ;

print_r(count( $prekes1));

var_dump(in_array('Audi', $automobiliai[0]));

$vaisiai = ['obuolys', 'kriause', 'vynuoge', 'braske'];

sort($vaisiai);
print_r($vaisiai);

print_r($automobiliai[1] ['modelis']);



echo '<br>';

$Masyvas =[
[
    0=> '1 kabinetas',
    1=> '2 kabinetas', 
    2=> '3 kabinetas',
],
'2aukstas' => 'kabinetai',
[
    0=> '4 kabinetas',
    1=> '5 kabinetas',
    2=> '6 kabinetas',
],
];

echo($Masyvas [1][2]) . '<br>';
echo($Masyvas [1][1]) . '<br>';
echo($Masyvas [1][0]) . '<br>';
echo($Masyvas [0][2]) . '<br>';
echo($Masyvas [0][1]) . '<br>';
echo($Masyvas [0][0]) . '<br>';


// $masyvas2 = [0 =>'isplauti indus',
// 1=>'isvalyti grindis',
// 2=>'isnesti siuksles',
// 3=>'pavedzioti suni',
// ];

$Padalinys1=
[
    [
    'Vardas' => 'Petras',
    'Pavarde' => 'Petraitis',
    'Amzius'=> 15,
],
[
    'Vardas' => 'Jonas',
    'Pavarde' => 'Jonaitis',
    'Amzius'=> 18,
],

];
$Padalinys2 = [
   [ 'Vardas' => 'Kazys',
    'Pavarde' => 'Kazaitis',
    'Amzius'=> 20,
],
[
    'Vardas' => 'Šlepa',
    'Pavarde' => 'Šlepaitis',
    'Amzius'=> 22,
],

];
$komandos= array_merge($Padalinys1, $Padalinys2);
// print_r(array_merge($Padalinys1, $Padalinys2));
echo '<pre>';
print_r(array_chunk($komandos, 3 ));
$arrayColumn1 = array_column($komandos, 'Vardas', 'Pavarde');

print_r($arrayColumn1);

if (array_key_exists('Jonaitis', $arrayColumn1))
{
    echo $arrayColumn1['Jonaitis']. '<br>';
}
else
{
echo 'nera' . '<br>';
}

echo '</pre>';


//$arrayColumn = array_column($automobiliai, 'modelis', 'id');
//print_r ($arrayColumn);
//merge
//chunk
