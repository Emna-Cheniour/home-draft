const intro=document.querySelector('.wrapper.introduce');
const startBtn=document.querySelector('#startBtn');
const nextBtns=document.querySelectorAll('#nextQuestionBtn');
const previousBtns=document.querySelectorAll('#previousQuestionBtn');
const questions=document.querySelectorAll('.wrapper.question');
const progressBar=document.querySelector('.progress-bar.progress-bar-striped.progress-bar-animated');
const resultBtn=document.querySelector('#resultBtn');
const answers=document.querySelectorAll('.answers');
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

for(let i=0; i<answers.length;i++){

  // listen for answer section to enable next btns : only one choice question for now
  answers[i].addEventListener('click',(e)=>{
      if(answers[i].classList.contains('one__choice--question')){
        let answerBtn=answers[i].children;
        let selectedCount=0;
        for(let j=0;j<answerBtn.length;j++){
          if(answerBtn[j].classList.contains('selected')){
            selectedCount++;
          }
        }
        
        if(!selectedCount){
          e.target.classList.add('selected');
          nextBtns[i].removeAttribute('disabled');
          nextBtns[i].style.cursor='pointer';
          selectedCount++;
        }
        else {
          for(let j=0;j<answerBtn.length;j++){
            answerBtn[j].classList.remove('selected');
            selectedCount--;
          }
          e.target.classList.add('selected');
          selectedCount++;
        
        }
      }
      else {
        let answerBtn=answers[i].children;
        let selectedCount=0;
        for(let j=0;j<answerBtn.length;j++){
          if(answerBtn[j].classList.contains('selected')){
            selectedCount++;
          }
        }
        if(!(e.target.classList.contains('selected'))){
          e.target.classList.add('selected');
          selectedCount++;
        }
        else {
          e.target.classList.remove('selected');
          selectedCount--;
        }
        
        if(selectedCount){
          nextBtns[i].removeAttribute('disabled');
          nextBtns[i].style.cursor='pointer';
        }
        else {
          nextBtns[i].setAttribute('disabled','disabled');
          nextBtns[i].style.cursor='not-allowed';

        } 
      }
    });

  // listen for next buttons
    nextBtns[i].addEventListener('click',()=>{
    questions[i].classList.add('hidden');
    questions[i+1].classList.remove('hidden');
    score++;
    progressBar.style.width=(score)*12.5+"%";
    progressBar.innerHTML=(score)*12.5+"%";
    
    });

  //listen for previous buttons
    previousBtns[i].addEventListener('click',(e)=>{
    questions[i].classList.add('hidden');
    questions[i-1].classList.remove('hidden');
    score--;
    progressBar.style.width=(score)*10+"%";
    progressBar.innerHTML=(score)*10+"%";
    });
}




