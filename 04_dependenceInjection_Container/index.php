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
require_once ("Container.php");

$db = Container::getConn();
$product = Container::getProduct();

$list = $product->lists();
var_dump($list);