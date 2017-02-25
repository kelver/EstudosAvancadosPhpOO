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
$container['date'] = function (){
    return new \DateTime;
};
var_dump($container['date']);