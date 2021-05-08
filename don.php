<?php include_once 'head.php'?>
<body>
<?php include_once 'navbarConnecte.php'?>

<div class="contenu">

        <div class="container__don counter-section">

          <div class="row text-center">
            <div class="col-md-4 counter-box">
                <div class="iconbox"><i class="fas fa-piggy-bank"></i></div>
                <p class="counter">10000</p><p>Dt/an</p>
                <p> Don d'argent</p>
            </div>

            <div class="col-md-4 counter-box">
                <div class="iconbox"><i class="fas fa-shopping-basket"></i></div>
                <p class="counter">300</p><p>/mois</p>
                <p>Biens matériels</p>
                <p></p>
            </div>

            <div class="col-md-4 counter-box">
                <div class="iconbox"><i class="fas fa-users"></i></div>
                <p class="counter">1000</p>
                <p>/an</p>
                <p>Donétaires</p>
                <p></p>
            </div>

         </div>

        </div>


        <div class="introDon">
            <p>Vivre sans gluten est onéreux !</p><p> Les produits sans gluten coûtent trop cher pour plusieurs malades.</p>
                <p>Suivre une diète et un régime avec ses produits devient difficile à cause des problèmes financiers.</p>
                <p>Un petit geste de générosité pour ne pas risquer la santé d'une grande majorité</p>
            <p>Celiac101 vous offre la possibilité d'aider ceux qui en ont vraiment besoin. Un don = une vie.</p>
            <p>Faites votre don (d'argent ou de produits) et sauvez une vie!</p>
        </div>

        <div class="formContent">
            <div class="container-Don">
                <div class="donArg">Don d'argents<i class="fas fa-donate"></i></div>
                <div class="donProd">Don de produits<i class="fas fa-shopping-cart"></i></div>
            </div>

            <div class="contenuForm">
                <form class="formDon">
                    </br>
                    <div class="titleForm"><img id="imageDonate" src="icons/donate.png">Faire un Don</div>
                    </br>
                    <table class="Form">
                        <tr>
                        <td>
                            <h4>Nom :</h4>
                            <div class="input-icon">
                            <i id="iconForm" class="fas fa-user"></i>
                            <input class="inputForm" type="text" placeholder="Nom" required>
                            </div>
                        </td>
                        <td>
                            <h4>Prenom :</h4>
                            <div class="input-icon">
                            <i id="iconForm" class="fas fa-user"></i>
                            <input class="inputForm" type="text" placeholder="Prenom" required>
                            </div>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <h4>Email :</h4>
                            <div class="input-icon">
                            <i id="iconForm" class="fas fa-at"></i>
                            <input class="inputForm" type="email" placeholder="foulen@gmail.com" required>
                            </div>
                        </td>
                        <td>
                            <h4>Date de naissance :</h4>
                            <div class="input-icon">
                            <i id="iconForm" class="fas fa-calendar-day"></i>
                            <input class="inputForm" type="date" required></div>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <h4>Numéro de téléphone :</h4>
                            <div class="input-icon">
                            <i class="bi bi-telephone-fill"></i>
                            <input class="inputForm" type="tel" placeholder="Numéro de téléphone"></div>
                        </td>
                        <td>
                            <h4>Ville :</h4>
                            <div class="input-icon">
                            <i id="iconForm" class="fas fa-city"></i>
                            <input class="inputForm" type="text" name="Ville" placeholder="Ville"></div>
                        </td>
                        </tr>
                        <tr>
                        <td colspan="2">
                        <h4>Montant de Don :</h4>
                            <div class="input-icon">
                            <i id="iconForm" class="fas fa-hand-holding-usd"></i>
                            <input class="inputForm" type="number" min="10" required>DT</div>
                        </td>
                        </tr>
                        <tr>
                        <td colspan="2">
                            <h4>Mode de paiement :</h4>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <input class="inputPay" type="radio" name="carte" value="CIB"><label for="CIB" checked> CIB <i id="methPay" class="far fa-credit-card"></i></label>&emsp;&emsp;&emsp;
                            <input class="inputPay" type="radio" name="carte" value="MasterCard"><label for="MasterCard"> MasterCard <i id="methPay" class="fab fa-cc-mastercard"></i></label>
                            </td>
                            <td>
                            <input class="inputPay" type="radio" name="carte" value="Visa"><label for="Visa">Visa <i id="methPay" class="fab fa-cc-visa"></i></label>
                        </td>
                        </tr>
                        <tr>
                        <td colspan="2">
                            <h4>Carte crédit :</h4>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <label>Numéro de Carte : </label><input class="inputForm2" type="tel" name="Numéro de Carte" placeholder="Numéro de Carte" required>
                        </td>
                        <td>
                            <label>Code de sécurité : </label><input class="inputForm2" type="password" name="Code de sécurité" placeholder="Code de sécurité" maxlength="4" required>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <label>Mois d'expiration : </label><input class="inputForm2" type="month" name="mois d'expiration" placeholder="mois d'expiration" required>
                        </td>
                        <td>
                            <label>Année d'expiration : </label><input class="inputForm2" type="number" min="2021" name="année d'expiration" placeholder="Année d'expiration" required>
                        </td>
                        </tr>
                    </table>
                    
                    <button type="submit" id="submitForm" class="btn btn3 don" name="submitForm">Faire un Don</button>
                </form>
            </div>

        </div>

            <div class="contenuForm2">
                <form class="formPay">
                    <h1>
                        Veuillez remplir votre Panier de Don
                    </h1>
                    <h3>
                        Vous pouvez consultez notre catalogue pour choisir les produits et les mettre dans votre panier de Don, comme vous pouvez payer directement.
                    </h3>
                    <div>
                    <img src="images/fooddonation.png"></div>
                    <span><button type="button" class="btn btn3 don" name="revenirCat">Revenier au catalogue</button>
                    <button type="submit" class="btn btn3 don" name="submitPay">Payer maintenant</button></span>
                </form>

            </div>
</div>
    <?php include_once 'footer.php' ?>
    <script src="js/main.js"></script>
    <script src="Js/don.js"></script>
    <script src="jquery.counterup.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script>
        jQuery(document).ready(function( $ )
        {
            $('.counter').counterUp({
            delay: 10,
            time: 1000
            });
        })
    </script> 
</body>
</html>