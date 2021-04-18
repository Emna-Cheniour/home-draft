<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste Des Recettes</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

  <link rel="stylesheet" href="css/recipeStyle.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  
</head>
<body>
 
<?php include("navbarConnecte.php"); ?>  

  <div class="search__wrapper">

    <div class="form-group">

      <div class="dropdown">
        <div class="default-option">Filtre</div>

        <div class="dropdown-list">
          <ul class="indicator">
            <!--<li data-filter="all" class="active"><button><a href="#">Tous</a></button></li>-->
            <li><button><a href="#">Pâtes</a></button></li>
            <li><button><a href="#">Plat Végétarien</a></button></li>
            <li><button><a href="#">Salade</a></button></li>
            <li><button><a href="#">Smoothie</a></button></li>
            <li><button><a href="#">Plat Tunisien</a></button></li>
            <li><button><a href="#">Pâtisseries</a></button></li>
            
          </ul>
        </div>
      </div>

      
    <div class="search__input">
     <i class="fas fa-search" id="search__icon"></i>
      <input id="search" placeholder="Rechercher..." type="text">
    
    </div>

    </div>
  </div>


  <div class="card__wrapper">

    <div class="card" >
      <div  class="card__body">
        <img src="icons/reciper1.jpg" class="card__img">
        <h2 class="card__title">Bowl Chia</h2>
        
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
        <p class="card__description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum tempore corrupti culpa minima velit, et,</p>
      </div>
      <div class="card__options">
        <button class="card__btn"><a href="recetteIndiv.html">Voir Recette</a></button>

        <div class="card__icons">
          <a  class="like">
              <i class="fa fa-heart" aria-hidden="true"></i>
          </a>
          
          <img class="add" src="icons/plus.png">
          
        </div>
      </div>
      
    </div>

    <div class="card" >
      <div class="card__body" >
        <img src="icons/reciper2.jpg" class="card__img">
        <h2 class="card__title">Recipe2</h2>
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
        <p class="card__description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum tempore corrupti culpa minima velit, et,</p>
      </div>
      <div class="card__options">
        <button class="card__btn"><a href="#">Voir Recette</a></button>
        <div class="card__icons">
          <a class="like">
            <i class="fa fa-heart" aria-hidden="true"></i>
          </a>
          <img src="icons/plus.png">
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card__body" >
        <img src="icons/reciper3.jpg" class="card__img">
        <h2 class="card__title">Recipe3</h2>
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
        <p class="card__description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum tempore corrupti culpa minima velit, et, </p>
      </div>
      <div class="card__options">
        <button class="card__btn"><a href="#">Voir Recette</a></button>
        <div class="card__icons">
          <a class="like">
            <i class="fa fa-heart" aria-hidden="true"></i>
          </a>
          <img src="icons/plus.png">
        </div>
      </div>
    </div>

    <div class="card" >
      <div class="card__body">
        <img src="icons/reciper4.jpg" class="card__img">
        <h2 class="card__title">Recipe4</h2>
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
        <p class="card__description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum tempore corrupti culpa minima velit, et,</p>
      </div>
      <div class="card__options">
        <button class="card__btn"><a href="#">Voir Recette</a></button>
        <div class="card__icons">
          <a class="like">
            <i class="fa fa-heart" aria-hidden="true"></i>
          </a>
          <img src="icons/plus.png">
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card__body" >
        <img src="icons/reciper5.jpg" class="card__img">
        <h2 class="card__title">Recipe5</h2>
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
        <p class="card__description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum tempore corrupti culpa minima velit, et,</p>
      </div>
      <div class="card__options">
        <button class="card__btn"><a href="#">Voir Recette</a></button>
        <div class="card__icons">
          <a class="like">
            <i class="fa fa-heart" aria-hidden="true"></i>
          </a>
          <img src="icons/plus.png">
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card__body" >
        <img src="icons/reciper6.jpg" class="card__img">
        <h2 class="card__title">Recipe6</h2>
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
        <p class="card__description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum tempore corrupti culpa minima velit, et,</p>
      </div>
      <div class="card__options">
        <button class="card__btn"><a href="#">Voir Recette</a></button>
        <div class="card__icons">
          <a class="like">
            <i class="fa fa-heart" aria-hidden="true"></i>
          </a>
          
          <img src="icons/plus.png">
        </div>
      </div>
    </div>

    <div class="card" >
      <div class="card__body" >
        <img src="icons/reciper7.jpg" class="card__img">
        <h2 class="card__title">Recipe7</h2>
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
        <p class="card__description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum tempore corrupti culpa minima velit, et,</p>
      </div>
      <div class="card__options">
        <button class="card__btn"><a href="#">Voir Recette</a></button>
        <div class="card__icons">
          
          <a class="like">
            <i class="fa fa-heart" aria-hidden="true"></i>
          </a>
          <img src="icons/plus.png">
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card__body" >
        <img src="icons/reciper8.jpg" class="card__img">
        <h2 class="card__title">Recipe8</h2>
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
        <p class="card__description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum tempore corrupti culpa minima velit, et,</p>
      </div>
      <div class="card__options">
        <button class="card__btn"><a href="#">Voir Recette</a></button>
        <div class="card__icons">
          <a class="like">
            <i class="fa fa-heart" aria-hidden="true"></i>
          </a>
          <img src="icons/plus.png">
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card__body" >
        <img src="icons/reciper9.jpg" class="card__img">
        <h2 class="card__title">Recipe9</h2>
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
        <p class="card__description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum tempore corrupti culpa minima velit, et,</p>
      </div>
      <div class="card__options">
        <button class="card__btn"><a href="#">Voir Recette</a></button>
        <div class="card__icons">
          <a class="like">
            <i class="fa fa-heart" aria-hidden="true"></i>
          </a>
          <img src="icons/plus.png">
        </div>
      </div>
    </div>

    

  </div>


  <?php include("footer.php"); ?>


  <script src="Js/main.js"></script>
  <script src="Js/heart.js"></script>
  <script src="Js/searchBar.js"></script>
  <script src="Js/drop.js"></script>
  
</body>
</html>
