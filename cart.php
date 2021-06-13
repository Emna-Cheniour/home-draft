<?php
session_start();
include_once 'assets/mainHead.php';
include_once 'autoload.php';
$display="cart";
$cartIsEmpty = 0;
$wishProductRep = new WishProductRepository();
$productRep = new ProductRepository();
if (isset($_POST['removeWished'])) {
    $display="wishlist";
    $removedId = $_POST['productRemoved'];
    $wishProductRep->deleteTwo('productId',$removedId,'userId',$_SESSION['user']);
}
?>
<link rel="stylesheet" href="css/cart.css">

</head>

<body>


    <?php include_once 'navbarCo.php' ?>
    <div class="wrapp">
        <div class="navbarCart">
            <div id="cart" class="navbarCartElementWrapper <?php if($display=='cart'){echo 'active';}?>">
                <div class="navbarCartElement ">
                    <i class="fas fa-shopping-cart "></i>
                    <h5>Panier</h5>
                </div>
                <div class="arrow-right"></div>
            </div>
            <div id="catalogue" class="navbarCartElementWrapper">
                <a href="shopping.php" class="navbarCartElement">
                    <i class="fas fa-book-open"></i>
                    <h5>Catalogue</h5>
                </a>
                <div class="arrow-right"></div>
            </div>

            <div id="wishlist" class="navbarCartElementWrapper <?php if($display=='wishlist'){echo 'active';}?>">
                <div class="navbarCartElement">
                    <i class="fas fa-heart"></i>
                    <h5>Wishlist</h5>
                </div>
                <div class="arrow-right"></div>
            </div>
            <div id="order" class="navbarCartElementWrapper <?php if($display=='order'){echo 'active';}?>">
                <div class="navbarCartElement">
                    <i class="fas fa-shipping-fast"></i>
                    <h5>Orders</h5>
                </div>
                <div class="arrow-right"></div>
            </div>


        </div>
        <div class="cart" style="display:<?php if($display=='cart'){echo 'block';} else {echo 'none';}?>">
            <?php if ($cartIsEmpty) { ?>
                <div class="panierVide">

                    <div class="load">
                        <i class="fas fa-shopping-cart "></i>
                        <i class="fas fa-shopping-cart "></i>
                        <i class="fas fa-shopping-cart "></i>
                        <i class="fas fa-shopping-cart "></i>
                    </div>
                    <div>
                        <h2 id="visiterCatalogue">Votre panier est vide ... Revenez au catalogue et remplissez le !</h2>
                    </div>
                </div>
            <?php } else { ?>
                <div class="cartElements">
                    <div class="cartElementWrapper">
                        <div class="cartElement">
                            <div class="info">
                                <h6>12345 -</h6>
                                <h4>Farine schar</h4>
                                <div class="details">
                                    <h6>Prix : 5</h6>
                                    <h6>Quantité : 3</h6>
                                    <h6>Total : 15</h6>
                                </div>
                            </div>
                            <div class="gestion">
                                <span>
                                    <i class="fas fa-eye"></i>
                                </span>
                                <span class="shopped">
                                    <i class="fas fa-shopping-cart"></i>
                                    <h4>1</h4>
                                    <span>
                                        <i class="fas fa-plus addCart"></i>
                                        <i class="fas fa-minus removeCart"></i>
                                    </span>
                                </span>
                                <span>
                                    <i class="removeElement fas fa-times-circle"></i>
                                </span>
                            </div>
                        </div>
                        <div class="details">
                            <h6>Prix : 5</h6>
                            <h6>Quantité : 3</h6>
                            <h6>Total : 15</h6>
                        </div>
                    </div>
                    <div class="cartElementWrapper">
                        <div class="cartElement">
                            <div class="info">
                                <h6>12345 -</h6>
                                <h4>Farine schar</h4>
                                <div class="details">
                                    <h6>Prix : 5</h6>
                                    <h6>Quantité : 3</h6>
                                    <h6>Total : 15</h6>
                                </div>
                            </div>
                            <div class="gestion">
                                <span>
                                    <i class="fas fa-eye"></i>
                                </span>
                                <span class="shopped">
                                    <i class="fas fa-shopping-cart"></i>
                                    <h4>1</h4>
                                    <span>
                                        <i class="fas fa-plus addCart"></i>
                                        <i class="fas fa-minus removeCart"></i>
                                    </span>
                                </span>
                                <span>
                                    <i class="removeElement fas fa-times-circle"></i>
                                </span>
                            </div>
                        </div>
                        <div class="details">
                            <h6>Prix : 5</h6>
                            <h6>Quantité : 3</h6>
                            <h6>Total : 15</h6>
                        </div>
                    </div>
                    <div class="cartElementWrapper">

                        <div class="cartElement">
                            <div class="info">
                                <h6>12345 -</h6>
                                <h4>Farine schar</h4>
                                <div class="details">
                                    <h6>Prix : 5</h6>
                                    <h6>Quantité : 3</h6>
                                    <h6>Total : 15</h6>
                                </div>
                            </div>
                            <div class="gestion">
                                <span>
                                    <i class="fas fa-eye"></i>
                                </span>
                                <span class="shopped">
                                    <i class="fas fa-shopping-cart"></i>
                                    <h4>1</h4>
                                    <span>
                                        <i class="fas fa-plus addCart"></i>
                                        <i class="fas fa-minus removeCart"></i>
                                    </span>
                                </span>
                                <span>
                                    <i class="removeElement fas fa-times-circle"></i>
                                </span>
                            </div>
                        </div>
                        <div class="details">
                            <h6>Prix : 5</h6>
                            <h6>Quantité : 3</h6>
                            <h6>Total : 15</h6>
                        </div>
                    </div>
                    <div class="total">
                        <img src="images/totalCart.jpg" alt="">
                        <span>Total:</span>
                        <span>15.00 Dt</span>
                    </div>
                    <div class="tel">
                        <img src="images/telCart.png" alt="">
                        <span>Telephone: </span>
                        <input type="text" value="97782808">
                    </div>
                    <div class="adresse">
                        <img src="images/adresseCart.png" alt="">
                        <span>Adresse: </span>
                        <span id="locAddress">73 rue du Général Ailleret
                        </span>
                        <button id="changeLocation" class="btn btn3">Changer Adresse</button>
                        <!-- if has adress in profile show it as default-->

                        <!-- if not
                        <button class="btn btn3">Add Location</button>
                        -->

                    </div>

                    <div class="confirm">
                        <input id="confirmCart" type="submit" value="Valider mes achats">
                    </div>
                </div>

                <div class=" locationPopUp">
                    <h1 class="closeLocationPopUp"> &times;</h1>
                    <span>Veuillez choisir une adresse </span>
                    <div id="mapAddress">
                    </div>
                    <div class="saveAdress">
                        <label for="saveAdrs">Ajouter cette adresse à mes adresses</label>
                        <input id="saveAdrs" type="checkbox">
                    </div>
                    <button class="btn btn3 " id="mybutton1">Confirmer</button>
                </div>
                <div class="paymentPopUp ">
                    <h1 class="closePaymentPopUp"> &times;</h1>
                    <div class="payElements">
                        <div class="payElement">
                            <div class="infoElement">
                                <h6>12345 -</h6>
                                <h4>Farine schar</h4>
                            </div>
                            <div class="detailsElement">
                                <h6>Prix : 5</h6>
                                <h6>Quantité : 3</h6>
                                <h6>Total : 15</h6>
                            </div>
                        </div>
                        <div class="payElement">
                            <div class="infoElement">
                                <h6>12345 -</h6>
                                <h4>Farine schar</h4>
                            </div>
                            <div class="detailsElement">
                                <h6>Prix : 5</h6>
                                <h6>Quantité : 3</h6>
                                <h6>Total : 15</h6>
                            </div>
                        </div>
                        <div class="payElement">
                            <div class="infoElement">
                                <h6>12345 -</h6>
                                <h4>Farine schar</h4>
                            </div>
                            <div class="detailsElement">
                                <h6>Prix : 5</h6>
                                <h6>Quantité : 3</h6>
                                <h6>Total : 15</h6>
                            </div>
                        </div>
                        <div class="payElement">
                            <div class="infoElement">
                                <h6>12345 -</h6>
                                <h4>Farine schar</h4>
                            </div>
                            <div class="detailsElement">
                                <h6>Prix : 5</h6>
                                <h6>Quantité : 3</h6>
                                <h6>Total : 15</h6>
                            </div>
                        </div>
                    </div>
                    <div class="paymentInfo">
                        <div class="paymentTotal">
                            <img src="images/totalCart.jpg" alt="">
                            <span>Total:</span>
                            <span>15.00 Dt</span>
                        </div>

                        <div class="paymentAdress">
                            <img src="images/adresseCart.png" alt="">
                            <span>Adresse: </span>
                            <span>73 rue du Général Ailleret </span>
                        </div>
                        <div class="paymentTel">
                            <img src="images/telCart.png" alt="">
                            <span>Téléphone: </span>
                            <span>97 782 808 </span>
                        </div>

                        <div class="paymentDelivery">
                            <img src="images/deliveryCart.png" alt="">
                            <span>La livraison sera dans 48 heures :</span>
                            <span>12-12-2021 </span>
                        </div>
                    </div>
                    <div class="payment">

                        <form action="checkout-charge.php" method="post">

                            <input type="hidden" name="amount" value="15">
                            <input type="hidden" name="phoneNumber" value="98652478">
                            <input type="hidden" name="address" value="ariana">

                            <input class="pay" name="livraison" type="submit" value="Payer à la livraison">
                            <input class="pay" name="online" type="submit" value="Payer maintenant">




                            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="pk_test_51J1SzJE3gsjF0BrLVeytp4haD9b0CDM5IbkhmTDnCVDYrNekt7CXbwdjdgheujajglAOcMr4Y0lMX3j08b2RbXv400PpkHkqjz" data-currency="inr" data-locale="auto">
                            </script>

                        </form>







                    </div>
                </div>
            <?php } ?>

            <div id="overlayCart" class=""></div>
            <div class="sendPost"></div>
        </div>
        <div class="wishlist" style="display:<?php if($display=='wishlist'){echo 'block';} else {echo 'none';}?>">
            <?php
            $wishes = $wishProductRep->findBy(array('userId' => $_SESSION['user']));
            foreach ($wishes as $wish) {
                $wishedProduct = $productRep->findOneBy(array('id' => $wish['productId']));
            ?>
                <div class="cartElements">
                    <div class="cartElementWrapper">
                        <div class="cartElement">
                            <div class="info">
                                <h4><?= $wishedProduct['name'] ?></h4>
                                <div class="details">
                                    <h6>Prix : <?= $wishedProduct['price'] ?></h6>
                                </div>
                            </div>
                            <div class="gestion">
                                <span>
                                    <a href="product.php?view=<?= $wishedProduct['id'] ?>"><i class="fas fa-eye"></i></a>
                                </span>

                                <span>
                                    <form action="cart.php" method="post">
                                        <input type="hidden" name="productRemoved" value="<?= $wishedProduct['id'] ?>">
                                        <button type="submit" name="removeWished" class="btn btn2">
                                            <i class="removeElement fas fa-times-circle"></i>
                                        </button>
                                    </form>
                                </span>
                            </div>
                        </div>

                    </div>


                </div>
            <?php
            }
            ?>


        </div>
        <div class="order" style="display:<?php if($display=='cart'){echo 'block';} else {echo 'none';}?>"></div>
    </div>





    <!-- <div class="orders">
            <div class="payElement">
                <div class="infoElement">
                    <h6>12345 -</h6>
                    <h4>Farine schar</h4>
                </div>
                <div class="detailsElement">
                    <h6>Prix : 5</h6>
                    <h6>Quantité : 3</h6>
                    <h6>Total : 15</h6>
                </div>
            </div>
        </div>
    </div>-->
    <?php include_once 'assets/scripts.php' ?>
    <?php include_once 'footer.php' ?>

    <script src="js/main.js"></script>
    <script src="js/txtRotation.js"></script>
    <script type="js/scrollUpBtn.js"></script>
    <script src="js/testnav.js"></script>
    <!--script pour map-->


    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQpw0VdM_Cpj50OfKTRMJbP1SK7wzYcAE&callback=initMap" type="text/javascript"></script>
    <script src="js/cart.js"></script>

    <script src="testnav.js"></script>

</body>

</html>