<?php
session_start();
include_once 'assets/bootstrapAsset.php';
include_once 'autoload.php';

if(isset($_POST['submit'])){
  $firstName=$_POST['firstName'];
  $lastName=$_POST['lastName'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $phoneNumber=$_POST['phoneNumber'];
  $profession=$_POST['profession'];
  $description=$_POST['description'];

  $specialist=new SpecialistRepository();

  $specialist->insertSpecialist(array('lastName' => $lastName, 'firstName' => $firstName, 'email' => $email, 'address' => $address,'phoneNumber' => $phoneNumber,'profession' => $profession,'description' =>$description));


}

?>

<body>





<div class="container">
  
</div>

<div class="container add">
  
  <div class="add__admin">
    <div class="wavy">
                              <span style="--i:1;">A</span>
                              <span style="--i:2;">J</span>
                              <span style="--i:3;">O</span>
                              <span style="--i:4;">U</span>
                              <span style="--i:4;">T</span>
                              <span style="--i:5;">E</span>
                              <span style="--i:6;">R</span>
                              <span style="--i:7;"></span>
                              
                              <span style="--i:8;"></span>
                              <span style="--i:9;">U</span>
                              <span style="--i:10;">N</span>
                              <span style="--i:11;"></span>
                              <span style="--i:12;"></span>
                              <span style="--i:13;">S</span>
                              <span style="--i:14;">P</span>
                              <span style="--i:15;">E</span>
                              <span style="--i:16;">C</span>
                              <span style="--i:17;">I</span>
                              <span style="--i:18;">A</span>
                              <span style="--i:19;">L</span>
                              <span style="--i:20;">I</span>
                              <span style="--i:21;">S</span>
                              <span style="--i:22;">T</span>
                              <span style="--i:23;">E</span>

    </div>

    <form method="post" action="addSpecialist.php">
      <div class="form-group">
        
        <input type="text" name="lastName" class="form-control" placeholder="Nom Spécialiste">
      
      </div>

      <div class="form-group">

        <input type="text" name="firstName" class="form-control" placeholder="Prénom Spécialiste">
      
      </div>

      <div class="form-group">

        
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Spécialiste">
      
      </div>
      <div class="form-group">
      
      <input type="text" name="description" class="form-control" placeholder="description">
    
    </div>

      <div class="form-group">
      
        <input type="text" name="profession" class="form-control" placeholder="Profession">
      
      </div>

      <div class="form-group">
      
        <input type="text" name="address" class="form-control" placeholder="Adresse Spécialiste">
      
      </div>

      <div class="form-group">
        
        <input type="text" name="phoneNumber" class="form-control" placeholder="Numéro De Téléphone">
      
      </div>

      
    
      <button type="submit" name="submit" class="btn btn3">Submit</button>
    </form>

  </div>

</div>


<script src="js/admin.js"></script>

</body>

</html>