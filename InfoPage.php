<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/testInfo.css">
  <link rel="stylesheet" href="css/buttons.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <title>Maladie Coeliaque</title>
</head>

<body>

<?php include_once 'navbarConnecte.php'?>


<div class="container">



<div class="rotate__logo">
  <h2 class="text">CELIAC101 Votre Guide</h2>
</div>

  <div class="info__container">
    <div class="intro__wrapper">

      <div class="intro__header">
        <h2>Tout ce qu'il faut savoir sur la maladie coeliaque</h2>
      </div>

      <div class="intro__phrase">
        La maladie cœliaque est une maladie chronique et auto-immune qui se développe chez les personnes génétiquement prédisposées. L’ingestion d’aliments contenant du gluten par un individu cœliaque provoque une réponse anormale et disproportionnée de son système immunitaire.
      </div>

      <div class="quizzBtn">
        <a href="#">Vous avez quelques symptomes de la maladie coeliaque? Prenez notre Quizz<i class="fas fa-arrow-alt-circle-right"></i></a>
      </div>

      <div class="intro__parag">
        <div class="item">
          <p>Dans des conditions normales, les mécanismes de défense de l’organisme sont capables de reconnaître leurs propres tissus et molécules. Cependant, il arrive que le système immunitaire perde sa capacité de distinguer le soi (ami) du non-soi (ennemi). Dans de tels cas, les globules blancs envoyés par notre système immunitaire dans le but d’éliminer les agents considérés étrangers se défendent également contre les tissus propres à l’individu.</p>
        
          <img src="icons/info3.jpg" alt="">
        </div>

        <div class="item">
        <img src="icons/info4.jpg" alt="">
          <p>C’est ce qui se produit chez les personnes cœliaques. Le corps se défend contre le gluten et cette réaction entraîne une inflammation de la paroi intestinale causant ainsi des lésions à divers degrés. Les villosités intestinales, des structures ressemblant à des doigts, deviennent atrophiées (endommagées) et immatures. En conséquence, elles ne possèdent plus toutes les qualités requises pour absorber efficacement les éléments nutritifs provenant des aliments digérés.
        </p>
        
        </div>
        
        
      </div>

      <div class="intro__final--phrase">
        <p>La maladie cœliaque touche les personnes de tous âges, les enfants comme les adultes. Lorsqu’une personne est atteinte de la maladie coeliaque, le risque pour les autres membres de sa famille au premier degré (parents, enfants, fratrie) d’en souffrir également est estimé entre 4 et 16%.<br><br>Par ailleurs, la maladie cœliaque est plus fréquente chez les patients atteints de diabète de type I, de maladies thyroïdiennes auto-immunes, d’arthrite rhumatoïde juvénile ainsi que de maladies auto-immunes du foie.
        </p>

      </div>

      <div class="scrollDown">
          <div class="chevron"></div>
          <div class="chevron"></div>
          <div class="chevron"></div>
          <a href="#statistic" class="text">Pour plus de détails</a>
        
        </div>

      


      
    </div>
  </div>

 

    <div class="info__parag">
        <p>Pensez-vous  être dans le risque de la maladie coeliaque? <br>

      <a href="#symptomes">Consulter les symptomes<i class="fas fa-arrow-alt-circle-right"></i></a>
        </p>
    </div>

 


      <div id="statistic" class="card__container">

          <div class="info__card">
            <div class="circle">
              <h2>1 sur 100</h2>
            </div>
            <div class="content">
              <p>Nombre de personnes dans le monde touchées par la maladie coeliaque.</p>
              <img src="icons/increasing-bar-graph.png" alt="">
            </div>
          </div>

          <div class="info__card">
            <div class="circle">
              <h2>30%</h2>
            </div>
            <div class="content">
              <p>Patients diagnostiqués qui signalent encore des symptômes pendant qu’ils suivent un régime sans gluten.</p>
              <img src="icons/gluten-free.png" alt="">
            </div>
          </div>

        <div class="info__card">
          <div class="circle">
            <h2>1 sur 10</h2>
          </div>
          <div class="content">
            <p>Membres de la famille apparentés qui ont également la maladie coeliaque</p>
            <img src="icons/family.png" alt="">
          </div>
        </div>
        <div class="info__card">
          <div class="circle">
            <h2>2x/4x</h2>
          </div>
          <div class="content">
            <p>Risque accru de maladie coronarienne/petits cancers de l’intestin</p>
            <img src="icons/cancer-cell.png" alt="">
          </div>
        </div>


  </div>


</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
<script src="js/circleTxt.js"></script>
<script src="js/imageReveal.js"></script>
<?php include 'footer.php' ?>
</body>
</html>
