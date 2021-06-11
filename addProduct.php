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
                              <span style="--i:11;"></span>
                              <span style="--i:12;"></span>
                              <span style="--i:13;">E</span>
                              <span style="--i:14;">L</span>
                              <span style="--i:15;">E</span>
                              <span style="--i:16;">M</span>
                              <span style="--i:17;">E</span>
                              <span style="--i:18;">N</span>
                              <span style="--i:19;">T</span>
                              

    </div>

    <form method="post"  enctype="multipart/form-data">
      <div class="form-group">
        
        <input type="text" name="name" class="form-control" placeholder="Nom Produit">
      
      </div>

      <div class="form-group">
        
        <input type="text" class="form-control" name="description" placeholder="Description Produit">
      
      </div>

      <div class="form-group">
        
        <input type="text" class="form-control" name="price" value="0.0 DT">
      
      </div>

      <div class="form-group">
        
        <input type="text" class="form-control" name="promotion" placeholder="Promotion Produit" value="0 %">
      
      </div>

      <div class="multiple img">
        <div class="form-group">

          <!--<button  style="width:100px;" id="images" onclick="document.querySelector('#formFile').click();return false">Upload</button>-->
          
          <input class="form-control" name="recipeImg" id="formFile" type="file"  accep="image/" >

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


      

     
    
      
    
      <button type="submit" class="btn btn3">Submit</button>
    </form>

  </div>

</div>


<script src="js/admin.js"></script>

</body>

</html>