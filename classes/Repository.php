<?php
include_once 'autoload.php';

class Repository
{
    public $bd;
    public $tableName;
    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->bd = ConnexionBD::getInstance();
    }

    public function findByUsername($username)
    {
        $request = "select * from " . $this->tableName . " where username = ?";
        $response = $this->bd->prepare($request);
        $response->execute([$username]);
        return $response->fetch(PDO::FETCH_OBJ);
    }


    public function findByEmail($email)
    {
        $request = "select * from " . $this->tableName . " where email = ?";
        $response = $this->bd->prepare($request);
        $response->execute([$email]);
        return $response->fetch(PDO::FETCH_OBJ);
    }

    public function findByUsernamePwd($id1, $id2)
    {
        $request = "select * from " . $this->tableName . " where username= ? and password=?";
        $response = $this->bd->prepare($request);
        $response->execute([$id1, $id2]);
        return $response->fetch(PDO::FETCH_OBJ);
    }

    public function findByEmailPwd($id1, $id2)
    {
        $request = "select * from " . $this->tableName . " where email= ? and password=?";
        $response = $this->bd->prepare($request);
        $response->execute([$id1, $id2]);
        return $response->fetch(PDO::FETCH_OBJ);
    }
    public function findBy($criterias)
    {
        reset($criterias);
        $first_key = key($criterias);
        $request = "select * from " . $this->tableName . " Where " . $first_key . "= ?  ";

        foreach (array_slice($criterias, 1) as $key => $value) {
            $request = $request . " and  " . $key . " = ?";
        }
        $response = $this->bd->prepare($request);
        $i = 1;
        foreach ($criterias as $criteria) {
            $response->bindValue($i, $criteria);
            $i++;
        }
        $response->execute();

        return $response->fetchAll(PDO::FETCH_OBJ);
    }
    public function findOneBy($key, $value)
    {
        $request = "select * from " . $this->tableName . " where " . $key . "= ?";
        $response = $this->bd->prepare($request);
        $response->bindValue(1, $value);
        $response->execute();
        return $response->fetch(PDO::FETCH_OBJ);
    }
    public function findAll()
    {
        $request = "select * from " . $this->tableName;
        $response = $this->bd->prepare($request);
        $response->execute();
        return $response->fetchAll(PDO::FETCH_OBJ);
    }

    public function findOne()
    {
        $request = "select * from " . $this->tableName;
        $response = $this->bd->prepare($request);
        $response->execute();
        return $response->fetch(PDO::FETCH_OBJ);
    }

    public function getRandomId()
    {
        $random = random_int(1, 2147483647);
        $result = $this->findOneBy('id', $random);
        if ($result) {
            $random = random_int(1, 2147483647);
        }
        return $random;
    }
    public function insert($criterias)
    {

        reset($criterias);
        $first_key = key($criterias);
        $list = $first_key;
        $values = '?';
        foreach (array_slice($criterias, 1) as $key => $value) {
            $list = $list . ',' . $key;
            $values = $values . ',' . '?';
        }
        $request = "insert into  " . $this->tableName . " (" . $list . ") values (" . $values . ")";
        $response = $this->bd->prepare($request);
        $i = 1;
        foreach ($criterias as $key => $criteria) {
            if ($key == 'id') {
                $response->bindValue($i, $this->getRandomId());
                $i++;
            } else {
                $response->bindValue($i, $criteria);
                $i++;
            }
        }
        $response->execute();
    }
    public function update($criterias)
    {

        $request = "update " . $this->tableName . " set " . array_key_first($criterias['value']) . "=?";
        foreach (array_slice($criterias['value'], 1) as $keyValue => $criteriaValue) {
            $request = $request . " , " . $keyValue . " = ?";
        }
        $request = $request . " Where " . array_key_first($criterias['where']) . "=?";
        foreach (array_slice($criterias['where'], 1) as $keyWhere => $criteriaWhere) {
            $request = $request . " and where  " . $keyWhere . " = ?";
        }
        $response = $this->bd->prepare($request);
        $i = 1;
        foreach ($criterias['value'] as $keyValue => $criteriaValue) {
            $response->bindValue($i, $criteriaValue);
            $i++;
        }
        foreach ($criterias['where'] as $keyValue => $criteriaWhere) {
            $response->bindValue($i, $criteriaWhere);
            $i++;
        }
        $response->execute();
    }

    /*
    
    public function showCategory($categories){
        
        $request="select * from ".$this->tableName ." WHERE category= ".$categories[0];
            
        $response =$this->bd->prepare($request);
        $response->execute([$categories[0]]);
        return $response->fetch(PDO::FETCH_OBJ);
    }

    public function showElement($id){
        $request = "select * from ".$this->tableName ." where id = ?";
        $response =$this->bd->prepare($request);
        $response->execute([$id]);

        return $response->fetch(PDO::FETCH_OBJ);


    }

   

    public function update($id1,$id2){

        
        $request="UPDATE " .$this->tableName." SET ".$id1."='".$id2."'";

        $response =$this->bd->prepare($request);
        $response->execute();
        return $response->fetch(PDO::FETCH_OBJ);
    }

    public function addUser($val1,$val2,$val3){

        $request = "INSERT INTO ".$this->tableName. "(username,email,password) VALUES ('".$val1."','".$val2."','".$val3."')" ; 
        $response=$this->bd->prepare($request);
        $response->execute();
        return $response->fetch(PDO::FETCH_OBJ);
        
    }

    public function addRecipe($val1,$val2,$val3){

        $request = "INSERT INTO ".$this->tableName. "(username,email,password) VALUES ('".$val1."','".$val2."','".$val3."')" ; 
        $response=$this->bd->prepare($request);
        $response->execute();
        return $response->fetch(PDO::FETCH_OBJ);
        
    }

    public function addIngredient($val1,$val2,$val3){

        $request = "INSERT INTO ".$this->tableName. "(username,email,password) VALUES ('".$val1."','".$val2."','".$val3."')" ; 
        $response=$this->bd->prepare($request);
        $response->execute();
        return $response->fetch(PDO::FETCH_OBJ);
        
    }

    public function addDoctor($val1,$val2,$val3,$val4,$val5,$val6){

        $request = "INSERT INTO ".$this->tableName. "(name,profession,email,adresse,telephoneProfessionnel,telephonePersonnel) VALUES ('".$val1."','".$val2."','".$val3."','".$val4."','".$val5."','".$val6."')" ; 
        $response=$this->bd->prepare($request);
        $response->execute();
        return $response->fetch(PDO::FETCH_OBJ);
        
    }

    public function addJournal($val1,$val2,$val3){

        $request = "INSERT INTO ".$this->tableName. "(username,email,password) VALUES ('".$val1."','".$val2."','".$val3."')" ; 
        $response=$this->bd->prepare($request);
        $response->execute();
        return $response->fetch(PDO::FETCH_OBJ);
        
    }
    public function addRestaurant($val1,$val2,$val3){

        $request = "INSERT INTO ".$this->tableName. "(username,email,password) VALUES ('".$val1."','".$val2."','".$val3."')" ; 
        $response=$this->bd->prepare($request);
        $response->execute();
        return $response->fetch(PDO::FETCH_OBJ);
        
    }


  
    public function updatePic($id1,$img){

        $request="UPDATE " .$this->tableName." SET ".$id1."='".addslashes($img)."'";
        $response =$this->bd->prepare($request);
        $response->execute();
        return $response->fetch(PDO::FETCH_OBJ);

    }
*/
}
