<?php

include_once 'autoload.php';
include_once 'assets/bootstrapAsset.php';
session_start();
include_once 'isAdmin.php';

if (isset($_POST['addProduct'])) {
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$promotion = $_POST['promotion'];
$quantity = $_POST['quantity'];
$categories = [];
$images=[];

foreach (array_slice($_POST, 5) as $key => $post) {
  if (!(strpos($key, "category") === false)) {
    array_push($categories, $post);
  }
}
$product = new ProductRepository();
$productImage = new ProductImageRepository();
foreach ($_FILES as $key => $file) {
  if (!(strpos($key, "image") === false)) {
    array_push($images, $file);
  }
}
  


  $product = new ProductRepository();
  $product->insertProduct(array($name, $description, $quantity, $price, $promotion, date("y-m-d")));
  $myProdcut = $product->findOneBy(array("name" => $name));
  $productCategory = new ProductCategoryRepository();
  $productCategoryRel = new ProductCategoryRelRepository();
  foreach ($categories as $category) {
    $result = $productCategory->findOneBy(array('name' => $category));
    if ($result) {
      $productCategoryRel->insert(array("categoryId" => $result['id'], 'productId' => $myProdcut['id']));
    } else {
      $productCategory->insert(array("name" => $category));
      $myCategory = $productCategory->findOneBy(array('name' => $category));
      $productCategoryRel->insert(array("categoryId" => $myCategory['id'], 'productId' => $myProdcut['id']));
    };
  }
  foreach ($images as $image) {
    $img_blob = file_get_contents($image['tmp_name']);
    
    $productImage->insert(array("image"=>$img_blob,"productId"=>$myProdcut['id']) );

}
}
?>

<link rel="stylesheet" href="css/adminMain.css">;
<title>Ajouter produit</title>
</head>

<body>

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
        <span style="--i:13;">P</span>
        <span style="--i:14;">R</span>
        <span style="--i:15;">O</span>
        <span style="--i:16;">D</span>
        <span style="--i:17;">U</span>
        <span style="--i:18;">I</span>
        <span style="--i:19;">T</span>


      </div>

      <form method="post" enctype="multipart/form-data">
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

          <input type="number" class="form-control" name="quantity" placeholder="Promotion Produit" value="0">

        </div>

        <div class="form-group">

          <input type="text" class="form-control" name="promotion" placeholder="Promotion Produit" value="0 %">

        </div>

        <div class="multiple img">
          <div class="form-group">

            <!--<button  style="width:100px;" id="images" onclick="document.querySelector('#formFile').click();return false">Upload</button>-->

            <input class="form-control" name="image1" id="formFile" type="file" accep="image/">

            <i class="fas fa-plus plusIcon" style="margin:10px 0 0 10px; cursor:pointer"></i>
            <i class="fas fa-minus minus" style="margin:10px 0 0 10px; cursor:pointer"></i>

          </div>

        </div>


        <div class="multiple cat">
          <div class="form-group">
            <input type="text" name="category1" class="form-control" placeholder="Entrer Catégorie" style="margin-right:10px">

            <i class="fas fa-plus plusIcon" style="margin:10px 0 0 10px; cursor:pointer"></i>
            <i class="fas fa-minus minus" style="margin:10px 0 0 10px; cursor:pointer"></i>

          </div>

        </div>








        <button type="submit" name="addProduct" class="btn btn3">Submit</button>
      </form>

    </div>

  </div>


  <script src="js/addProduct.js"></script>

</body>

</html>