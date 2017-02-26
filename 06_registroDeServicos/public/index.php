<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 17:03
 */
require_once("../vendor/autoload.php");
use Pimple\Container;

$container = new Container();

$container['conn'] = function (){
    return new \Source\Conn("mysql:host=localhost;dbname=teste_oo","root","root");
};

$container['product'] = function ($c){
    return new \Source\Product($c['conn']);
};

$list = $container['product']->lists();
var_dump($list);