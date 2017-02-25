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
$container['dateFactory'] = $container->factory(function (){
    return new \DateTime;
});
//testando compartilhamento de serviço sem factory
var_dump($container['date']);
echo "<br>";
echo "<br>";
sleep(2);
var_dump($container['date']);
echo "<br>";
echo "<br>";
//testando compartilhamento de serviço com factory
var_dump($container['dateFactory']);
sleep(2);
echo "<br>";
echo "<br>";
var_dump($container['dateFactory']);