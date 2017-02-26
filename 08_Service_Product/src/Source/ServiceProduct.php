<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 20:20
 */

namespace Source;


class ServiceProduct implements InterfaceServiceProduct
{
    private $db;
    private $product;

    public function __construct(IConn $db, interfaceProduct $product)
    {
        $this->db = $db->Connect();
        $this->product = $product;
    }

    public function lista()
    {
        $query = "select * from products";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function save()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}