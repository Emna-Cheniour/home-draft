<?php 
include_once 'autoload.php';


include_once 'assets/mainHead.php' ;
include_once 'assets/bootstrapAsset.php';
include_once 'autoload.php';

$specialistRepo=new SpecialistRepository();
$specialistId=$_GET['id'];
$specialist=$specialistRepo->findBy($specialistId);



?>



<body>


<?php include_once 'preloader.php' ?>

<?php 
include_once 'navbarCo.php'?>

<div class="specialist__body">

      
    <ul class="specialist__nav">
     

      <li><a href="#profile" >Profil Médecin</a></li>
      <li><a href="#Apropos">A propos</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="specialistGroup.php">Retour</a></li>
      
    </ul>

    <div class="specialist__info">

        <div class="field" id="profile">
          <img src="images/nutritionist.png" alt="">
            <h2><?php echo $specialist['lastName'] .''. $specialist['firstName'] ?></h2>
            
            <h4>Réseaux Sociaux</h4>
        </div>

        <div class="field reveal" id="Apropos">
          
          <img src="svg/undraw_medicine_b1ol.svg" alt="">
          <h2><?php echo $specialist['description'] ?></h2>
          <h3><?php echo $specialist['profession'] ?></h3>
          <h4><?php echo $specialist['address'] ?></h4>
        </div>

        <div class="field reveal" id="contact">
          
          <img src="svg/undraw_contact_us_15o2.svg" alt="">
          <h2>Contacter Votre médecin</h2>
          <div class="contact__container">
            <div class="discussion">
                <a href="#"><i class="fas fa-sms"></i><?php echo $specialist['email'] ?></a>
            </div>
            <div class="discussion">
                <a href="#"><i class="fas fa-sms"></i><?php echo $specialist['phoneNumber'] ?></a>
            </div>
          </div>

          
          
        </div>


        </div>

    

</div>









<?php include_once 'footer.php' ?>

<script src="js/specialistIndiv.js"></script>

<script src="js/main.js"></script>
   
    <script type="js/scrollUpBtn.js"></script>
    <script src="js/testnav.js"></script>
<script src="js/specialistIndiv.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>




</body>
<html>
