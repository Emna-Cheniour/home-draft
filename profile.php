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

                <div class="content">
                  <div class="info">
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
                <div class="content">
                  <div class="info">
                    <div class="wavy">
                                <span style="--i:1;">C</span>
                                <span style="--i:2;">O</span>
                                <span style="--i:3;">N</span>
                    
                                <span style="--i:4;">T</span>
                                <span style="--i:5;">A</span>
                                <span style="--i:6;">C</span>
                                <span style="--i:7;">T</span>
                              
                              

                    </div>
                    <h4>Adresse</h4>
                    <input class="input" type="adress" placeholder="Adresse">

                    <h4>Email</h4>
                    <input class="input" type="email" placeholder="example@example.com">

                    <h4>Numéro de Téléphone</h4>
                    <input class="input" placeholder="+216">
                  </div>

                  <div class="image">
                    <img src="svg/undraw_contact_us_15o2.svg" alt="">
                    
                  </div> 

                  

                </div>
                    
                <button type="submit" class="btn btn3">Modifier</button>
              </form>


              <form method="post" action="" class="setting tabShow hidden">
                  <div class="content">
                    <div class="info">
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
                                  <span style="--i:11;">C</span>
                                  <span style="--i:12;">O</span>
                                  <span style="--i:13;">M</span>
                                  <span style="--i:14;">P</span>
                                  <span style="--i:15;">T</span>
                                  <span style="--i:16;">E</span>

                         </div>

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
                <div class="content">
                  <div class="info">
                      <div class="wavy">
                                <span style="--i:1;">F</span>
                                <span style="--i:2;">A</span>
                                <span style="--i:3;">V</span>
                                <span style="--i:4;">O</span>
                                <span style="--i:5;">R</span>
                                <span style="--i:6;">I</span>
                                <span style="--i:7;">S</span>
                                

                      </div>
                      <ul>
                        <li><a href="#">Recette1</a></li>
                        <li><a href="#">Recette2</a></li>
                        <li><a href="#">Recette3</a></li>
                        <li><a href="#">Recette4</a></li>
                        <li><a href="#">Recette5</a></li>
                      </ul>
                  </div>

                  <div class="image">
                    <img src="svg/undraw_Wishlist_re_m7tv.svg" alt="">
                    
                  </div> 
                </div>
                

                <button type="submit" class="btn btn3">Modifier</button>
              </form>

            </div>

            
      </div>

 </div>
  
  


<!-- <?php //include_once('footer.php'); ?>-->
  <script src="js/main.js"></script>
  <script src="js/profile.js"></script>
</body>
<html>
