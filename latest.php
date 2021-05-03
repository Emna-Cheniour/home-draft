<?php

include_once 'assets/mainHead.php';
if (isset($_POST['sendReview'])) {
    echo $_POST['rating'];
    echo $_POST['reviewComment'];
    $reviewstat = "1";
    $reviewContent = "Votre évaluation est ajoutée avec succès";
}
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
    <div class="addReview">
        <h3>Voici les commentaires de nos clients</h3>
        <h3> Et vous ?</h3>
        <h3>Comment s'est passée votre expérience de shopping de chez nous? </h3>
        <h3 class="btn btn1 openReview">Racontez nous!</h2>
    </div>
    <div class=" addReviewForm">
        <h1 class="closeReview"> &times;</h1>
        <img src="images/reviewForm.png" alt="">
        <h3>Evaluez votre experience de shopping de chez Celiac101</h3>
        <form action="latest.php" method="post">
            <textarea name="reviewComment"></textarea>
            <h3>Nottez la !</h3>
            <div class="heart_section">
                <i id="review1" class="far fa-heart"></i>
                <i id="review2" class="far fa-heart"></i>
                <i id="review3" class="far fa-heart"></i>
                <i id="review4" class="far fa-heart"></i>
                <i id="review5" class="far fa-heart"></i>
            </div>
            <h1 id="reviewRating">?/5</h1>
            <input name="rating" id="stars" type="hidden" value="0">
            <input class="btn btn1 submitReview" name="sendReview" type="submit">
        </form>
    </div>
    <div class="reviewStat" id=<?php if (isset($reviewstat)) {
                                    echo $reviewstat;
                                } ?>></i><?php
                                            if ((isset($reviewstat)) && $reviewstat == 1) {
                                                echo '
        <i class="fas fa-check-circle reviewIcon"> </i>';

                                                echo $reviewContent;
                                            } ?></div>
    <div id="overlayAddReview"></div>
    <div class="shopping">
        <div class="topSearch">
            <form action="latest.php" method="POST">
                <input type="text" placeholder="search for a product..">
                <select name="Trier" id="">
                    <option value="cat">newest</option>
                    <option value="">prix croissant</option>
                    <option value="dog">prix decroissant</option>
                </select>

                <div class="priceScroll"></div>
                <div class="productCategories">
                </div>
            </form>
        </div>
        <div class="shoppingCards"></div>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/shopping.js"></script>
    <script src="js/main.js"></script>
</body>

</html>