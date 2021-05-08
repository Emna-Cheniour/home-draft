<?php
include_once 'autoload.php';

class productRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('products');
    }

}
?>