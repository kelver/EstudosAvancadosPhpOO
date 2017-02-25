<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 17:03
 */
require_once ("Product.php");

$db = new \PDO("mysql:host=localhost;dbname=teste_oo", "root", "root");

$product = new Product($db);

$list = $product->lista();

var_dump($list);