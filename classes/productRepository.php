<?php
include_once 'autoload.php';

class ProductRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('product');
    }
    // public function insert($criterias){
    //     $req=array('id' => "", 'name' => $criterias[0],'description'=> $criterias[1], 'quantity'=>  $criterias[2] , 'price'=> $criterias[3], 'promotion'=> $criterias[4]);
    //     var_dump($req);
    //      parent::insert($req);
 
    //  }
      public function insertProduct($criterias){
        $request = "INSERT INTO product (`name`, `description`, `quantity`, `price`, `promotion`) VALUES (?,?,?,?,?)";
        $response = $this->bd->prepare($request);
        $i = 1;
        foreach ($criterias as $key => $criteria) {
            
                $response->bindValue($i, $criteria);
                $i++;
            
        }
        $response->execute();
 
     }

}
?>