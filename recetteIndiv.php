<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recette Indiv</title>
  <link rel="stylesheet" href="css/recipeIndivStyle.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/iconHover.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
</head>
<body>
  

<body>
  <?php include("navbarRecetteIndividuelle.php"); ?>
  

<div class="path__link">
  <a href="#">Recette</a>
  >
  <a href="#">Bowl Chia</a>
  
</div>

<div class="main__container">
  
  <h1 class="main__header">Bowl Chia Maison</h1>

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
           <img src="icons/chia1.jpg" alt="">
         </div>
         <div class="slide">
           <img src="icons/reciper1.jpg" alt="">
         </div>
         <div class="slide">
           <img src="icons/chia3.jpg" alt="">
         </div>
         <div class="slide">
           <img src="icons/chia2.jpg" alt="">
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
          <span>20 Minutes</span>
        </div>
  
        <div class="detail">
          <img src="icons/chef.png" alt="">
          <span>Facile</span>
        </div>
  
        <div class="detail">
          <img src="icons/dollar.png" alt="">
          <span>Bon marché</span>
        </div>
        
  
      </div>

      
    
<!--<div class="quantity__container">
      <img id="remove" src="images/remove (1).png" alt="">
      <span class="person__span">4 personnes</span>
      <img id="add" src="images/add.png" alt="">
    </div>-->
    

   <div class="detail__wrapper">
    

    <div class="ingredient__container">
      <div class="ingredient__header">
        <h2>Ingrédients</h2>
        <img src="icons/recipe-book.png" class="step__ingredient--img" alt="">
      </div>
      
      <div class="item__wrapper">
        <div class="mini__card--wrapper">

          <div class="mini__card">
          
            <img src="icons/salt-shaker.png" alt="">
            <input type="checkbox" name="check-btn" id="ingredient__checkbox">
            <h3>1 cuillères à café</h3>
            <h4>Sel</h4>
  
          </div>
  
          <div class="mini__card">
            
            <img src="icons/water.png" alt="">
            <input type="checkbox" name="check-btn" id="ingredient__checkbox">
            <h3>1 cuillères à café</h3>
            <h4>Sel</h4>
            
          </div>
          <div class="mini__card">
            
            <img src="icons/butter.png" alt="">
            <input type="checkbox" name="check-btn" id="ingredient__checkbox">
            <h3>1 cuillères à café</h3>
            <h4>Sel</h4>
            
          </div>
          <div class="mini__card">
            
            <img src="icons/milk.png" alt="">
            <input type="checkbox" name="check-btn" id="ingredient__checkbox">
            <h3>1 cuillères à café</h3>
            <h4>Sel</h4>
          </div>
  
          <div class="mini__card">
            
            <img src="icons/water.png" alt="">
            <input type="checkbox" name="check-btn" id="ingredient__checkbox">
            <h3>1 cuillères à café</h3>
            <h4>Sel</h4>
            
          </div>
  
          <div class="mini__card">
            
            <img src="icons/salt-shaker.png" alt="">
            <input type="checkbox" name="check-btn" id="ingredient__checkbox">
            <h3>1 cuillères à café</h3>
            <h4>Sel</h4>
          </div>
  
          
        </div>

        <div class="add__cart--btn">
          <button class="ingredientBtn"><a href="#">Ajouter Panier</a></button>
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
        >Temps Total: </strong> 20 min</div>
       
        <div class="step__summary--container">
          <div class="step__summary--content">
            <h4>Péparation:</h4>
            <div>20 min</div>
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
        <li>
          <h3>Etape1</h3>
          <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
        </li>
  
        <li>
          <h3>Etape2</h3>
          <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>
  
        <li>
          <h3>Etape3</h3>
          <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span></li>
        <li>
          <h3>Etape4</h3>
          <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span></li>
        <li>
          <h3>Etape5</h3>
          <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span></li>
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

    <div class="add__image" >
      <i class="fas fa-camera-retro"></i>
      <a href="#">Ajouter ma photo</a>
    </div>
  </div>

  
 <div class="comment__section">
   <div class="input__container">
    <input type="text" id="input" placeholder="Donnez Votre Avis...">
    <button type="button" name="button" id="cancel">Annuler</button>
    <button type="button" name="button" id="comment">commenter</button>
   </div>
    
    <div class="box__container">
      <div class="box"></div>
    </div>
  </div>
  
  
</div>

<script src="Js/starHover.js"></script>

<!--<script src="js/serving.js"></script>-->
<script src="Js/slide.js"></script>
</body>
</html>
