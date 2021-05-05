const intro=document.querySelector('.wrapper.introduce');
const startBtn=document.querySelector('#startBtn');
const nextBtns=document.querySelectorAll('#nextQuestionBtn');
const previousBtns=document.querySelectorAll('#previousQuestionBtn');
const questions=document.querySelectorAll('.wrapper.question');
const progressBar=document.querySelector('.progress-bar.progress-bar-striped.progress-bar-animated');
const resultBtn=document.querySelector('#resultBtn');
const answerBtn=document.querySelectorAll('#answerBtn');
var score=0;

startBtn.addEventListener('click',(e)=>{
    intro.classList.add('hidden');
    questions[0].classList.remove('hidden');
});


for(let i=0;i<(nextBtns.length);i++){
  nextBtns[i].addEventListener('click',(e)=>{
    questions[i].classList.add('hidden');
    questions[i+1].classList.remove('hidden');
   
    score++;
    progressBar.style.width=(score)*10+"%";
    progressBar.innerHTML=(score)*10+"%";

  });
}

previousBtns[0].addEventListener('click',()=>{
  questions[0].classList.add('hidden');
  intro.classList.remove('hidden');
 
});


for(let i=1;i<(previousBtns.length);i++){
    previousBtns[i].addEventListener('click',(e)=>{
    questions[i].classList.add('hidden');
    questions[i-1].classList.remove('hidden');
    score--;
    progressBar.style.width=(score)*10+"%";
    progressBar.innerHTML=(score)*10+"%";
  });
}

resultBtn.addEventListener('click',(e)=>{
   console.log(e);
   score++;
   progressBar.style.width=(score)*10+"%";
   progressBar.innerHTML=(score)*10+"%";
});



/* answers */

answerBtn.forEach((btn)=>{
  btn.addEventListener('click',()=>{

    btn.classList.toggle('selected');
  });
});