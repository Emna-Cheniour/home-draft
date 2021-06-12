<?php
include_once 'autoload.php';

class RestaurantRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('restaurant');
    }

}
?>