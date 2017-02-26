<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 20:07
 */

$container['conn'] = function ($c){
    return new \Source\Conn($c['dsn'],$c['user'],$c['pass']);
};

$container['product'] = function (){
    return new \Source\Product;
};

$container['serviceProduct'] = function ($c){
    return new \Source\ServiceProduct($c['conn'], $c['product']);
};