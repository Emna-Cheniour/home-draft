<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min (1).css">
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>        <!--script pour map-->
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQpw0VdM_Cpj50OfKTRMJbP1SK7wzYcAE&callback=initMap"
            type="text/javascript"></script>
            <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    </script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" href="css/map.css">
    <link rel="stylesheet" href="css/resto.css">
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

    <title>Celiac101</title>
   
</head>

<body>
    <?php include("navbarCo.php"); ?>
    <div class="services">
        <h1 class="c4">Les Restaurants Coeliaques</h1>
        <br>
        <br>
        <div class="serviceRow row">
            <div class="service col4">
                <img src="images/T.jpg" class="service__img">
                <h2 class="fbpage"><a href="https://www.facebook.com/celiacsafesansgluten/" target="_blank">Celiac Safe</a></h2>
                <p>Address: 4 Reu de Moscou, Tunis 1089<br>
                    Hours: Closed ⋅ Opens 12PM<br>
                    Phone: 24 101 401<br> 
                    <button class="card__btn" id="mybtn1"><a href="#Local"> Location</a></button>
                </p>
                
            </div>
            <div class="service col4">
                <img src="images/T2.jpg" class="service__img">
                <h2 class="fbpage"><a href="https://www.facebook.com/laseine.tn/" target="_blank">La Seine Pâtisserie</a></h2>
                <p>Address: 2 Rue Tahar Memmi, Ariana 2091<br>
                    Hours: Closed ⋅ Opens 8AM<br>
                    Phone: 52 516 415 <br>
                    <button class="card__btn" id="mybtn3"><a href="#Local"> Location</a></button>
                </p>
               
            </div>
            <div class="service col4">
                <img src="images/T3.jpg" class="service__img">
                <h2 class="fbpage"><a href="https://www.facebook.com/Romanescatunis" target="_blank">Restaurant La Romanesca</a></h2>
                <p> Address: Ariana<br>
                    Hours: Closed ⋅ Opens 12PM<br>
                    Phone: 71 753 241 <br>
                    <button class="card__btn" id="mybtn2"><a href="#Local"> Location</a></button>
                </p>
               
            </div>
            <div class="service col4">
                <img src="images/T4.jpg" class="service__img">
                <h2 class="fbpage"><a href="https://www.facebook.com/ilVongole/?ref=page_internal" target="_blank">il Vongole</a></h2>
                <p>Address: Rue des Lac de Mazurie, Les Berges Du Lac, Tunis 1053<br>
                
                    Phone: 71 960 207 <br>
                    <button class="card__btn" id="mybtn4"><a href="#Local"> Location</a></button>
                </p>
                
            </div>
            <div class="service col4">
                <img src="images/T5.jpg" class="service__img">
                <h2 class="fbpage"><a href="https://www.facebook.com/breizhbistrottunisie/" target="_blank">Breizh Bistrot</a></h2>
                <p>Address: Passage du la Malawi, Tunis<br>
                    Hours: Closed ⋅ Opens 11AM<br>
                    Phone: 71 960 155 <br>
                    <button class="card__btn" id="mybtn5"><a href="#Local"> Location</a></button>
                </p>        
            </div>
            <div class="service col4">
                <img src="images/T6.jpg" class="service__img">
                <h2 class="fbpage"><a href="https://www.facebook.com/lasuitedufarfalle/" target="_blank">Le Farfalle</a></h2>
                <p>Address: Rue du Lac Biwa, Tunis 1053<br>
                    Hours: Closed ⋅ Opens 12PM<br>
                    Phone: 71 960 128 <br>
                    <button class="card__btn" id="mybtn6"><a href="#Local"> Location</a></button>
                </p>
                
            </div>
        </div>
    </div>
    <br>
    <center><h3 id="Local">Localisations Des Restaurants</h3></center>
    <br>
    <!--The div element for the map -->
    <div id="map"></div>

    <?php include("footer.php"); ?>

    <script src="Js/map.js"></script>
    <script src="Js/main.js"></script>
    
    <?php include_once 'assets/scripts.php' ?>
</body>

</html>