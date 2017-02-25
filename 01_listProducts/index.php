<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 17:03
 */

$db = new \PDO("mysql:host=localhost;dbname=teste_oo", "root", "root");
$query = "select * from products";
$stmt = $db->prepare($query);
$stmt->execute();

$list = $stmt->fetchAll(\PDO::FETCH_ASSOC);

var_dump($list);