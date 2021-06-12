<?php
session_start();
include_once 'assets/mainHead.php';
include_once 'autoload.php';
$productrep = new ProductRepository();
$productImgrep = new ProductImageRepository();
if (isset($_GET['view'])) {
    $product = $productrep->findOneBy(array('id' => $_GET['view']));
    $images = $productImgrep->findBy(array('productId' => $product['id']));
} else {
    header("Location:shopping.php");
}

?>
<link rel="stylesheet" href="css/product.css">

</head>

<body>
    <?php include_once 'preloader.php' ?>
    <?php include_once 'navbarCo.php' ?>
    <div class="product">
    <h1 style=" display : none" id="productId"><?=$product['id']?></h1>
        <div class="swiper-container productImageContainer">
            <div class="swiper-wrapper productImageWrapper">
                <?php
                foreach ($images as $image) {
                ?>
                 <div class="swiper-slide productImageSlide">
                    <div class="productImage">
                        <img src=<?php echo "data:image/jpeg;base64," . base64_encode($image['image']) ?> alt="">
                    </div>
                </div>
                <?php
                }
                ?>
            </div>

            <div class="swiper-button-next productImageNext"></div>
            <div class="swiper-button-prev productImagePrev"></div>

            <div class="swiper-pagination productImagePagination"></div>
        </div>
        <div class="productDetails">
            <h1><?= $product['name'] ?></h1>
            <p>
            <?= $product['description'] ?>
            </p>
            <h1><?= $product['price'] ?> Dt</h1>
            <span class="wishedProduct"><i class="far fa-heart"></i>
                <h4>Add to Wishlist</h4>
            </span>
            <span class="shop"><i class="fas fa-shopping-cart"></i>
                <h4>Add to cart</h4>
            </span>

            <span class="shopped"><i class="fas fa-shopping-cart"></i>
                <h4>1</h4>
                <span>
                    <i class="fas fa-plus addCart"></i>
                    <i class="fas fa-minus removeCart"></i>
                </span>
            </span>
        </div>
    </div>
    <div class="sendPost"></div>
    <?php include_once 'assets/scripts.php' ?>
    <?php include_once 'footer.php' ?>
    <script src="js/product.js"></script>
    <script src="js/main.js"></script>

    <script type="js/scrollUpBtn.js"></script>
    <script src="js/testnav.js"></script>
</body>

</html>