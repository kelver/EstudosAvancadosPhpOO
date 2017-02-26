<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 17:03
 */
require_once("../vendor/autoload.php");
require_once("config.php");
require_once("service.php");


$list = $container['product']->lists();
var_dump($list);