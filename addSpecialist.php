<?php
session_start();
include_once 'assets/bootstrapAsset.php';
?>

<body>


<?php include_once 'preloader.php' ?>


<div class="container">
  
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"><h4 style="color:#5FC2BA">Nom</h4></th>
      <th scope="col"><h4 style="color:#5FC2BA">Prénom</h4></th>
      <th scope="col"><h4 style="color:#5FC2BA">Email</h4></th>
      <th scope="col"><h4 style="color:#5FC2BA">Profession</h4></th>
      <th scope="col"><h4 style="color:#5FC2BA">Adresse</h4></th>
      <th scope="col"><h4 style="color:#5FC2BA">Numéro De Téléphone</h4></th>
      <th scope="col"></th>
      
      
    </tr>

  </thead>
  <tbody>
  <tbody>
    <tr class="user__row">
      <td>Ncib</td>
      <td>Nawres</td>
      <td>nawresncib@yahoo.com</td>
      <td>Gastrologue</td>
      <td>Ariana</td>
      <td>55265847</td>
      <td><i class="fas fa-trash delete"></i></td>
    </tr>

   

  </tbody>
   
   
   
  </tbody>
</table>
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

    <form method="post" action="addSpecialistProcess.php">
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
      
        <input type="text" name="profession" class="form-control" placeholder="Profession">
      
      </div>

      <div class="form-group">
      
        <input type="text" name="adress" class="form-control" placeholder="Adresse Spécialiste">
      
      </div>

      <div class="form-group">
        
        <input type="text" name="phoneNumber" class="form-control" placeholder="Numéro De Téléphone">
      
      </div>

      <?php 
            if(isset($_SESSION['addError'])){ ?>

              <div class="alert alert-danger" class="close">
                  
                  <?= $_SESSION['addError'] ?>
                  <a><i class="fas fa-times"></i></a>
                
                </div>
              
            <?php }
            unset($_SESSION['addError']);
            ?>

      
    
      <button type="submit" class="btn btn3">Submit</button>
    </form>

  </div>

</div>


<script src="js/admin.js"></script>

</body>

</html>