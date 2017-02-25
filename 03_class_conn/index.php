<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 17:03
 */
require_once ("IConn.php");
require_once ("Conn.php");
require_once ("Product.php");

$db = new Conn("mysql:host=localhost;dbname=teste_oo", "root", "root");

$product = new Product($db);

$list = $product->lists();

var_dump($list);