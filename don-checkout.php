

<?php
    include("./config.php");

  
    $token = $_POST["stripeToken"];
    $token_card_type = $_POST["stripeTokenType"];
    $email           = $_POST["stripeEmail"];

    
    $amount          = $_POST["amount"]; 
    $desc            = "don ";
    $charge = \Stripe\Charge::create([
      "amount" => str_replace(",","",$amount) * 1000,
      "currency" => 'inr',
      "description"=>$desc,
      "source"=> $token,
    ]);

    if($charge){
      header("location:success.php");
    }

    

    
?>
















?>