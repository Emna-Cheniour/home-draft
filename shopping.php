<?php

include_once 'assets/mainHead.php';
?>
<link rel="stylesheet" href="css/shopping.css">
</head>

<body>
    <div class="productsss">

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

                    <input type="text" id="amountmin">
                    <input type="text" id="amountmax">
                    <div id="slider-range"></div>
                    <input type="hidden" id="min" value="100">
                    <input type="hidden" id="max" value="800">

                </div>

            </div>

        </div>
        <div class="productsResult">
            <div class="trierProduits">
                <select name="" id="">
                    <option value="">Nouveau produis</option>

                    <option value="">Prix Croissant</option>

                    <option value="">Prix Décroissant</option>

                </select>
            </div>
            <div class="CardsHere">

            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/shopping.js"></script>
    <script src="js/main.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="rangePrice.js">

    </script>
</body>

</html>