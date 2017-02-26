<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 20:28
 */

namespace Source;


interface interfaceProduct
{
    public function getId();
    public function setId($id);
    public function getName();
    public function setName($name);
    public function getDesc();
    public function setDesc($desc);
}