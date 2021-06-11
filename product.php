<?php
include_once 'assets/mainHead.php';
?>
<link rel="stylesheet" href="css/product.css">

</head>

<body>
<?php include_once 'preloader.php' ?>
    <?php include_once 'navbarCo.php' ?>
    <div class="product">
        <div class="swiper-container productImageContainer">
            <div class="swiper-wrapper productImageWrapper">
                <div class="swiper-slide productImageSlide">
                    <div class="productImage">
                        <img src="images/farine shar.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide productImageSlide">
                    <div class="productImage">
                        <img src="images/shar2.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide productImageSlide">
                    <div class="productImage">
                        <img src="images/shar3.png" alt="">
                    </div>
                </div>
            </div>

            <div class="swiper-button-next productImageNext"></div>
            <div class="swiper-button-prev productImagePrev"></div>
            
            <div class="swiper-pagination productImagePagination"></div>
        </div>
        <div class="productDetails">
            <h1>Farine Sans Gluten Mix It Universal – Schar</h1>
            <p>Du pain, des gâteaux, des pâtes ou des biscuits? Mix It! Un vrai polyvalent qui garantit le succès!
            </p>
            <h1>45 Dt</h1>
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
            <span class="donate"><i class="fas fa-hand-holding-heart"></i>
                <h4>Donate</h4>
            </span>

            <span class="donated"><i class="fas fa-hand-holding-heart"></i>
                <h4>1</h4>
                <span>
                    <i class="fas fa-plus addDonation"></i>
                    <i class="fas fa-minus removeDonation"></i>
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