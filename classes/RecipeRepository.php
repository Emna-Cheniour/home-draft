<?php
include_once 'autoload.php';

class RecipeRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('recette');
    }

}
?>