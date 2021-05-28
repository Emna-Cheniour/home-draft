<?php 
include_once 'autoload.php';

include_once 'isAuthentificated.php';
include_once 'assets/mainHead.php' ;
include_once 'assets/bootstrapAsset.php';

?>



<body>

<?php 
include_once 'profileProgress.php';
include_once 'navbarCo.php'?>
  <div class="profile__body">


      <div class="percent__box">
            <div class="percent">
              <svg>
                <circle cx="70" cy="70" r="70"></circle>
                <circle style="--i:<?php echo $infoCount*10 ; ?>;" cx="70" cy="70" r="70"></circle>
              </svg>

              <div class="number">
                <h2><?php echo $infoCount*10 ;?><span>%</span></h2>
              </div>
            </div>

            <h2 class="text">Progress</h2>
      </div>

      <div class="profile__container">

            <div class="leftbox">
              <nav>
                <a class="Icontab <?php 
        if(!isset($_SESSION['contactError']) && !isset($_SESSION['settingError'])){
         
            echo "active";
          
       
        }  ;
        

        ?>">
                <i class="fa fa-user"></i>
                </a>

                <a class="Icontab <?php 
        if(isset($_SESSION['contactError'])){
            echo "active";
          }
      

        ?>">
                  <i class="fas fa-address-book"></i>
                </a>

                <a class="Icontab <?php 
        if(isset($_SESSION['settingError'])){
            
            echo "active";
          }
        


        ?>">
                  <i class="fa fa-cog"></i>
                </a>

                <a class="Icontab ">
                <i class="fas fa-heart"></i>
                </a>
              </nav>
            </div>

            <div class="rightbox">
              <form method="post" action="profileProcess.php" enctype="multipart/form-data" class="profile tabShow <?php 
    if(isset($_SESSION['settingError']) || isset($_SESSION['contactError'])){
      
        echo "hidden";
      
    } 
    

    ?>">
                <div class="wavy">
                            <span style="--i:1;">M</span>
                            <span style="--i:2;">O</span>
                            <span style="--i:3;">N</span>
                            <span style="--i:4;"></span>
                            <span style="--i:4;">P</span>
                            <span style="--i:5;">R</span>
                            <span style="--i:6;">O</span>
                            <span style="--i:7;">F</span>
                            
                            <span style="--i:8;">I</span>
                            <span style="--i:9;">L</span>
                            <span style="--i:10;">E</span>

                        </div>
                <div class="content">

                  <div class="info">
                        

                        <h4>Nom</h4>
                        <input class="input" name="lastname" type="text" value="<?php $user=new UserRepository();
                        $query1=$user->findByUsername($_SESSION['user']);
                        
                        if(!empty($query1->lastname)){
                        
                          echo $query1->lastname;
                        } else ?>" placeholder ="Nom">

                        <h4>Prénom</h4>
                        <input class="input" name="firstname" type="text" value="<?php $user=new UserRepository();
                        $query1=$user->findByUsername($_SESSION['user']);
        
                              if (!empty($query1->firstname)){
                            
                              echo $query1->firstname;
                              
                              } else ?>" placeholder="Prénom">

                        

                        <h4>Date de naissance</h4>
                        <input name="birthday" class="input" type="Date" value="<?php $user=new UserRepository();
                                  $query1=$user->findByUsername($_SESSION['user']);
                                  
                                  if(!empty($query1->birthday)){
                                    echo $query1->birthday;
                                  }
                                  
                                  
                                ?>"  >

                        <h4>Sexe</h4>
                          <div class="radio__container">
                                            <?php $user=new UserRepository();
                        $query1=$user->findByUsername($_SESSION['user']);
                        
                      ?>
                                            <input type="radio" name="sexe" value="female" <?php if(!empty($query1->sexe) && ($query1->sexe=='female')){
                                              echo 'checked';
                          
                        } ?>><span>Femme</span>
                                            <input type="radio" name="sexe" value="male" <?php if(!empty($query1->sexe) && ($query1->sexe=='male')){
                                              echo 'checked';
          
                        } ?>><span>Homme</span>
                                          </div>
                                          <?php 
                          if(isset($_SESSION['profileError'])){

                          
                        ?>
                        <div class="alert alert-danger">
                            <?php echo $_SESSION['profileError']; ?>
                        </div>
                        <?php } unset($_SESSION['profileError']); ?>
                                  </div>

                          
                    
                  <div class="image" >
              
                    
                     <!--<input type="file" name="profileImg" id="image" placeholder="image">-->
                  
                              <img src=" <?php $user=new UserRepository();
                            $query1=$user->findByUsername($_SESSION['user']);
                        
                      
                            if(!empty($query1->profileImg)){
                            
                              echo 'data:image/jpeg;base64,".base64_encode($user->profileImg)."';
                            } else if (!empty($query1->sexe)) {
                                if($query1->sexe=='female') {
                                  echo 'svg/undraw_female_avatar_w3jk.svg';
                                } else {
                                  echo 'svg/undraw_male_avatar_323b.svg';
                                }
                          } 
                          else echo 'svg/undraw_male_avatar_323b.svg'; ?> " 

                            >
                       
                       
                    
                  </div>   
                
                </div>
                
                
        

                <button typ="submit" class="btn btn3">Modifier</button>

                
              </form>

              <form method="post" action="contactProcess.php" class="contact tabShow <?php 
    if(!isset($_SESSION['contactError'])){
        echo "hidden";
      }
    
    

    ?>">
                <div class="wavy">
                                <span style="--i:1;">C</span>
                                <span style="--i:2;">O</span>
                                <span style="--i:3;">N</span>
                    
                                <span style="--i:4;">T</span>
                                <span style="--i:5;">A</span>
                                <span style="--i:6;">C</span>
                                <span style="--i:7;">T</span>
                              
                              

                    </div>
                <div class="content">
                  <div class="info">
                  
                   

                    <h4>Adresse</h4>
                    <input class="input" name="adresse" type="adress" value="<?php $user=new UserRepository();
        $query1=$user->findByUsername($_SESSION['user']);
  
        if(!empty($query1->adresse)){
          echo $query1->adresse;
        } else ?>" placeholder="Adresse">

                    <h4>Email</h4>
                    <input class="input" name="email" type="email" value="<?php $user=new UserRepository();
        $query1=$user->findByUsername($_SESSION['user']);
       if (!empty($query1->email)){
         echo $query1->email;
       };
         ?>">

                    <h4>Numéro de Téléphone</h4>
                    <input name="telephone" class="input" value="<?php $user=new UserRepository();
        $query1=$user->findByUsername($_SESSION['user']);
    
        if(!empty($query1->telephone)){
          echo $query1->telephone;
        } else ?>" placeholder="+216">

 <?php 
                          if(isset($_SESSION['contactError'])){

                          
                        ?>
                        <div class="alert alert-danger">
                            <?php echo $_SESSION['contactError']; ?>
                        </div>
                        <?php } unset($_SESSION['contactError']); ?>

        
                  </div>

                  <div class="image">
                    <img src="svg/undraw_contact_us_15o2.svg" alt="">
                    
                  </div> 

                  

                </div>
                    
                <button type="submit" class="btn btn3">Modifier</button>
              </form>


              <form method="post" action="infoProcess.php" class="setting tabShow <?php 
    if(!isset($_SESSION['settingError'])){
     
        echo "hidden";
      
    
    } 
    

    ?>">
                <div class="wavy">
                                  <span style="--i:1;">P</span>
                                  <span style="--i:2;">A</span>
                                  <span style="--i:3;">R</span>
                                  <span style="--i:4;">A</span>
                                  <span style="--i:5;">M</span>
                                  <span style="--i:6;">E</span>
                                  <span style="--i:7;">T</span>
                                  <span style="--i:8;">R</span>
                                  
                                  <span style="--i:9;">E</span>
                                  <span style="--i:10;">S</span>
                              

                </div>
                  <div class="content">
                    <div class="info">
        


                        <h4>Ancien mot de passe</h4>
                        <input class="input" name="password" type="password" placeholder="<?php $user=new UserRepository();
        $query1=$user->findByUsername($_SESSION['user']);
        echo $query1->password;

        ?>">
                      <h4>Nouveau mot de passe</h4>
                      <input class="input" name="password" type="password" placeholder="Mot de passe">

                        <h4>Confirmer nouveau mot de passe</h4>
                        <input class="input" name="passwordConfirmed" type="password">

                        <?php 
                          if(isset($_SESSION['settingError'])){

                          
                        ?>
                        <div class="alert alert-danger">
                            <?php echo $_SESSION['settingError']; ?>
                        </div>
                        <?php } unset($_SESSION['settingError']); ?>
                    </div>

                    <div class="image">
                    <img src="svg/undraw_accept_terms_4in8.svg" alt="">
                    
                  </div> 
                  </div>
               

                <button type="submit" class="btn btn3">Modifier</button>
              </form>

              <form method="post" action="infoProcess.php" class="favourite tabShow hidden">
                <div class="wavy">
                                <span style="--i:1;">F</span>
                                <span style="--i:2;">A</span>
                                <span style="--i:3;">V</span>
                                <span style="--i:4;">O</span>
                                <span style="--i:5;">R</span>
                                <span style="--i:6;">I</span>
                                <span style="--i:7;">S</span>
                                

                      </div>
                <div class="content">
                  <div class="info">
                      

                      <div class="recipe__cards">
                        <div class="recipe__card">
                          <h6>RECETTE1</h6>
                          <div class="card__links">
                            <a href=""><i class="fas fa-trash"></i></a>
                            <a href="recetteIndiv.php"><i class="fas fa-plus"></i></a>
                          </div>
                          
                        </div>
                        <div class="recipe__card">
                          <h6>RECETTE1</h6>
                          <div class="card__links">
                            <a href=""><i class="fas fa-trash"></i></a>
                            <a href="recetteIndiv.php"><i class="fas fa-plus"></i></a>
                          </div>
                          
                        </div>
                        
                      </div>

                      <div>
                          <ul class="pagination pagination-sm">
                            <li class="page-item disabled">
                              <a class="page-link" href="#">&laquo;</a>
                            </li>
                            <li class="page-item active">
                              <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="#">&raquo;</a>
                            </li>
                          </ul>
                      </div>
                  </div>

                  
                </div>
                
              </form>

            </div>

            
      </div>

 </div>
  
  


  <?php include_once('footer.php'); ?>
  <?php include_once 'assets/scripts.php' ?>

  <script src="js/main.js"></script>
  <script src="js/profile.js"></script>
</body>
<html>