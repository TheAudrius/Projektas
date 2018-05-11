<?php


$produktai = [
    [
        'title' => 'Knyga Kaip uzdirbti milijona',
        'price' => 4.3457
    ],
    [
        'title' =>'Knyga kaip ismokti programuoti',
        'price' => 15.2345,
    ],
    [
        'title' =>'Knyga kaip ismokti programuoti',
        'price' => 15.2345,
    ],
];

echo '<ul>';

foreach($produktai as $product)
{
    echo '<li>'. $product['title'] . '. Kaina: ' . formatPrice($product ['price']) . '</li>';

}
echo '</ul>';

function formatPrice($price)
{
    $ret = round($price, 2) . ' EUR';

    return $ret;
}

$masyvas2 = ['Jonas', 'Petras', 'Antanas',];

function Isvedavidurini($array)
{
    $ret = 
    [
        array_shift($array),
        array_pop($array),
    ];
    return $array;
}
echo '<pre>';
print_r (Isvedavidurini($masyvas2));
echo '</pre>';
echo $masyvas2[1] . '<br>';


$masyvas1 = [0, 4, 1, 2, 2, 65, 3, 3, 4, 2];
echo $masyvas1[5] . '<br>';

$masyvas3 = [
    0 => [
        0 => '1 kabinetas',
        1 => '2 kabinetas',
        2 => '3 kabinetas',
    ],
    1 => [
        0 => '4 kabinetas',
        1 => '5 kabinetas',
        2 => '6 kabinetas',
    ],
];

echo $masyvas3[0][1] . '<br>';
echo $masyvas3[1][2] . '<br>';

$masyvas5 = [
    [
        'marke' => 'Audi',
        'model' => 'A6',
        'kubatura' => 1995,
        'metai' => 2016,
    ],
    [
        'marke' => 'BMW',
        'model' => 'M3',
        'kubatura' => 2995,
        'metai' => 2018,
    ],
    [
        'marke' => 'BMW',
        'model' => '320',
        'kubatura' => 1999,
        'metai' => 2017
    ]
];


autoList($masyvas5);
function autoList($autos)
{
    echo '<ul>';
    foreach($autos as $masyvas5)
    {

        echo '<li>'. $masyvas5['marke'] . ' ' . $masyvas5['model'] .  ' ' . transfromyear($masyvas5['metai']) .  ' ' . '</li>';
    }
    echo '</ul>';
}

function transfromyear($year)
{
    return $year . ' m.';
}
// transfromyear();


// function formatPrice($price)
// {
//     $ret = round($price, 2) . ' EUR';

//     return $ret;
// }



$countries = [
    'Kinija',
    'Indija',
    'Japonija',
];
foreach ($countries as $country)
{
    switch ($country)
    {
        case 'Indija':
            echo 'Keliaujam paganyti karviu.' . '<br>';
            break;
        case 'Kinija':
            travelToChina();
            break;
        default:
            echo 'Samsung' . '<br>';
            break;
    }
}

function travelToChina()
{
    echo 'Valgysim daug ryziu.' . '<br>';
}


$masyvas44 = ['Jonas', 
'Petras',
'Antanas',];

echo $masyvas44[0]. ' ';
echo $masyvas44[1]. ' ';
echo $masyvas44[2]. ' ';

echo '<br>';

function isvedaVisusVardus($array)
{
    foreach ($array as $masyvas44[]);
    {
        echo $masyvas44[0]. ' ';
        echo $masyvas44[1]. ' ';
        echo $masyvas44[2]. ' ';
    }
}
isvedaVisusVardus($masyvas44);


/*autoList($masyvas5);
function autoList($autos)
{
    echo '<ul>';
    foreach($autos as $masyvas5)
    {

        echo '<li>'. $masyvas5['marke'] . ' ' . $masyvas5['model'] .  ' ' . transfromyear($masyvas5['metai']) .  ' ' . '</li>';
    }
    echo '</ul>';
}

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

*/
echo '<br>';
function isvedaVisusDuomenis($masyvas44)
{
    echo '<ul>';
    $c = count($masyvas44);
    for ($i = 0; $i<$c; $i++)
    {
        echo '<li>' . $masyvas44[$i] . '</li>' ;
    }
    echo '</ul>';
}
isvedaVisusDuomenis($masyvas44);
/*function SpausdinaElementus($Elementas)
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
*/

$masyvas6 = [
    [
        'bank' => 'swed',
        'payment_title' => 'Mokejimas uz prekes 1',
        'total' => 21.32,
    ],
    [
        'bank' => 'seb',
        'payment_title' => 'Mokejimas uz paslaugas',
        'total' => 32.52,
    ],
    [
        'bank' => 'dnb',
        'payment_title' => 'Mokejimas uz prekes 2',
        'total' => 12.84,
    ],
];
function tikrinaBankoTipa($masyvas6)
{
    $c = count($masyvas6);
    for ($i=0; $i<$c; $i++)
    {
        if ($masyvas6[$i]['bank']=="swed")
        {
            echo $masyvas6[$i]['payment_title'] . '<br>';
        }
        elseif ($masyvas6[$i]['bank']=="seb")
        {
            //echo $masyvas6[$i]['payment_title'] . $masyvas6[$i]['total'] . '<br>';
            printPaymentData($masyvas6[$i]);   
        }
        else
        {
            echo 'Mokejimas siuo banku negalimas!';
        }
    }
}
function printPaymentData($paymentData)
{
    echo $paymentData['payment_title'] . ' ' .
    $paymentData['total'] . '<br>';
}

tikrinaBankoTipa($masyvas6);

// function tikrinaBankoTipa($masyvas6)
// {
//     $c = count($masyvas6);
//     for ($i=0; $i<$c; $i++)
//     {
//         if ($masyvas6[$i]['bank']=="swed")
//         {
//             echo $masyvas6[$i]['payment_title'] . '<br>';
//         }
//         elseif ($masyvas6[$i]['bank']=="seb")
//         {
//             //echo $masyvas6[$i]['payment_title'] . $masyvas6[$i]['total'] . '<br>';
//         printPaymentData($masyvas6[$i]);   
//         }
//         else
//         {
//             echo 'Mokejimas siuo banku negalimas!';
//         }
//     }
// }
// function printPaymentData($paymentData)
// {
//     echo $paymentData['payment_title'] . ' ' .
//     $paymentData['total'] . '<br>';
// }
// printPaymentData($masyvas6);
// tikrinaBankoTipa($masyvas6);

/*
$countries = [
    'Kinija',
    'Indija',
    'Japonija',
];
foreach ($countries as $country)
{
    switch ($country)
    {
        case 'Indija':
            echo 'Keliaujam paganyti karviu.' . '<br>';
            break;
        case 'Kinija':
            travelToChina();
            break;
        default:
            echo 'Samsung' . '<br>';
            break;
    }
}

function travelToChina()
{
    echo 'Valgysim daug ryziu.' . '<br>';
}
*/
echo '<br>';
$masyvas8 = [
    [
        'bank' => 'swed',
        'payment_title' => 'Mokejimas uz prekes 1',
        'total' => 21.32,
    ],
    [
        'bank' => 'seb',
        'payment_title' => 'Mokejimas uz paslaugas',
        'total' => 32.52,
    ],
    [
        'bank' => 'dnb',
        'payment_title' => 'Mokejimas uz prekes 2',
        'total' => 12.84,
    ],
];

tikrinaBankoTipaa($masyvas8);
function tikrinaBankoTipaa($masyvas8)
{
    $c = count($masyvas8);
    for ($i=0; $i<$c; $i++)
    {
        switch ($masyvas8[$i]['bank'])
        {
            case 'swed':
                echo $masyvas8[$i]['payment_title'] . '<br>';

                break;
            case 'seb':
                //echo $masyvas6[$i]['payment_title'] . $masyvas6[$i]['total'] . '<br>';
                printPaymentDataa($masyvas8[$i]); 
                break;  
            default:
            echo 'Mokejimas siuo banku negalimas!';
            break;
        }
    }
}

function printPaymentDataa($paymentData)
{
    echo $paymentData['payment_title'] . ' ' .
    $paymentData['total'] . '<br>';
}
