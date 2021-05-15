<?php include_once 'head.php' ?>

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
              <form method="post" action="" class="profile tabShow">
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
                        <input class="input" type="text" placeholder="Nom">

                        <h4>Prénom</h4>
                        <input class="input" type="text" placeholder="Prénom">

                        

                        <h4>Date de naissance</h4>
                        <input class="input" type="date" >

                        <h4>Sexe</h4>
                          <div class="radio__container">
                            <input type="radio" name="sexe"><span>Femme</span>
                            <input type="radio" name="sexe"><span>Homme</span>
                          </div>
                  </div>
                    
                  <div class="image">
                    <img src="svg/undraw_profile_pic_ic5t.svg" alt="">
                    
                  </div>   
                
                </div>
                
                
        

                <button typ="submit" class="btn btn3">Modifier</button>
                
              </form>

              <form method="post" action="" class="contact tabShow hidden">
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
                    <input class="input" type="adress" placeholder="Adresse">

                    <h4>Email</h4>
                    <input class="input" type="email" placeholder="example@example.com">

                    <h4>Numéro de Téléphone</h4>
                    <input class="input" placeholder="+216">
                  </div>

                  <div class="image">
                    <img src="svg/undraw_healthy_options_sdo3.svg" alt="">
                    
                  </div> 

                  

                </div>
                    
                <button type="submit" class="btn btn3">Modifier</button>
              </form>


              <form method="post" action="" class="setting tabShow hidden">
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
                        <input class="input" type="text" placeholder="Nom d'utilisateur">


                        <h4>Mot de passe</h4>
                        <input class="input" type="password" value="brightcode">
                    </div>

                    <div class="image">
                    <img src="svg/undraw_accept_terms_4in8.svg" alt="">
                    
                  </div> 
                  </div>
               

                <button type="submit" class="btn btn3">Modifier</button>
              </form>

              <form method="post" action="" class="favourite tabShow hidden">
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
