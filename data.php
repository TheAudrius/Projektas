<?php
$data = (object)[
    'cart' => (object)[
        'products' => [
            (object)[
                'id' => 23,
                'title' => 'Duona',
                'price' => 1.23,
                'quantity' => 1,
            ],
            (object)[
                'id' => 43,
                'title' => 'Suris',
                'price' => 3.65,
                'quantity' => 1,
            ],
        ],
        'total' => 4.88,
    ],
    'customer' => (object)[
        'name' => 'Petras',
        'lastname' => 'Petraitis',
        'email' => 'petras@petraitis.com',
    ],
];

//$jsonData = '{"cart":{"products":[{"id":23,"title":"Duona","price":1.23,"quantity":1},{"id":43,"title":"Suris","price":3.65,"quantity":1}],"total":4.88},"customer":{"name":"Petras","lastname":"Petraitis","email":"petras@petraitis.com"}}';

$a = new KrepselioProduktai($data->cart->products);
// $a->getData();
// echo '<br>';
// $a->setData($data);
// echo '<br>';
// $a->getData();
// echo '<br>';



$a-> printProducts();
class KrepselioProduktai
{
    // const AUTO_COUNT = 3;
    private $products;

    public function __construct($products)
    {
        $this->products = $products;
    }
    // function setData($data,$index = 'name')
    // {
    //     echo self::AUTO_COUNT;
    //     $this->products->$index = $data;
    // }
    // function getData()
    // {
    //     print_r($this->products as $product)
    //     {
    //         echo $product->products . '<br>';
    //     }
    // }
    public function printProducts()
    {
        foreach ($this->products as $product)
        {
            echo $product->id . '<br>';
            echo $product->title . '<br>';
            echo $product->price . '<br>';
            echo $product->quantity . '<br>';
        }
    }
}

// private $autos;
//     public function __construct()
//     {
//         $this->autos = (object)[];
//     }
//     function setData($data, $index = 'pirmas')
//     {
//         $this->autos->$index = $data;