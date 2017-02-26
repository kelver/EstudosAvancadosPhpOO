<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 20:08
 */

use Pimple\Container;

$container = new Container();

$container['dsn'] = "mysql:host=localhost;dbname=teste_oo";
$container['user'] = "root";
$container['pass'] = "root";