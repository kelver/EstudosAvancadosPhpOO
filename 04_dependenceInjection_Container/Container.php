<?php

/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 18:19
 */
class Container
{
    public static function getProduct()
    {
        return new Product(self::getConn());
    }

    public static function getConn()
    {
        return new Conn("mysql:host=localhost;dbname=teste_oo", "root", "root");
    }
}