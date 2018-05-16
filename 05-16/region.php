<?php

try{
    $username = 'Audrius';
    $pass = 'slaptazodis';
    
    $dht = new PDO( 'mysql:host=localhost:3307;dbname=audrius', $username, $pass);
    echo "Connected!";
    }
    catch (PDOException $exception)
    {
        echo 'Error!: ' . $exception->getMessage();
    }
//SIMPLE SELECT WITH JOIN

$sql = "SELECT regions.title AS region_title, shops.title AS shop_title
FROM regions
JOIN shops ON regions.id = shops.region_id";

$query = $dht->prepare($sql);
$query->execute();

// echo '<pre>';
// print_r($query->fetchAll(PDO::FETCH_OBJ));
// echo '</pre>';

echo '<ul>';
foreach($query->fetchAll(PDO::FETCH_OBJ) as $row)
{
    echo '<li>' . $row->shop_title .
    ' priklauso regionui ' .
    $row->region_title . '<li>';
}
echo '</ul>';


//SELECT USING CONCAT
$sql1 = "SELECT
CONCAT(shops.title,' priklauso regionui ', regions.title) AS eilute
FROM regions
JOIN shops ON regions.id = shops.region_id";

$query1 = $dht->prepare($sql1);
$query1->execute();

echo '<ul>';
foreach($query1->fetchAll(PDO::FETCH_OBJ) as $row);
{
    echo '<li>' . $row->eilute . '<li>';
}
echo '</ul>';

$sql2 = "SELECT regions.id, regions.title, 
COUNT(shops.id) AS shop_count
FROM regions
JOIN shops ON regions.id = shops.region_id
GROUP BY regions.title";

$query2 = $dht->prepare($sql2);
$query2->execute();

echo '<ul>';
foreach($query2->fetchAll(PDO::FETCH_OBJ) as $row)
{
    echo '<li>' . $row->title . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; turi ' . //&nbsp;tarpas
    $row->shop_count . '<li>';
}
echo '</ul>';