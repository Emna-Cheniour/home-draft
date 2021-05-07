const intro=document.querySelector('.wrapper.introduce');
const startBtn=document.querySelector('#startBtn');
const nextBtns=document.querySelectorAll('#nextQuestionBtn');
const previousBtns=document.querySelectorAll('#previousQuestionBtn');
const questions=document.querySelectorAll('.wrapper.question');
const progressBar=document.querySelector('.progress-bar.progress-bar-striped.progress-bar-animated');
const questContainer=document.querySelectorAll('.answers');
const questionNbr=questions.length;
var score=0;

// start button
startBtn.addEventListener('click',(e)=>{
    intro.classList.add('hidden');
    questions[0].classList.remove('hidden');
});

//back button in first question of the quizz
previousBtns[0].addEventListener('click',()=>{
  questions[0].classList.add('hidden');
  intro.classList.remove('hidden');
});

// result button for the last question of the quizz
nextBtns[questionNbr-2].addEventListener('click',(e)=>{
        questions[questionNbr-2].classList.add('hidden');
        questions[questionNbr-1].classList.remove('hidden');

});

function countSelectedAnswers(answers){
  let selectedCount=0;
        for(let j=0;j<answers.length;j++){
          if(answers[j].classList.contains('selected')){
            selectedCount++;
          }
        }
        return selectedCount;

};

// all the arrays have the same length=questions number

for(let k=0; k<questContainer.length;k++){

  let answers=questContainer[k].children;

  
  for(let i=0; i<answers.length;i++){

    answers[i].addEventListener('click',()=>{
    
      if(questContainer[k].classList.contains('one__choice--question')){
        let selectedCount=countSelectedAnswers(answers);
        
        if(!selectedCount){
          answers[i].classList.add('selected');
          nextBtns[k].removeAttribute('disabled');
          nextBtns[k].style.cursor='pointer';
          selectedCount++;
          score++;
          progressBar.style.width=(score)*12.5+"%";
          progressBar.innerHTML=(score)*12.5+"%";

        }
        else {
          for(let j=0;j<answers.length;j++){
            answers[j].classList.remove('selected');
            selectedCount--;
          }

          answers[i].classList.add('selected');
          selectedCount++;        
        }
      }


      else {
        let selectedCount=countSelectedAnswers(answers);

        //first selected--> increase score & update progress bar
        if(!selectedCount && !(answers[i].classList.contains('selected'))){
          score++;
          progressBar.style.width=(score)*12.5+"%";
          progressBar.innerHTML=(score)*12.5+"%";
        }
          
          // remove selected to btn
          if(!(answers[i].classList.contains('selected'))){
            
            answers[i].classList.add('selected');
            selectedCount++;
          }
          // add selected to btn
          else {
            answers[i].classList.remove('selected');
            selectedCount--;
          }
          
          // after 1 select activate next btn
          if(selectedCount){
            nextBtns[k].removeAttribute('disabled');
            nextBtns[k].style.cursor='pointer';
          }
          // if no btn is selected disable next btn and decrease score & update progress bar
          else {
            score--;
            progressBar.style.width=(score)*12.5+"%";
            progressBar.innerHTML=(score)*12.5+"%";
            nextBtns[k].setAttribute('disabled','disabled');
            nextBtns[k].style.cursor='not-allowed';
          } 
        }
      

     
      
    });

  }
   

  // listen for next buttons
    nextBtns[k].addEventListener('click',()=>{
        questions[k].classList.add('hidden');
        questions[k+1].classList.remove('hidden');
        
    
    });

  //listen for previous buttons
    previousBtns[k].addEventListener('click',(e)=>{
        questions[k].classList.add('hidden');
        questions[k-1].classList.remove('hidden');
    });
}





