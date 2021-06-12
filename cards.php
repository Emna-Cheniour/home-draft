<?php

include_once("autoload.php");
$prRep = new ProductRepository();
$prImRep = new ProductImageRepository();
if ($_POST['tri'] == "Prix Croissant") {
  $criteria = "price";
  $order = "ASC";
} elseif ($_POST['tri'] == "Prix Décroissant") {
  $criteria = "price";
  $order = "DESC";
} elseif ($_POST['tri'] == "Nouveaux produits") {
  $criteria = "date";
  $order = "DESC";
};
$minPrice = $_POST['minPrice'];
$minPrice = $_POST['maxPrice'];
$categories = [];
foreach (array_slice($_POST, 3) as $key => $value) {
  array_push($categories, $value);
}
echo "<h3>";
print_r($categories);
echo "</h3>";

$products = $prRep->getProducts(10, 30, 'price', 'ASC');
foreach ($products as $product) {

  $image = $prImRep->findOneBy(array('productId' => $product['id']))
?>
  <div class="productCard">
    <div class="productImage">
      <img src=<?php echo "data:image/jpeg;base64," . base64_encode($image['image']) ?> alt="">
    </div>
    <div class="productDetails">
      <h4><?= $product['name'] ?></h4>
      <h4><?= $product['price'] ?>Dt</h4>
      <a>
        <i class="fas fa-eye"></i>
        <h4>View product</h4>
      </a>
    </div>
  </div>
<?php
}
?>