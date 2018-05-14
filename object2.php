<?php

// $data1 = new stdClass();
// $data1->auto1 = 'BMW';
// $data1->auto2 = 'Audi';
// $data1->auto3 = 'MB';

// foreach($data1 as $data)
// {
//     echo $data . '<br>';
// }

class Automobile
{
    public function __construct()
    {
        $this->autos = (object)[
        [
            'model' => 'BMW',
            'marke' => '3',
        ],
        [
            'model' => 'Audi',
            'marke' => 'A7',
        ],
    ];

    }
   

    function printinaModeli()
    {
        foreach ($this->autos as $auto)
        {
            echo $auto['model'] . '<br>';
        }
    }
    function printinaMarke()
    {
        foreach ($this->autos as $auto)
        {
            echo $auto['marke'] . '<br>';
        }
    }

}

$a = new Automobile();
$a->printinaModeli();
$a->printinaMarke();