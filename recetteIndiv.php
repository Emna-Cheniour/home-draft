
  
<?php 
include("assets/mainHead.php"); 

$recettes=new RecipeRepository();
$recette=$recettes->findBy(array('id'=> $_GET['id']));

$images=new recipeImageRepository();
$recipeImg=$images->findBy(array('id'=> $recette->id));

$ingredients=new IngredientRepository();
$ingredient=$ingredients->findBy(array('id'=> $recette->id));

$steps=new StepRepository();
$step=$steps->findBy(array('id'=> $recette->id));

?>

<link rel="stylesheet" href="css/recipeIndivStyle.css">
<title><?php echo $recette->title ?></title>

</head>
<body>
  
<?php include_once 'preloader.php' ?>

  <?php include("navbarCo.php"); ?>
  

<div class="path__link">
  <a href="#">Recette</a>
  >
  <a href="#"><?php echo $recette->title ?></a>
  
</div>

<div class="main__container">
  
  <h1 class="main__header"><?php echo $recette->title?></h1>

  <div class="rating">

    <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span class="num__rating">4.5/5</span>
    </div>

    <a href="#" class="comment">
      <i class="fas fa-comment"></i>
      <span>10 commentaires</span>
    </a>
  
  </div>

  <div class="recipe__container">
    <div class="slider">
      <div class="slides">
        <!--radio button start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio button end-->
   
        <!--slide image start-->

         <div class="slide first">
           <img src="<?php 'data:image/jpeg;base64,".base64_encode($recipeImg[0]->image)."' ?>" alt="">
         </div>
         <div class="slide">
           <img src="<?php 'data:image/jpeg;base64,".base64_encode($recipeImg[1]->image)."' ?>" alt="">
         </div>
         <div class="slide">
           <img src="<?php 'data:image/jpeg;base64,".base64_encode($recipeImg[2]->image)."' ?>" alt="">
         </div>
         <div class="slide">
           <img src="<?php 'data:image/jpeg;base64,".base64_encode($recipeImg[3]->image)."' ?>" alt="">
         </div>
         
   
        <!--slide image end -->
   
        <!--autonaviqgation start-->
        <div class="navigation__auto">
          <div class="auto__btn1"></div>
          <div class="auto__btn2"></div>
          <div class="auto__btn3"></div>
          <div class="auto__btn4"></div>
        </div>
        <!--autonaviqgation end-->
      </div>
   
      <!--manual navigation start-->
      <div class="navigation__manual">
        <label for="radio1" class="manual__btn"></label>
        <label for="radio2" class="manual__btn"></label>
        <label for="radio3" class="manual__btn"></label>
        <label for="radio4" class="manual__btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->


      <div class="first__details">

        <div class="detail">
          <img src="icons/clock.png" alt="">
          <span><?php echo $recette->time ?> Minutes</span>
        </div>
  
        <div class="detail">
          <img src="icons/chef.png" alt="">
          <span><?php echo $recette->difficulty ?></span>
        </div>
  
        <div class="detail">
          <img src="icons/dollar.png" alt="">
          <span><?php echo $ingredient->countElement() ?> Minutes</span>
        </div>
        
  
      </div>

    
    

   <div class="detail__wrapper">
    

    <div class="ingredient__container">
      <div class="ingredient__header">
        <h2>Ingrédients</h2>
        <img src="icons/recipe-book.png" class="step__ingredient--img" alt="">
      </div>
      
      <div class="item__wrapper">
        <div class="mini__card--wrapper">


        <?php 
          foreach($ingredient as $ingredientItem ){
        ?>
          <div class="mini__card">
          
            <img src="<?php 'data:image/jpeg;base64,".base64_encode($ingredientItem->image)."' ?>" alt="">
           
            <h3><?php echo $ingredientItem->quantity ?></h3>
            <h4><?php echo $ingredientItem->name ?></h4>
  
          </div>
  
        
  
          <?php } ?>
        </div>

      </div>
      


    </div>

    <div class="step__container">
      <div class="header__container">
        
        <h2 class="step__header">
        
          Préparations
        </h2>
        <img class="step__ingredient--img" src="icons/cooking.png" alt="">
      </div>
      

      <div class="step__summary">
        <div class="step__summary--header"><strong
        >Temps Total: </strong><?php echo $recette->time?>min</div>
       
        <div class="step__summary--container">
          <div class="step__summary--content">
            <h4>Péparation:</h4>
            <div><?php echo $recette->time?> min</div>
          </div>

          <div class="step__summary--content">
            <h4>Repos:</h4>
            <div>-</div>
          </div>

          <div class="step__summary--content">
            <h4>Cuisson:</h4>
            <div>15 min</div>
          </div>
          
        </div>
      </div>
      <ul>
      <?php foreach($stepItem as $step){?>
        <li>
          <h3>Etape<?php echo $stepItem->number?></h3>
          <span>$stepItem->name</span>
        </li>
        <?php } ?>
      </ul>

      
    </div>


   </div> 
    
  </div>

  <div class="star__rating--section">
    <div class="star__section">
      <h4>C'est terminé ! Qu'en avez-vous pensé ?</h4>
        <span class="stars">
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
     
        </span>
    </div>

 
  </div>

  
 

<script src="Js/starHover.js"></script>
<script src="testnav.js"></script>
<script src="Js/slide.js"></script>
<?php include 'footer.php' ?>
<?php include_once 'assets/scripts.php' ?>
<script src="js/main.js"></script>
   
    <script type="js/scrollUpBtn.js"></script>
    <script src="js/testnav.js"></script>
</body>
</html>
