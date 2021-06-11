<?php

include_once 'assets/bootstrapAsset.php';
?>

<body>

<div class="container">
  
</div>

<div class="container add">
  
  <div class="add__admin">
    <div class="wavy">
                              <span style="--i:1;">A</span>
                              <span style="--i:2;">J</span>
                              <span style="--i:3;">O</span>
                              <span style="--i:4;">U</span>
                              <span style="--i:4;">T</span>
                              <span style="--i:5;">E</span>
                              <span style="--i:6;">R</span>
                              <span style="--i:7;"></span>
                              
                              <span style="--i:8;"></span>
                              <span style="--i:9;">U</span>
                              <span style="--i:10;">N</span>
                              <span style="--i:11;">E</span>
                              <span style="--i:12;"></span>
                              <span style="--i:13;"></span>
                              <span style="--i:14;">R</span>
                              <span style="--i:15;">E</span>
                              <span style="--i:16;">C</span>
                              <span style="--i:17;">E</span>
                              <span style="--i:18;">T</span>
                              <span style="--i:19;">T</span>
                              <span style="--i:20;">E</span>
                             

    </div>

    <form method="post"  enctype="multipart/form-data">

      <div class="addForm">
      <div class="form-group">
        
        <input type="text" name="title" class="form-control" name="title" placeholder="Titre Recette">
      
      </div>

      <div class="form-group">

        <input type="text" name="description" class="form-control" name="description" placeholder="Description">
      
      </div>


      <div class="form-group">
      
        <input type="text" name="time" class="form-control" name="time" placeholder="Durée">
      
      </div>

      <div class="form-group">
      
        <h6>Difficulté</h6>

        <select name="difficulty" id="">
          <option value="facile">Facile</option>
          <option value="moyenne">Moyenne</option>
          <option value="difficile">Difficile</option>
        </select>

      
      </div>

     

      <div class="multiple ingre">
          <div class="form-group">
              
              <input type="text"  name="ingredientName" class="form-control" placeholder="Entrer Ingrédient" style="margin-right:10px">

              <input  type="text" name="ingredientQte"  class="form-control" placeholder="Entrer Quantité">

              <i class="fas fa-plus" id="plusIcon" style="margin:10px 0 0 10px; cursor:pointer"></i>
              <i class="fas fa-minus" id="minus" style="margin:10px 0 0 10px; cursor:pointer"></i>

      
              </div>


      </div>
          
      

     
    <div class="multiple img">
        <div class="form-group ">
          
          <input class="form-control" name="recipeImg" id="formFile" type="file"  >

          <i class="fas fa-plus" id="plusIcon" style="margin:10px 0 0 10px; cursor:pointer"></i>
          <i class="fas fa-minus" id="minus" style="margin:10px 0 0 10px; cursor:pointer"></i>

        </div>
    
    </div>


    <div class="multiple cat">
      <div class="form-group">
          <input type="text" name="category" class="form-control" placeholder="Entrer Catégorie" style="margin-right:10px">

          <i class="fas fa-plus" id="plusIcon" style="margin:10px 0 0 10px; cursor:pointer"></i>
          <i class="fas fa-minus" id="minus" style="margin:10px 0 0 10px; cursor:pointer"></i>

        </div>

    </div>  

      

      </div>
      


     
    
      <button type="submit" class="btn btn3">Submit</button>
    </form>

  </div>

</div>


<script src="js/admin.js"></script>

</body>

</html>