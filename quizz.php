<?php


include_once 'head.php';
?>
<body>
  <?php include_once('navbarConnecte.php');?>

  <div class="quizz__container">

      <div class="progress__container">


            <h4>Début</h4>

            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
              
              </div>
            </div>
            
            <h4>Fin</h4>
      </div>
      
      
      <div class="quizz__layout">

        <div class="wrapper introduce">
          <h2>Outil d’évaluation des symptômes</h2>
          <img src="images/quizz.png" alt="">
          <p>La maladie coeliaque est une maladie génétique auto-immune dans laquelle la consommation de gluten (une protéine présente dans le blé, le seigle et l’orge) cause des dommages à l’intestin grêle.Si vous avez des symptômes inexpliqués ou si vous avez un membre de votre famille atteint de la maladie coeliaque, complétez l’outil d’évaluation des symptômes pour voir si vous avez un risque accru de maladie coeliaque.</p>

          <button class="btn btn3" id="startBtn" >COMMENCER<i id="right" class="fas fa-arrow-alt-circle-right"></i></button>
        </div>

      
        <div id="question1" class="wrapper question hidden">
          <h2>QUESTION NUMERO 1</h2>
          <p>Do you have an immediate family member (parent, sibling, child) with celiac disease?</p>
          <div class="answers">
            <button id="answerBtn">YES</button>
            <button id="answerBtn">NO</button>
            <button id="answerBtn">UNSURE</button>
          </div>

          <button class="btn btn3" disabled="disabled" style="cursor:not-allowed" id="nextQuestionBtn">Question Suivante<i id="right" class="fas fa-arrow-alt-circle-right"></i></button>
          <button class="btn btn3" id="previousQuestionBtn" ><i id="left" class="fas fa-arrow-alt-circle-left"></i>Retour</button>
            
        </div>

        <div id="question2" class="wrapper question hidden">
          <h2>QUESTION NUMERO 2</h2>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto animi rem quisquam facere. Corrupti, veniam corporis! Reprehenderit vero esse eaque deleniti fuga repellendus eos labore! Itaque atque amet molestiae obcaecati.

          <button class="btn btn3" id="nextQuestionBtn">Question Suivante<i id="right" class="fas fa-arrow-alt-circle-right"></i></button>
          <button class="btn btn3" id="previousQuestionBtn" ><i id="left" class="fas fa-arrow-alt-circle-left"></i>Question Précédente</button>
            
        </div>

        <div id="question3" class="wrapper question hidden">
          <h2>QUESTION NUMERO 3</h2>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto animi rem quisquam facere. Corrupti, veniam corporis! Reprehenderit vero esse eaque deleniti fuga repellendus eos labore! Itaque atque amet molestiae obcaecati.

          <button class="btn btn3" id="nextQuestionBtn">Question Suivante<i id="right" class="fas fa-arrow-alt-circle-right"></i></button>
          <button class="btn btn3" id="previousQuestionBtn" ><i id="left" class="fas fa-arrow-alt-circle-left"></i>Question Précédente</button>
            
        </div>

        <div id="question4" class="wrapper question hidden">
          <h2>QUESTION NUMERO 4</h2>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto animi rem quisquam facere. Corrupti, veniam corporis! Reprehenderit vero esse eaque deleniti fuga repellendus eos labore! Itaque atque amet molestiae obcaecati.

          <button class="btn btn3" id="nextQuestionBtn">Question Suivante<i id="right" class="fas fa-arrow-alt-circle-right"></i></button>
          <button class="btn btn3" id="previousQuestionBtn" ><i id="left" class="fas fa-arrow-alt-circle-left"></i>Question Précédente</button>
            
        </div>

        <div id="question5" class="wrapper question hidden">
          <h2>QUESTION NUMERO 5</h2>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto animi rem quisquam facere. Corrupti, veniam corporis! Reprehenderit vero esse eaque deleniti fuga repellendus eos labore! Itaque atque amet molestiae obcaecati.

          <button class="btn btn3" id="nextQuestionBtn">Question Suivante<i id="right" class="fas fa-arrow-alt-circle-right"></i></button>
          <button class="btn btn3" id="previousQuestionBtn" ><i id="left" class="fas fa-arrow-alt-circle-left"></i>Question Précédente</button>
            
        </div>

        <div id="question6" class="wrapper question hidden">
          <h2>QUESTION NUMERO 6</h2>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto animi rem quisquam facere. Corrupti, veniam corporis! Reprehenderit vero esse eaque deleniti fuga repellendus eos labore! Itaque atque amet molestiae obcaecati.

          <button class="btn btn3" id="nextQuestionBtn">Question Suivante<i id="right" class="fas fa-arrow-alt-circle-right"></i></button>
          <button class="btn btn3" id="previousQuestionBtn" ><i id="left" class="fas fa-arrow-alt-circle-left"></i>Question Précédente</button>
            
        </div>

        <div id="question7" class="wrapper question hidden">
          <h2>QUESTION NUMERO 6</h2>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto animi rem quisquam facere. Corrupti, veniam corporis! Reprehenderit vero esse eaque deleniti fuga repellendus eos labore! Itaque atque amet molestiae obcaecati.

          <button class="btn btn3" id="nextQuestionBtn">Question Suivante<i id="right" class="fas fa-arrow-alt-circle-right"></i></button>
          <button class="btn btn3" id="previousQuestionBtn" ><i id="left" class="fas fa-arrow-alt-circle-left"></i>Question Précédente</button>
        </div>

        <div id="question8" class="wrapper question hidden">
          <h2>QUESTION NUMERO 7</h2>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto animi rem quisquam facere. Corrupti, veniam corporis! Reprehenderit vero esse eaque deleniti fuga repellendus eos labore! Itaque atque amet molestiae obcaecati.

          <button class="btn btn3" id="nextQuestionBtn">Question Suivante<i id="right" class="fas fa-arrow-alt-circle-right"></i></button>
          <button class="btn btn3" id="previousQuestionBtn" ><i id="left" class="fas fa-arrow-alt-circle-left"></i>Question Précédente</button>
            
        </div>

        <div id="question9" class="wrapper question hidden">
          <h2>QUESTION NUMERO 9</h2>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto animi rem quisquam facere. Corrupti, veniam corporis! Reprehenderit vero esse eaque deleniti fuga repellendus eos labore! Itaque atque amet molestiae obcaecati.

          <button class="btn btn3" id="nextQuestionBtn">Question Suivante<i id="right" class="fas fa-arrow-alt-circle-right"></i></button>
          <button class="btn btn3" id="previousQuestionBtn" ><i id="left" class="fas fa-arrow-alt-circle-left"></i>Question Précédente</button>
        </div>

        <div id="question10" class="wrapper question hidden">
          <h2>QUESTION NUMERO 10</h2>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto animi rem quisquam facere. Corrupti, veniam corporis! Reprehenderit vero esse eaque deleniti fuga repellendus eos labore! Itaque atque amet molestiae obcaecati.

          <button class="btn btn3" id="resultBtn">Résultat<i id="right" class="fas fa-arrow-alt-circle-right"></i></button>
          <button class="btn btn3" id="previousQuestionBtn" ><i id="left" class="fas fa-arrow-alt-circle-left"></i>Question Précédente</button>
            
        </div>

        
      
        
        

      </div>

  </div>
    

      



  <?php include_once('footer.php'); ?>
  <script src="js/main.js"></script>
  <script src="js/quizzScript.js"></script>
</body>
<html>
