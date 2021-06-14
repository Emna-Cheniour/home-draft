<?php 
session_start();
$pageName='Nos Recettes';
include_once 'assets/bootstrapAsset.php';
include_once 'autoload.php';
include_once 'isAuthentificated.php';
$recipeCatsRepo=new RecipeCategoryRepository();
$recipeCats=$recipeCatsRepo->findAll();

         
?>

<link rel="stylesheet" href="css/recipeStyle.css">

</head>


  <?php include_once "navbarCo.php"; ?>
<div class="recipe--page__container">


  <div class="search__wrapper">

    <div class="form-group">

      <div class="dropdown">
        

           

        <select style="margin:40px 30px 0 40px"name="category" id="">
            <?php 
              

              foreach($recipeCats as $recipeCatItem){
              
            ?>
              <option><?php echo $recipeCatItem['nom'] ?></option>

            <?php } ?>
                
        </select>

        <button type="submit" class="btn btn1 don">Filtrer</button>


      </div>


              
   
   
  </div>

  <?php 
     $recetteRepo=new RecipeRepository();
     $recettes=$recetteRepo->findAll();

     $recipeCatRelRepo=new RecipeCategoryRelRepository();

   

       if(isset($_POST['submit'])){
         $catName=$_POST['category'];
       
        $recetteCatRel=$recipeCatRelRepo->findBy(array('nom' => $cat));
        
       }
     
    

  ?>



  <div class="card__wrapper">
   <?php 
  
   
   foreach($recettes as $recette){

     $images=new RecipePictureRepository();
     $recipeImg=$images->findOneBy(array('recipeId'=>$recette['id']));

     $ingredientRecipeRel=new RecipeIngredientRelRepository();
     
     $ingredientRel=$ingredientRecipeRel->findBy(array('recipeId'=>$recette['id']));
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
            <span class="expression"><?php echo count($ingredientRel)?></span>
            
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
            
            
            
           </a>

        </div>

      </div>

    </div>
  <?php } ?>

  </div>




</div>
<?php include 'footer.php' ?>
   
    <script src="js/filter.js"></script>
    <script src="js/testnav.js"></script>
    <script src="Js/heart.js"></script>
 
    <script src="Js/searchBar.js"></script>
    
  
 

</body>

</html>