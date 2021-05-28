<?php include_once 'assets/mainHead.php';?>
<link rel="stylesheet" href="testnav.css">
<link rel="stylesheet" href="css/navbar.css">

</head>


<header>


<div class="logo__container">
<img class="logopic" src="images/logo1.png" alt="Logo">
  <span class="logoname">Celiac101</span>
</div>


<nav>

    <div class="nav__links">
          <div class="link__item">
            <a href="acceuil.php">Acceuil</a>
        
          </div>

          <div class="link__item">
            <a href="#" id="dropService">Services</a>
            <div class="hidden__services">

              <div class="service__hidden">
                <a href="shopping.php">Catalogue des produits</a>
                <a href="journal.php">Journal des aliments</a>
              </div>
              
          
          <div class="service__hidden">
             <a href="Restaurant.php">Localisations</a>
              <a href="specialistProfile.php">Contacter un specialiste</a>
          </div>
              
          
          <div class="service__hidden">
          <a href="faq.php">FAQ</a>
              <a href="recette.php">Recettes</a>
          </div>
              
            </div>
            
            
        
          </div>
          <div class="link__item"><a href="InfoPage.php">Maladie Coeliaque</a></li>
    </div>

    
    

    
  </nav>

  <div class="right__nav__links">
      
         <a href=""> <i title="Dons" class="fas fa-donate"></i><a></li>
        <a href="cart.php"> <i title="Chariot" class="fas fa-shopping-cart"></i><a></li>
        <a href="#" id="dropProfilIcon"> <i title="profil" class="fas fa-user"></i></li>
        <a class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>

        <div class="profile__hidden">

          <img src="svg/undraw_male_avatar_323b.svg" alt="">
          
          <a href="profile.php"><i class="fas fa-cogs"></i>Modifier Profil</a>
          <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Se Deconnecter</a>
          
          
        </div>
        
    </div>

    
    

  


  
</header>
  
  

    <script src="testnav.js"></script>
    

    
</body>
</html>





