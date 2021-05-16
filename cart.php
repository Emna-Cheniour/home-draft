<?php
include_once 'assets/mainHead.php';
?>
<link rel="stylesheet" href="css/cart.css">
</head>

<body>
    <?php include_once 'navbarConnecte.php' ?>
    <div class="wrapp">
        <div class="navbarCart">
            <div class="navbarCartElementWrapper active">
                <div class="navbarCartElement ">
                    <i class="fas fa-shopping-cart "></i>
                    <h5>Cart</h5>
                </div>
                <div class="arrow-right"></div>
            </div>
            <div class="navbarCartElementWrapper">
                <div class="navbarCartElement">
                    <i class="fas fa-hand-holding-heart"></i>
                    <h5>Donations</h5>
                </div>
                <div class="arrow-right"></div>
            </div>
            <div class="navbarCartElementWrapper">
                <div class="navbarCartElement">
                    <i class="fas fa-heart"></i>
                    <h5>Wishlist</h5>
                </div>
                <div class="arrow-right"></div>
            </div>
            <div class="navbarCartElementWrapper">
                <div class="navbarCartElement">
                    <i class="fas fa-shipping-fast"></i>
                    <h5>Orders</h5>
                </div>
                <div class="arrow-right"></div>
            </div>
        </div>
        <div>hi</div>
    </div>

    <?php include_once 'assets/scripts.php' ?>
    <?php include_once 'footer.php' ?>
    <script src="js/cart.js"></script>
</body>

</html>