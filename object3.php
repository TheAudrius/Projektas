<?php
$autos = (object)[(object)
    [
        'model' => 'BMW',
        'marke' => '3',
    ],
    (object)[
        'model' => 'Audi',
        'marke' => 'A7',
    ],
];
$a = new Automobile($autos);
$a->printinaModeli();


$a->printinaMarke();


class Automobile
{
    private $autos;
    
    public function __construct($autos)
    {
        $this->autos = $autos;

    }
   

    function printinaModeli()
    {
        foreach ($this->autos as $auto)
        {
            echo $auto->model . '<br>';
        }
    }
    function printinaMarke()
    {
        foreach ($this->autos as $auto)
        {
            echo $auto->marke . '<br>';
        }
    }

}

