<?php include("head.php"); 
session_start();
include_once('autoload.php');
?>
<body>

  <?php include("navbarConnecte.php"); ?>
<div class="recipe--page__container">


  <div class="search__wrapper">

    <div class="form-group">

      <div class="dropdown">
        <div class="default-option">Catégories</div>

        <div class="dropdown-list">
          <ul class="indicator">
            <li><button><a href="#">Pâtes</a></button></li>
            <li><button><a href="#">Plat Végétarien</a></button></li>
            <li><button><a href="#">Salade</a></button></li>
            <li><button><a href="#">Smoothie</a></button></li>
            <li><button><a href="#">Plat Tunisien</a></button></li>
            <li><button><a href="#">Pâtisseries</a></button></li>

          </ul>
        </div>
      </div class="trierPardiv">

         <!--<h5>Trier par:</h5>
          <select name="" id="trierPar">
            <option value="">Nouveautés</option>
            <option value="">Prix croissant</option>
            <option value="">Prix decroissant</option>
          </select> -->
          
        <div class="search">
          <div class="icon">

          </div>
          <div class="input">
            <input type="text" placeholder="Rechercher" id="mysearch">
          </div>
          <span class="clear" ></span>
        </div>

     
        

      </div>


    
    <div class="selectedAdded"></div>
   
  </div>


  <div class="card__wrapper">
   <?php for($i=1;$i<3;$i++){
          ?>
    <div class="card">
     
      <div class="card__body">
        <img src="icons/reciper1.jpg" class="card__img">
        <?php 
           $recette=new RecipeRepository();
           $query=$recette->showRecipe($i);
        ?>
        <h2 class="card__title"><?php echo $query->title ?></h2>

        <div class="card__detail">
          <div class="detail__field">
            <span class="number">20</span>
            <span class="expression">Minutes</span>
          </div>

          <div class="detail__field">
            <span class="number">5</span>
            <span class="expression">Ingredients</span>
          </div>

          <div class="detail__field">
            <span class="number">4-6</span>
            <span class="expression">Servings</span>
          </div>
        </div>
        <p class="card__description"><?php echo $query->description ?></p>
      </div>

      <div class="card__options">
         <a href="recetteIndiv.php" class="btn btn1 don" >Voir Recette</a>

        <div class="card__icons">
          <a class="like">
            <i class="fa fa-heart" aria-hidden="true"></i>
           </a>

        </div>

      </div>

    </div>
  <?php } ?>

  </div>




</div>
<?php include 'footer.php' ?>
  <script src="Js/main.js"></script>
  <script src="Js/heart.js"></script>
  <script src="Js/searchBar.js"></script>
  <script src="Js/filter.js"></script>

</body>

</html>