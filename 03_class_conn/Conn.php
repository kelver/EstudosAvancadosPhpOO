<?php

/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 17:31
 */

class Conn implements IConn
{
    private $dsn;
    private $user;
    private $pass;

    public function __construct($dsn, $user, $pass)
    {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function Connect()
    {
        return new \PDO($this->dsn, $this->user, $this->pass);
    }
}