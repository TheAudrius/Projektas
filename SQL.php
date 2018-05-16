<?php

$host = 'localhost';
$username = 'Audrius';
$password = 'slaptazodis';
$dbName = 'audrius';
$port = 3307;

$db = mysqli_connect($host, $username, $password, $dbName, $port);

if (!$db)
{
    die('Connection error: ' . mysqli_connect_error());
}
echo 'Connected sucessfully!';

$sql = "CREATE TABLE IF NOT EXISTS users (`id` INT(11) NOT NULL AUTO_INCREMENT, `email` VARCHAR(255) NOT NULL UNIQUE, 
`username` VARCHAR(30) NOT NULL UNIQUE, `password` VARCHAR(32) NOT NULL, PRIMARY KEY (`id`)) ENGINE='InnoDB' CHARACTER SET utf8";

$sqlAddress = "CREATE TABLE IF NOT EXISTS `user_addresses`(
`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`user_id` INT(11) NOT NULL,
`address` TEXT NOT NULL,
PRIMARY KEY (`id`),
INDEX (`user_id`)
) ENGINE = 'InnoDB' CHARACTER SET utf8";

mysqli_query($db, $sql);
mysqli_query($db, $sqlAddress);

$sql1 = "INSERT INTO `users` (`email`, `username`, `password`)
VALUES ( 
'my@gmail.com',
'my_name',
MD5('kazkoksslaptazodis')
)";

mysqli_query($db, $sql1);
$sql2 = "UPDATE `users` SET `username` = 'new_username'
, `email` = 'new@gmail.com'
WHERE `id` = 1";

mysqli_query($db, $sql2);

$sql3 = "SELECT * FROM `users`";

$users = mysqli_query($db, $sql3);

echo '<pre>';
foreach (mysqli_fetch_all($users, MYSQLI_ASSOC) as $user)
{
    print_r($user);
}
echo '</pre>';

$sql4 = "DELETE FROM `user` WHERE `id` = 5";
// mysqli_query($db, $sql4);  

$sql5 = "DROP TABLE `users`";
// mysqli_query($db, $sql5);

$sql6 = "SELECT * 
FROM `users`
INNER JOIN `user_addresses` ON `users` . `id` = `user_addresses` . `user_id`
WHERE `users` . `id` = 1";

