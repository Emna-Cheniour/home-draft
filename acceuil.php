<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min (1).css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

    <title>Celiac101</title>
</head>

<body>
    <?php include("navbarConnecte.php"); ?>
    <div class="row poster">
        <div class="col8 posterDetails">
            <h2 class="c4">Celiac101</h2>
            <p> Votre meilleur guide pour vivre avec la maladie coeliaque </p>
            <p>Celiac 101 vous offre un ensemble de service qui facilitent votre quotidient et vous aident à vous adapter au régime alimentaire sans gluten
            </p>
            <p>Bienvenu au premier site web d'origine tunisienne pour les malades coeliaques. </p>
        </div>
        <div class="col4 pimg"><img class="posterImg" src="images/poster picture.png" alt=""></div>
    </div>
    <div class="services">
        <h1 class="c4">Services</h1>
        <div class="serviceRow row">
            <div class="service col4">
                <img src="images/panier.png">
                <h2>Vente des produits</h2>
                <p>Nous offrons un catalogue contenant une grande varieté des produits sans gluten.
                    <br>
                    Visitez notre catalogue et jouissez de la qualité au meilleur prix.
                </p>
                <div class="services__btn"><button class="btn btn-primary">Catalogue</button></div>
            </div>
            <div class="service col4">
                <img src="images/recette.png">
                <h2>Recettes</h2>
                <p>Cuisiner sans gluten est l'une des tâches les plus délicates en cuisine.
                    <br>
                    Pour ceci, Celiac101 vous offre des recettes testées et leurs démarches simplifiées.
                </p>
                <div class="services__btn"><button class="btn btn-primary">Recettes</button></div>
            </div>
            <div class="service col4">
                <img src="images/aliment.png">
                <h2>Journal Alimentaire</h2>
                <p>Toujours incertain entre aliments interdits et aliments sans gluten?
                    <br>
                    Notre journal des aliments omettera toute incertitude !
                </p>
                <div class="services__btn"><button class="btn btn-primary">Journal</button></div>
            </div>
            <div class="service col4">
                <img src="images/resto.png">
                <h2>Carte</h2>
                <p>Celiac101 offre une carte speciale coeliaques !
                    <br>
                    Decouvrez les localisations des restaurants en Tunisie avec des repas sans gluten et plus.
                </p>
                <div class="services__btn"><button class="btn btn-primary">Carte</button></div>
            </div>
            <div class="service col4">
                <img src="images/faq.png">
                <h2>FAQs</h2>
                <p>Les questions les plus posées par et aux les coeliaques.
                    <br>
                    Découvrez maintenant leurs réponses correctes, faciles à comprendre et brèves !
                </p>
                <div class="services__btn"><button class="btn btn-primary">FAQ</button></div>
            </div>
            <div class="service col4">
                <img src="images/nutritionist.png">
                <h2>Spécialistes</h2>
                <p>Plusieurs medecins et specialistes sont là pour vous !
                    <br>
                    Vous pouvez les contacter et demander leurs conseils.
                </p>
                <div class="services__btn"><button class=" btn btn-primary">Contacter</button></div>
            </div>
        </div>
    </div>
    <div class="row donation">
        <div class="col9">
            <h2 class="c4">Faites un don !</h2>
            <p>Vivre sans gluten est couteux voire irréalisable pour certains malades.</p>
            <p> Faites un dons monétaire ou de produits et sauvez leurs vies!</p>

            <button class="button  btn btn-primary">Aidez d'autres!</button>
        </div>
        <div class="col3">
            <img class="imgDon" src="images/dons.png" alt="dons">
        </div>
    </div>
    <div class="row quizz">

        <div class="col3 web">
            <img class="imgDon" src="images/quizz.png" alt="dons">
        </div>
        <div class="col9">
            <h2 class="c4">Prenez notre quizz!<h2>
                    <p>Vous avez quelques symptomes de la maladie coeliaque?</p>
                    <p> Prenez un quizz réalisé par des spécialites pour le meilleur conseil!</p>
                    <button class="button btn btn-primary">Quizz</button>
        </div>
        <div class="col3 phone">
            <img class="imgDon" src="images/quizz.png" alt="dons">
        </div>
    </div>

    <?php include("footer.php"); ?>


    <script src="js/main.js"></script>

</body>

</html>