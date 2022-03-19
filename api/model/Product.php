<?php
require_once PROJECT_ROOT_PATH."/Model/Database.php";
 


class ProductModel  extends Database
{

    public function getProduct()
    {
        return $this->select("SELECT * FROM product ORDER BY pid ASC", []);
    }


    public function getProductBy($uid)
    {
        return $this->select("SELECT * FROM `product` WHERE `pid`=?", [$uid]);
    }


    public function save($qrr)
    {
        return $this->insert("INSERT INTO `product`(`product_name`, `product_price`, `product_size`, `sku`, `type`) VALUES (?,?,?,?,?)", $qrr);
    }
}
