<?php
include_once 'assets/mainHead.php';
?>
<link rel="stylesheet" href="css/product.css">

</head>

<body>
    <?php include_once 'navbarConnecte.php' ?>
    <div class="product">
        <div class="productImage">
            <img src="images/farine shar.png" alt="">
        </div>
        <div class="productDetails">
            <h1>Farine Sans Gluten Mix It Universal – Schar</h1>
            <p>Du pain, des gâteaux, des pâtes ou des biscuits? Mix It! Un vrai polyvalent qui garantit le succès!
            </p>
            <h1>45 Dt</h1>
            <span><i class="fas fa-heart"></i>Wishlist</span>
            <span><i class="fas fa-shopping-cart"></i>Add to cart</span>

            <span class="shopped"><i class="fas fa-shopping-cart"></i>1
                <span>
                    <i class="fas fa-plus addCart"></i>
                    <i class="fas fa-minus removeCart"></i>
                </span>
            </span>
            <span><i class="fas fa-hand-holding-heart"></i>Donate</span>
        </div>
    </div>

    <?php include_once 'footer.php' ?>
    <script src="js/product.js"></script>
    <script src="js/main.js"></script>
</body>

</html>