<?php 
include_once 'autoload.php';

include_once 'isAuthentificated.php';
include_once 'head.php' ?>



<body>

<?php include_once 'navbarConnecte.php'?>
  <div class="profile__body">


      <div class="percent__box">
            <div class="percent">
              <svg>
                <circle cx="70" cy="70" r="70"></circle>
                <circle cx="70" cy="70" r="70"></circle>
              </svg>

              <div class="number">
                <h2>87<span>%</span></h2>
              </div>
            </div>

            <h2 class="text">Progress</h2>
      </div>

      <div class="profile__container">

            <div class="leftbox">
              <nav>
                <a class="Icontab active">
                  <i class="fa fa-user"></i>
                </a>

                <a class="Icontab">
                  <i class="fas fa-address-book"></i>
                </a>

                <a class="Icontab">
                  <i class="fa fa-cog"></i>
                </a>

                <a class="Icontab">
                <i class="fas fa-heart"></i>
                </a>
              </nav>
            </div>

            <div class="rightbox">
              <form method="post" action="infoProcess.php" class="profile tabShow">
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
        $lastname=$query1->lastname;
        if(!empty($lastname)){
          echo $lastname;
        } ?> " placeholder="Nom">

                        <h4>Prénom</h4>
                        <input class="input" name="firstname" type="text" value="<?php $user=new UserRepository();
        $query1=$user->findByUsername($_SESSION['user']);
        $firstname=$query1->firstname;
        if(!empty($firstname)){
          echo $firstname;
        } ?> " placeholder="Prénom">

                        

                        <h4>Date de naissance</h4>
                        <input name="birthday" class="input" type="Date" value="<?php $user=new UserRepository();
        $query1=$user->findByUsername($_SESSION['user']);
        $birthday=$query1->birthday;
        if(!empty($birthday)){
          echo $birthday;
        }
         
        
      ?>"  >

                        <h4>Sexe</h4>
                          <div class="radio__container">
                            <?php $user=new UserRepository();
        $query1=$user->findByUsername($_SESSION['user']);
        $sexe=$query1->sexe;
        
       ?>
                            <input type="radio" name="sexe" value="female" <?php if(!empty($sexe) && ($sexe=='female')){
                              echo 'checked';
          
        } ?>><span>Femme</span>
                            <input type="radio" name="sexe" value="male" <?php if(!empty($sexe) && ($sexe=='male')){
                              echo 'checked';
          
        } ?>><span>Homme</span>
                          </div>
                  </div>
                    
                  <div class="image" >
              
                    
                       
                  <!--<input type="file" name="profileImg" type="image" placeholder="image">-->
                        <img src="<?php $user=new UserRepository();
                      $query1=$user->findByUsername($_SESSION['user']);
                      $sexe=$query1->sexe;
                      $profileImg=$query1->profileImg;
                      if(!empty($profileImg)){
                       
                        echo 'data:image/jpeg;base64,".base64_encode($profileImg)."';
                      } else if (!empty($sexe)) {
                          if($sexe=='female') {
                            echo 'svg/undraw_female_avatar_w3jk.svg';
                          } else {
                            echo 'svg/undraw_male_avatar_323b.svg';
                          }
                     } ?> " 

                       alt="">
                       
                       
                    
                  </div>   
                
                </div>
                
                
        

                <button typ="submit" class="btn btn3">Modifier</button>
                
              </form>

              <form method="post" action="infoProcess.php" class="contact tabShow hidden">
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
        $adresse=$query1->adresse;
        if(!empty($adresse)){
          echo $adresse;
        } ?> " placeholder="Adresse">

                    <h4>Email</h4>
                    <input class="input" name="email" type="email" value="<?php $user=new UserRepository();
        $query1=$user->findByUsername($_SESSION['user']);
        echo $query1->email;
        ?>">

                    <h4>Numéro de Téléphone</h4>
                    <input name="telephone" class="input" value="<?php $user=new UserRepository();
        $query1=$user->findByUsername($_SESSION['user']);
        $telephone=$query1->telephone;
        if(!empty($telephone)){
          echo $telephone;
        } ?> " placeholder="+216">
                  </div>

                  <div class="image">
                    <img src="svg/undraw_contact_us_15o2.svg" alt="">
                    
                  </div> 

                  

                </div>
                    
                <button type="submit" class="btn btn3">Modifier</button>
              </form>


              <form method="post" action="infoProcess.php" class="setting tabShow hidden">
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
                        

                        <h4>Nom d'utilisateur</h4>
                        <input class="input" name="username" type="text" value="<?php $username=$_SESSION['user'];
                        echo $username;
                        ?>">


                        <h4>Mot de passe</h4>
                        <input class="input" name="password" type="password" placeholder="<?php $user=new UserRepository();
        $query1=$user->findByUsername($_SESSION['user']);
        echo $query1->password;

        ?>">
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
  <script src="js/main.js"></script>
  <script src="js/profile.js"></script>
</body>
<html>
