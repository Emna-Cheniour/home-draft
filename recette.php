<?php 
session_start();
include_once 'assets/mainHead.php';
include_once 'autoload.php';
$recipeCatsRepo=new RecipeCategoryRepository();
$recipeCats=$recipeCatsRepo->findAll();
         
?>

<link rel="stylesheet" href="css/recipeStyle.css">

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
              

              foreach($recipeCats as $recipeCatItem){
            ?>
              <li><button><a href="?catId<?php echo $recipeCatItem['id']?>"><?php echo $recipeCatItem['nom'] ?></a></button></li>

            <?php } ?>
            

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

  <?php 
     $recetteRepo=new RecipeRepository();
     $recettes=$recetteRepo->findAll();

  
     if(isset($_GET['catId'])){
       $recipeCatRelRepo=new RecipeCategoryRelRepository();
       $recetteCatRel=$recipeCatRelRepo->findOneBy(array('cetagoryId' => $ca));
       $recettes= $recetteCatRel['recipeId'];
     }
  ?>



  <div class="card__wrapper">
   <?php 
  
   
   foreach($recettes as $recette){

     $images=new RecipePictureRepository();
     $recipeImg=$images->findOneBy(array('recipeId'=>$recette['id']));

     $ingredientRecipeRel=new RecipeIngredientRelRepository();
     $ingredientRel=$ingredientRecipeRel->findOneBy(array('recipeId'=>$recette['id']));
          ?>
    <div class="card">
     
      <div class="card__body">
        <img  src=<?php echo "data:image/jpeg;base64," . base64_encode($recipeImg['picture']) ?> class="card__img">
  

        <h2 class="card__title"><?php echo $recette['title'] ?></h2>

        <div class="card__detail">
          <div class="detail__field">
            <span class="number"><?php echo $recette['time'] ?></span>
            <span class="expression">Minutes</span>
          </div>

          <div class="detail__field">
          <span class="number">Ingredients</span>
            <span class="expression"><?php  echo count($ingredientRel)?></span>
            
          </div>

          <div class="detail__field">
            <span class="number">Difficulté</span>
            <span class="expression"><?php echo $recette['difficulty']?></span>
          </div>
        </div>
        <p class="card__description"><?php echo $recette['description'] ?></p>
      </div>

      <div class="card__options">
         <a href="recetteIndiv.php?recipeId=<?php echo $recette['id']?>" class="btn btn1 don" >Voir Recette</a>

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
   

    <script src="js/testnav.js"></script>
  <script src="Js/heart.js"></script>
  <script src="Js/searchBar.js"></script>
  
 

</body>

</html>