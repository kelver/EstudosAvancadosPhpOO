<?php

/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 17:18
 */
namespace Source;
class Product
{
    public $db;

    public function __construct(IConn $db)
    {
        $this->db = $db->Connect();
    }

    /**
     * @return mixed
     */
    public function lists()
    {
        $query = "select * from products";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}