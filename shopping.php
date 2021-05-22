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
    <div class="swiper-container shoppingPoster">
        <div class="swiper-wrapper shoppingPosterWrapper">
            <div class="swiper-slide shoppingPosterSlide">
                <div class="leftSlide">
                    <h2>Bienvenue à Celiac101 : The Shop</h2>
                    <h5>Une collection de produits sans gluten variée avec des prix raisonnables. </h5>
                    <button href="#" class="btn btn1 btnServ">Commencez votre shopping</button>
                </div>
                <div class="rightSlide">
                    <img src="images/shopWithUs.png" alt="">
                </div>
            </div>
            <div class="swiper-slide shoppingPosterSlide">
                <div class="leftSlide">
                    <h2>Livraison à domicile</h2>
                    <h5>Celiac101 garantit une livraison rapide , ponctuelle et très satisfaisante. </h5>
                    <button class="btn btn1 btnServ">Commencez votre shopping</button>
                    
                </div>
                <div class="rightSlide">
                    <img src="images/deliveryposter.png" alt="">
                </div>
            </div>
            <div class="swiper-slide shoppingPosterSlide">
                <div class="leftSlide">
                    <h2>Méthodes de Paiement</h2>
                    <h5>Vous pouvez soit payer à la livraison soit payer électroniquement en toute sécurité. </h5>
                    <button class="btn btn1 btnServ">Commencez votre shopping</button>
                </div>
                <div class="rightSlide">
                    <img src="images/electroOuLivraison.png" alt="">
                </div>
            </div>
            <div class="swiper-slide shoppingPosterSlide">
                <div class="leftSlide">
                    <h2>Points de vente</h2>
                    <h5>Trouvez tous nos produits dans les adresses suivantes: </h5>
                    <h6>xxxx</h6>
                    <h6>xxxx</h6>
                    <button class="btn btn1 btnServ">Commencez votre shopping</button>
                </div>
                <div class="rightSlide">
                    <img src="images/pointdevente.png" alt="">
                </div>
            </div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination shoppingPosterPagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next shoppingPosterNext"></div>
        <div class="swiper-button-prev shoppingPosterPrev"></div>
    </div>
    <h2 class="latestTitle">Nouveautés</h2>
    <div class="mainLatest">

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
    <div class="reviewWrapper">
        <div class="addReview">
            <h3>Voici les commentaires de nos clients</h3>
            <h3> Et vous ?</h3>
            <h3>Comment s'est passée votre expérience de shopping de chez nous? </h3>
            <h3 class="btn btn1 openReview">Racontez nous!</h2>
        </div>
        <div class="reviews">
            <div class="swiper-container swiperCommentaires">
                <div class="swiper-wrapper swiperCommentaire">
                    <?php
                    for ($x = 0; $x < 5; $x++) {
                    ?>
                        <div class="swiper-slide swiperCommentaireContent">
                            <div class="review">
                                <img src="images/right-quote.png" class="quote" alt="quote">
                                <input id="reviewNote" type="hidden" value="<?= $x ?>" >
                                <div class="reviewContent">
                                    <div class="reviewNote">
                                        <i class="far fa-heart"></i>
                                        <i class="far fa-heart"></i>
                                        <i class="far fa-heart"></i>
                                        <i class="far fa-heart"></i>
                                        <i class="far fa-heart"></i>
                                    </div>
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
    <div id="startShopping" class="productsss">

        <div class="containerProducts">


            <div class="searchProduct">
                <i class="fas fa-search" id="search__icon"></i>
                <input class="search" placeholder="Rechercher..." type="text">

            </div>
            <div class="productCategories ">
                <div class="productCategory">

                    <h4>Produits</h4>
                    <i id="more" class="fas fa-plus"></i>
                    <div style="clear: both"></div>
                </div>
                <div id="productCategoryOptions" class="productCategoryOptions">

                    <div>
                        <input type="checkbox" name="" id="">
                        <label for="">Biscuits</label>
                    </div>
                    <div>
                        <input type="checkbox" name="" id="">
                        <label for="">Farine</label>
                    </div>
                    <div>
                        <input type="checkbox" name="" id="">
                        <label for="">Pain</label>
                    </div>
                    <div>
                        <input type="checkbox" name="" id="">
                        <label for="">Pâtes</label>
                    </div>
                    <div>
                        <input type="checkbox" name="" id="">
                        <label for="">Cupcake</label>
                    </div>
                </div>
                <div class="ProductPriceRange">
                    <div class="ProductPrice">
                        <h4>Prix</h4>
                        <i id="reset" class="fas fa-redo"></i>
                        <div style="clear: both"></div>
                    </div>
                    <div class="" id="amount">
                        <h3 id="amountmin"> </h3>
                        <h3 id="amountmax"></h3>
                    </div>
                    <div id="slider-range"></div>
                    <input type="hidden" id="min" value="100">
                    <input type="hidden" id="max" value="800">

                </div>

            </div>

        </div>
        <div class="productsResult">
            <div class="trierProduits">
                <h3>Trier par:</h3>
                <select name="" id="">
                    <option value="">Nouveau produits</option>

                    <option value="">Prix Croissant</option>

                    <option value="">Prix Décroissant</option>

                </select>

            </div>

            <div style="clear: both"></div>
            <div class="searchFilters">

            </div>
            <div class="productCards">

            </div>
        </div>

    </div>
    <?php include_once 'assets/scripts.php' ?>
    <script src="js/shopping.js"></script>
</body>

</html>