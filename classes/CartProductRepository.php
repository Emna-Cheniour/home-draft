<?php
include_once 'autoload.php';

class CartProductRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('cartproduct');
    }

    public function updateProduct($quantity,$cart,$product)
    {
        $request = " UPDATE `cartproduct` SET `quantity`=? WHERE idCart=? and idProduct=?";
        $response = $this->bd->prepare($request);
        $response->bindValue(1,$quantity);
        $response->bindValue(2,$cart);
        $response->bindValue(3,$product);
        $response->execute();

    }
    public function findOrder($id)
    {$request = "select catproduct.* from cartproduct , cart where cart.id=cartproduct.idCart and 
        and cart.status = 'en cours' and  cartproduct.idPrroduct=?" ;
        $response = $this->bd->prepare($request);
        $response->bindValue(1,$id);
        $response->execute();

    }
}
