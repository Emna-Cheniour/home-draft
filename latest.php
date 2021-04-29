<?php
include_once 'assets/mainHead.php';

?>
<link rel="stylesheet" href="css/shopping.css">
</head>

<body>
    <?php include_once 'navbarConnecte.php' ?>
    <div class="containerCeliac">
        <div class="mainLatest">

            <h2>Latest Products</h2>
            <div class="cardLatest">
                <div class="circle">
                </div>
                <div class="content">
                    <h2>Pepsi cola</h2>
                    <p>Refrshing SOda from the UK </p>
                </div>
                <img src="images/pepsi.png" alt="">
            </div>
            <div class="cardLatest">
                <div class="circle">
                </div>
                <div class="content">
                    <h2>Pepsi cola</h2>
                    <p>Refrshing SOda from the UK </p>
                </div>
                <img src="images/pepsi.png" alt="">
            </div>
            <div class="cardLatest">
                <div class="circle">
                </div>
                <div class="content">
                    <h2>Pepsi cola</h2>
                    <p>Refrshing SOda from the UK </p>
                </div>
                <img src="images/pepsi.png" alt="">
            </div>
        </div>
        <div class="reviews">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    for ($x = 0; $x < 5; $x++) {
                    ?>
                        <div class="swiper-slide">
                            <div class="review">
                                <img src="images/right-quote.png" class="quote" alt="quote">
                                <div class="reviewContent">
                                    <p>Lorem ipsum dolor sit amet, consesteur de
                                        la meuiileure propagande de la ville de saint
                                        exupery il etait un homme bon mais rien ne
                                        dure il s'est transformé en un vampire.
                                    </p>
                                    <div class="detailsReview">
                                        <div class="imgProfilRviewerBox">
                                            <img src="images/nutritionist.png" alt="">
                                        </div>
                                        <h3>Somemone Someone</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/shopping.js"></script>
</body>

</html>