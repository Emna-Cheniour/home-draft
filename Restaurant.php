<?php 
include_once 'assets/mainHead.php';
include_once 'autoload.php';




?>
<link rel="stylesheet" href="css/resto.css">
<link rel="stylesheet" href="css/map.css">

<body>
    <?php include_once 'preloader.php' ?>
    <?php include "navbarCo.php" ?>
    <div class="container_resto">
    <div class="services">
        <h1 class="c4 faded">Les Restaurants Coeliaques</h1>
        <br>
        <br>
        <div class="serviceRow row">
        <?php 
         $restoRepo=new RestaurantRepository();
         $restaurants=$restoRepo->findAll();

        foreach($restaurants as $resto){?>
            <div class="service col4">
                <img src="<?php echo "data:image/jpeg;base64,".base64_encode($resto['image'])."" ?>" class="service__img">
                <h2 class="fbpage"><a href="<?php echo $resto['fbPage']?>" target="_blank"><?php echo $resto['name']?></a></h2>
                <p>Adresse: <?php echo $resto['address']?><br>
                    
                    Phone: <?php echo $resto['phone']?><br>
                    <button class="btn btn4" id="mybtn1"><a href="#Local"> Location</a></button>
                </p>

            </div>
        <?php } ?>
            
        </div>
    </div>
    </div>
    <div id="Local"></div>
    <br>
    <br>
    <div id="effect" class="wavy restolocation">
        <span style="--i:1;">L</span>
        <span style="--i:2;">O</span>
        <span style="--i:3;">C</span>
        <span style="--i:4;">A</span>
        <span style="--i:5;">L</span>
        <span style="--i:6;">I</span>
        <span style="--i:7;">S</span>
        <span style="--i:8;">A</span>
        <span style="--i:9;">S</span>
        <span style="--i:10;">I</span>
        <span style="--i:11;">O</span>
        <span style="--i:12;">N</span>
        <span style="--i:13;"> </span>
        <span style="--i:14;"> </span>
        <span style="--i:15;">D</span>
        <span style="--i:16;">U</span>
        <span style="--i:17;"> </span>
        <span style="--i:18;"> </span>
        <span style="--i:19;">R</span>
        <span style="--i:20;">E</span>
        <span style="--i:21;">S</span>
        <span style="--i:22;">T</span>
        <span style="--i:23;">A</span>
        <span style="--i:24;">U</span>
        <span style="--i:25;">R</span>
        <span style="--i:26;">A</span>
        <span style="--i:27;">N</span>
        <span style="--i:28;">T</span>
      </div>
    <!--The div element for the map -->
    <div id="map"></div>

    <?php include("footer.php"); ?>
 <!--script pour map-->
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQpw0VdM_Cpj50OfKTRMJbP1SK7wzYcAE&callback=initMap" type="text/javascript">
    </script>
    <script src="Js/map.js"></script>
    <script src="js/testnav.js"></script>

    

</body>

</html>