const intro=document.querySelector('.wrapper.introduce');
const startBtn=document.querySelector('#startBtn');
const nextBtns=document.querySelectorAll('#nextQuestionBtn');
const previousBtns=document.querySelectorAll('#previousQuestionBtn');
const questions=document.querySelectorAll('.wrapper.question');
const progressBar=document.querySelector('.progress-bar.progress-bar-striped.progress-bar-animated');
const resultBtn=document.querySelector('#resultBtn');
const questContainer=document.querySelectorAll('.answers');

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
resultBtn.addEventListener('click',(e)=>{
  console.log(e);
  score++;
  progressBar.style.width=(score)*10+"%";
  progressBar.innerHTML=(score)*10+"%";
});


// all the arrays have the same length=questions number

for(let k=0; k<questContainer.length;k++){

  let answers=questContainer[k].children;

  // listen for answer section to enable next btns : only one choice question for now
  for(let i=0; i<answers.length;i++){

    answers[i].addEventListener('click',(e)=>{
      if(questContainer[k].classList.contains('one__choice--question')){
        
        let selectedCount=0;
        for(let j=0;j<answers.length;j++){
          if(answers[j].classList.contains('selected')){
            selectedCount++;
          }
        }
        
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
        let selectedCount=0;
        for(let j=0;j<answers.length;j++){
          if(answers[j].classList.contains('selected')){
            selectedCount++;
          }
        }
        if(!selectedCount && !(answers[i].classList.contains('selected'))){
          score++;
          progressBar.style.width=(score)*12.5+"%";
          progressBar.innerHTML=(score)*12.5+"%";
        }
      
        if(!(answers[i].classList.contains('selected'))){
          answers[i].classList.add('selected');
          selectedCount++;
        }
        else {
          answers[i].classList.remove('selected');
          selectedCount--;
        }
        
        if(selectedCount){
          nextBtns[k].removeAttribute('disabled');
          nextBtns[k].style.cursor='pointer';
        }
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




