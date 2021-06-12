<?php
include_once 'autoload.php';

class RecipeCategoryRelRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('categoryreciperel');
    }

}
?>