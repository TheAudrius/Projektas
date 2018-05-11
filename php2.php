<ul>
    <li> Klaipeda</li>
    <li> Kaunas</li>
    <li>Vilinius</>
</ul>
<select name="Miestai">
    <option value= "   ">Vilnius</option>
    <option value= "kaunas" >Kaunas</option>
    <option value= "Klaipeda" selected="selected">Klaipeda</option>
</select>

<table>
    <tr>
            <th>name</th>
            <th>lastname</th>
</tr>
<tr>
    <td>
        Petras
</td>
<td>
    Petraitis
</td>
</tr>
<tr>
    <td>
        Jonas
</td>
<td> Jonaitis</td>

    </tr>
</table>


<?php
//tr eilute th stulpeliai
echo '<br>';

$masyvas= [
    0 => '1 kabinetas',
    1 => '2 kabinetas',
    2 => '3 kabinetas',
    3 => '4 kabinetas',
    4 => '5 kabinetas',
    5 => '6 kabinetas',
];


for($i = 0; $i <= 5; $i++)
{
    echo 'Labas' . '<br>';
}
//Kiekis
$c = count($masyvas);
echo '<ul>';
for ($i = 0; $i <$c; $i++)
{
    echo '<li>' . $masyvas[$i] . '<br>' . '</li>';
}
echo '</ul>';

echo '<select>';
for ($i = 0; $i <$c; $i++)
{
    echo '<option value=' . $i .'>' . $masyvas[$i] .  '</option>';
}
echo '</select>';

echo '<br>';

for($i = 'A'; $i != 'AS'; $i++)
{
    echo $i . ' ';
}


$automobiliai = [
    0=>
    [
        'id' => 54,
        'marke' => 'Audi',
        'modelis' => 'A6',
        'kubatura' => 1995,
        'metai' => 2016,
    ],
    1=>
    [
        'id' => 23,
        'marke' => 'bmw',
        'modelis' => 'M3',
        'kubatura' => 2995,
        'metai' => 2018,
    ],
];
$c = count($automobiliai);
echo '<ul>';
for( $i = 0; $i < $c; $i ++)
{
    echo '<li>' . $automobiliai[$i] ['marke'] . '</li>' . '<br>';
}
echo '</ul>';


$kabinetai= [
    0=> 
    [
        0 => '1 kabinetas',
        1 => '2 kabinetas',
        2 => '3 kabinetas',
    ],
    1=>[
        0 => '4 kabinetas',
        1 => '5 kabinetas',
        2 => '6 kabinetas',
    ],
];


$c = count($kabinetai);
echo '<ul>';
for ($i=0; $i<$c; $i++)
{
    $k = count($kabinetai[$i]);
    for ($j = 0; $j < $k; $j++)
    {
        echo '<li>' . $kabinetai[$i][$j] . '</li>';
    }
}
echo '</ul>';

$masyvas1= [
    0 => '1 kabinetas',
    1 => '2 kabinetas',
    2 => '3 kabinetas',
    3 => '4 kabinetas',
    4 => '5 kabinetas',
    5 => '6 kabinetas',
];

$i = 0;
echo '<ul>';
while ($i < count($masyvas1))
{
    echo '<li>' . $masyvas1[$i] . '</li>';
    $i++;
}
echo '</ul>';

echo $i . '<br>';

unset($i);



unset($masyvas1[2], $masyvas1[3]);

echo '<pre>';
print_r($masyvas1);

$kabinetai1= [
    0=> 
    [
        0 => '1 kabinetas',
        1 => '2 kabinetas',
        2 => '3 kabinetas',
    ],
    1=>[
        0 => '4 kabinetas',
        1 => '5 kabinetas',
        2 => '6 kabinetas',
    ],
];

$i = 0;

echo '<ul>';
while ($i < count($kabinetai1))
{
    $j = 0;
    while ($j <count($kabinetai1[$i]))
    {
        echo '<li>' . $kabinetai1[$i][$j] . '</li>';
        $j++;
    }
    $i++;
}
echo '</ul>';

$kabinetai2= [
    0 => '1 kabinetas',
    1 => '2 kabinetas',
    2 => '3 kabinetas',
    3 => '4 kabinetas',
    4 => '5 kabinetas',
    5 => '6 kabinetas',
];



echo '<ul>';
foreach($kabinetai2 as $value)

{
    // echo '<li>' . $value . '</li>';
    echo sprintf('<li>%s</li>', $value);
    //%s tekstas
    //%d skaicius
    //echo sprintf('<li>%s%d</li>', $value, 45);
}
echo '</ul>';

echo '<ul>';

foreach ($kabinetai2 as $key => $value)
{
    echo '<li>' . $key . ' = ' . $value . '</li>';
}

echo '</ul>';


echo '<select name="kabinetai2">';

foreach ($kabinetai2 as $key => $value)
{
    echo '<option value= "' . $key . '">' . $value . '</option>';
}

echo '<select>';

// foreach ($kabinetai2 as $key => $value)
// {
//     $kabinetai2[$key] = $value . '!';
// }

foreach ($kabinetai2 as &$value)
{
    $value = $value . '!';
}

echo '<pre>';
print_r($kabinetai2);
echo '</pre>';

echo '<table border="1">';
echo'<tr>
<th>ID</th>
<th>Marke</th>
<th>Modelis</th>
<th>Galia</th>
<th>Metai</th>
</tr>';

 foreach ($automobiliai as $automobilis)
 {
     echo '<tr>';

     foreach($automobilis as $tekstas)
     {
         echo '<td>' . $tekstas . '</td>';
     }
     echo '</tr>';
 }
echo '</table>';

$Masyvas= [4, 2, 65, 3, 2];

function doubleArrayValues($array)
{
    foreach( $array as &$value)
    $value = $value * 2;
    {
        return $array;
    }
}

echo '<pre>';

print_r(doubleArrayValues($Masyvas));

echo '</pre>';

$Elementas = [
    0 => 'element1',
    1 => 'element2',
    2 => 'element3',
    3 => 'element4',
    4 => 'element5',
    5 => 'element6',
];

function SpausdinaElementus($Elementas)
{
    $c = count($Elementas);
    echo '<ul>';
    for ($i = 0; $i <$c; $i++)
    {
        echo '<li>' . $Elementas[$i] . '<br>' . '</li>';
    }
echo '</ul>';
}
SpausdinaElementus($Elementas);

// $c = count($masyvas);
// echo '<ul>';
// for ($i = 0; $i <$c; $i++)
// {
//     echo '<li>' . $masyvas[$i] . '<br>' . '</li>';
// }
// echo '</ul>';


// function spausdinaHello($i)
// {
//     //$c = const($Hello);
//     for ($i = 0; $i <= 10; $i++)
//     {
//         echo 'Hello' . '<br>';
//     }
// }


function SpausdinaHelloWorld()
{
    for($i = 0; $i < 10; $i++)
    {
        echo 'Hello world' . '<br>';
    }
}
SpausdinaHelloWorld();





$names = ['Jonas','Antanas','Petras','Kazys',];

function FirstLast($array)
{
/*Galima rasyti taip
$ret = 
[
    array_shift($array),
    array_pop($array),
];
return $ret;

*/

    //Naujas masyvas
    $ret = [];

    //Pirmas elementas
    $shift = array_shift($array);

    //Paskutinis elementas
    $pop = array_pop($array);

    $ret[] = $shift;
    $ret[] = $pop;

    return ($array);
}

echo '<pre>';
print_r (firstLast($names));
echo'</pre>';

$Elementai = [
    0=> 'elememt1',
    1=> 'element2',
    2=> 'element3',
    3=> 'element4',
    4=> 'element5',
];
$KitiDalykai = [
    0=> '1dalykas',
    1=> '2dalykas',
    2=> '3dalykas',
    3=> '4dalykas',
];

function PriimaElementus($masyvas1, $masyvas2)
{
return array_merge($masyvas1, $masyvas2);
}


print_r (PriimaElementus($Elementai, $KitiDalykai));


// echo'<pre>';
// print_r(PriimaElementus($merge));
// echo'</pre>';
/*$Elementas = [
    0 => 'element1',
    1 => 'element2',
    2 => 'element3',
    3 => 'element4',
    4 => 'element5',
    5 => 'element6',
];

function SpausdinaElementus($Elementas)
{
    $c = count($Elementas);
    echo '<ul>';
    for ($i = 0; $i <$c; $i++)
    {
        echo '<li>' . $Elementas[$i] . '<br>' . '</li>';
    }
echo '</ul>';
}
SpausdinaElementus($Elementas);*/