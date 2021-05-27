<?php 
include_once 'autoload.php';

include_once 'isAuthentificated.php';
include_once 'assets/mainHead.php' ;
include_once 'assets/bootstrapAsset.php'


?>



<body>

<?php 
include_once 'navbarCo.php'?>

<div class="specialist__body">

      
    <ul class="specialist__nav">
     

      <li><a href="#profile" >Profil Médecin</a></li>
      <li><a href="#Apropos">A propos</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#">Retour</a></li>
      
    </ul>

    <div class="specialist__info">

        <div class="field" id="profile">
          <img src="images/nutritionist.png" alt="">
            <h2>Monsieur flen fouleni</h2>
            
            <h4>Réseaux Sociaux</h4>
        </div>

        <div class="field reveal" id="Apropos">
          
          <img src="svg/undraw_medicine_b1ol.svg" alt="">
          <h2>Monsieur flen fouleni</h2>
          <h3>Gastrologue</h3>
          <h4>Adresse: rue123 tunis blablabla cabinet</h4>
        </div>

        <div class="field reveal" id="contact">
          
          <img src="svg/undraw_contact_us_15o2.svg" alt="">
          <h2>Contacter Votre médecin</h2>
          <div class="contact__container">
            <div class="discussion">
                <a href="#"><i class="fas fa-sms"></i>discussion</a>
            </div>
            <div class="contact">
              <a  class="openReview"><i class="fas fa-envelope-open-text"></i>send a message</a>
            </div>
          </div>

          
          
        </div>


        </div>

    

</div>









<?php include_once 'footer.php' ?>
<?php include_once 'assets/scripts.php' ?>

<script src="js/main.js"></script>
<script src="js/specialistIndiv.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>




</body>
<html>
