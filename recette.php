<?php 
session_start();
include_once 'assets/mainHead.php';
include_once('autoload.php');

$recettes=new RecipeRepository();
$recette=$recettes->findBy(array('id'=> $_GET['id']));

$images=new recipeImageRepository();
$recipeImg=$images->findBy(array('id'=> $recette->id));
?>

</head>


  <?php include("navbarCo.php"); ?>
<div class="recipe--page__container">


  <div class="search__wrapper">

    <div class="form-group">

      <div class="dropdown">
        <div class="default-option">Catégories</div>

        <div class="dropdown-list">
          <ul class="indicator">
          <?php 
            $recipeCats=new RecipeCatgeoryRepository();
            foreach($recipeCats as $recipeCatItem)
          ?>
            <li><button><a href="?<?php echo $recipeCatItem['id']?>"><?php echo $recipeCatItem?></a></button></li>
            

          </ul>
        </div>
      </div class="trierPardiv">
          
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
   <?php 
   $recetteRepo=new RecipeRepository();
   if(isset($_GET['id'])){
     $recetteCat=$recipeCats->findBy(array('id'=>$recette->id));
   }
   $recettes=$recette->findAll();

   
   foreach($recettes as $recette){
     $images=new recipeImageRepository();
     $recipeImg=$images->findBy(array('id'=>$recette->id));
     $ingredients=new IngredientRepository();
     
     $ingredient=$ingredients->findBy(array('id'=>$recette->id));
          ?>
    <div class="card">
     
      <div class="card__body">
        <img src="<?php 'data:image/jpeg;base64,".base64_encode($recipeImg[0]->image)."' ?>" class="card__img">
  

        <h2 class="card__title"><?php echo $recette->title ?></h2>

        <div class="card__detail">
          <div class="detail__field">
            <span class="number"><?php echo $recette->time ?></span>
            <span class="expression">Minutes</span>
          </div>

          <div class="detail__field">
            <span class="number"><?php echo $ingredient->countRow()?></span>
            <span class="expression">Ingredients</span>
          </div>

          <div class="detail__field">
            <span class="number">Difficulté</span>
            <span class="expression"><?php echo $recette->time?></span>
          </div>
        </div>
        <p class="card__description"><?php echo $recette->description ?></p>
      </div>

      <div class="card__options">
         <a href="recetteIndiv?<?php echo ($recette->id)?>.php" class="btn btn1 don" >Voir Recette</a>

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
<script src="js/main.js"></script>
   
    <script type="js/scrollUpBtn.js"></script>
    <script src="js/testnav.js"></script>
  <script src="Js/heart.js"></script>
  <script src="Js/searchBar.js"></script>
  <script src="Js/filter.js"></script>
 

</body>

</html>