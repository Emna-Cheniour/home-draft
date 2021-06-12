<?php 

  include_once 'assets/bootstrapAsset.php'
?>

<body>


<?php include_once 'preloader.php' ?>



  <div class="progress__result">
    <p>
      BIENVENU ADMIN 
    </p>

  </div>

  <div class="admin__fonctions">

      <div class="section__admin">
        <div class="services__btn default" ><button class="btn btn1 btnServ">Gérer Les Comptes</button></div>

        <div class="hidden__options">

            <div class="services__btn" ><a href="userAdmin.php" ><button class="btn btn3 don">Utilisateur</button></a></div>
            <div class="services__btn" ><a href="adminAdmin.php"><button class="btn btn3 don">Admin</button></a></div>


        </div>

      </div>

      <div class="section__admin">
        <div class="services__btn default" ><button class="btn btn1 btnServ">Gérer Les Ventes</button></div>

        
        <div class="hidden__options">
            <div class="services__btn" ><a href="shopping.php" ><button class="btn btn3 don">Catalogue</button></a></div>
            <div class="services__btn" ><a href="addProduct.php" ><button class="btn btn3 don">Ajouter Produit</button></a></div>
            <div class="services__btn" ><a href="cart.php"><button class="btn btn3 don">Commandes</button></a></div>

        </div>
       

      </div>
      
      <div class="section__admin">
        <div class="services__btn default" ><button class="btn btn1 btnServ">Gérer Les Recette</button></div>

        <div class="hidden__options">
            <div class="services__btn" ><a href="recette.php" ><button class="btn btn3 don">Catalogue</button></a></div>
            <div class="services__btn" ><a href="addRecipe.php"><button class="btn btn3 don">Ajouter Recette</button></a></div>

        </div>

      </div>
      
      <div class="section__admin">
        <div class="services__btn default" ><button class="btn btn1 btnServ">Gérer Les Spécialistes</button></div>

        <div class="hidden__options">
            <div class="services__btn" ><a href="specialistGroup.php" ><button class="btn btn3 don">Liste </button></a></div>
            <div class="services__btn" ><a href="addSpecialist.php"><button class="btn btn3 don">Ajouter</button></a></div>

        </div>

      </div>
      <div class="section__admin">
         <div class="services__btn default" ><button class="btn btn1 btnServ">Gérer Les Restaurant</button></div>

         <div class="hidden__options">
            <div class="services__btn" ><a href="restaurant.php" ><button class="btn btn3 don">Carte</button></a></div>
            <div class="services__btn" ><a href="addRestaurant.php"><button class="btn btn3 don">Ajouter</button></a></div>

        </div>

      </div>

      <div class="section__admin">
        <div class="services__btn" ><a href="don.php"><button class="btn btn1 btnServ">Gérer Les Dons</button></a></div>


      </div>

      <div class="section__admin">
         <div class="services__btn default" ><button class="btn btn1 btnServ">Gérer Le Journal</button></div>

         <div class="hidden__options">
            <div class="services__btn" ><a href="journal.php" ><button class="btn btn3 don">Journal Alimentaire
            </button></a></div>
            <div class="services__btn" ><a href="addJournal.php"><button class="btn btn3 don">Ajouter Aliment</button></a></div>

        </div>

      </div>
      
      
     
      
      

      
      
    </div>


    <script src="js/admin.js"></script>

</body>

</html>

