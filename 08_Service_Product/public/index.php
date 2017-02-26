<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 17:03
 */
ini_set("display_errors",1);
ini_set("display_startup_erros",1);
error_reporting(E_ALL);
require_once("../vendor/autoload.php");
require_once("config.php");
require_once("service.php");

$list = $container['serviceProduct']->lista();
require_once ("list.product.php");