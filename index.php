
<?php
$numer = -5;
echo'modulis:'. abs($numer).'<br>';

$ceil = 3.4;

echo'apvaliname i didziaja puse:'. ceil($ceil). '<br>';
echo'apvaliname i mazaja puse:'. floor ($ceil) . '<br>';
$mas = [3,4,9,2];

echo 'min reiksme is masyvo:'.min($mas).'<br>';
echo 'max reiksme is masyvo:'. max($mas).'<br>';
echo 'max reiksme is skaiciu eilutes:'.max(4,5,3).'<br>';

echo'atsitiktinis skaicius:'. mt_rand(4, 30). '<br>';
echo'PI reiksme:'. pi(). '<br>';
echo'PI reiksme is konstantos:'. M_PI . '<br>';
echo'Apvaliname su kableliu:'. round($ceil,2).'<br>';
$sqrt = 10;
$sqrt2 = 49;
echo 'kvadratine saknis:'. sqrt($sqrt).'cia tarpas ir toliau kitas skaicius:';

echo sqrt($sqrt2) .'<br>';
$kintamasis = round($ceil, 2);
$kintamasis = abs($kintamasis);

$kintamasis = 'suapvalina\'mas modulis:'.abs(round($ceil. 2 ));

echo $kintamasis. '<br>';
$skaicius1 = 5;
$skaicius2=10;
echo'skaiciu daugyba 5*10:'. ($skaicius1*$skaicius2).'<br>';
$string = 'Loren hbvjkbvh';
$string1 = 'laijoaen1';

$numer = 345;
echo 'Lorem ipsum lorem ipsum' . 'Ler1234'. '<br>';
echo 'Lorem ipsum lorem ipsum'. $string. '<br>';

$password = 'my_password';
$salt = 'gk546451essf';
$string= 'labas as krabas';
echo crypt($password, $salt).'<br>';

// print_r( explode(' ', $string)).'<br>';

//public
//private
//static
//protected

//function pavadinimas()
//{
//    kodas_
//}

// $plotas = 3*5;
// echo $plotas . '<br>';
// $plotas = 5*5;
// echo $plotas . '<br>';
// $plotas = 7*5;
// echo $plotas . '<br>';
// function pranesimas()
// {
//     echo'ivykdtas sekmingai' ;

// }
// // function plotas($weight, $height)
// // {
// // $plotas = $weight * $height;
// // echo $plotas . '<br>';
// // }

// function grazinimas ($weight, $height)
// {
//     $plotas = $weight * $height;
//     return $plotas;
// }
// plotas (3,5);
// plotas(5,5);
// plotas(7,5);
// plotas(6,76);

// pranesimas();


//isveskite kubo plota
function plotas($height,$weight)
{
    $plotas = $height * $weight;
    return ($plotas * 2);
}

function kubo_plotas($p1,$p2,$p3)
{
    $kubo_plotas = $p1 + $p2 + $p3;
    echo $kubo_plotas;
}


$p1 = plotas(4, 3);
$p2 = plotas(4, 6);
$p3 = plotas(3, 6);

kubo_plotas($p1, $p2, $p3);

// pranesimas();
echo '<br>';
function kauliukas()
{
    echo 'Ismestas skaicius:' . mt_rand(1,6);
}
kauliukas();
echo '<br>';

function vardas($vardas)
{
    echo 'Labas '. strtoupper($vardas).'<br>';
}
vardas("Jonas");

function PusePloto($a,$b)
{
    echo ($a * $b)/2;
}
PusePloto(5,6);
 echo '<br>';
function kieklaiko($valandos)
{
   $dienos = floor($valandos/ 24);
   $val = $dienos * 24;
echo $dienos . ' dienos(u) ir'. ($valandos - $val) . 'valandos(u)';
}

kieklaiko(698);
echo'<br>';
// function plyteliukiekis($plytelesX,$plytelesY, $sienosPlotas)
// {
// $plyteliuPlotas = $plytelesX * $plytelesY;
// $plyteliukiekis = ceil($sienosPlotas / $plyteliuPlotas);
// echo 'Reikalinga' . $plyteliukiekis;
// }

// plyteliukiekis(12,12, 1000);
function plyteliukiekis($plytelesX,$plytelesY, $sienosPlotas)
{
$plyteliuPlotas = ($plytelesX + 0.4) * ($plytelesY + 0.4);
$plyteliukiekis = ceil($sienosPlotas / $plyteliuPlotas);
echo 'Reikalinga' . $plyteliukiekis;
}

plyteliukiekis(12,12, 1000);

echo'<br>';

function plytelesbaseinui($ilgis, $plotis, $gylis)
{
    $baseinoPlotas = apskaiciuotidugnoplota($ilgis, $gylis);
    apskaiciuotiSienuPlota($gylis, $plotis) + apskaiciuotiSienuPlota($gylis, $plotis);
    $plytelesPlotas = plytelesPlotis(12, 12, 0.4);

    return ceil($baseinoPlotas / $plytelesPlotas);
}

function apskaiciuotiDugnoPlota($ilgis, $plotis)
{
    return $ilgis* $plotis;
}

function apskaiciuotiSienuPlota($ilgis, $plotis)
{
    return ($ilgis * $plotis * 2);
}

function plytelesPlotis($ilgis, $plotis, $tarpas = 0)
{
    return ($ilgis + $plotis) * ($plotis + $tarpas);
}

echo 'Reikalinga plyteliu:' . plytelesbaseinui(2500, 1000, 300). '<br>';


$string2 = 