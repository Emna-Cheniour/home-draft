const intro=document.querySelector('.wrapper.introduce');
const startBtn=document.querySelector('#startBtn');
const nextBtns=document.querySelectorAll('#nextQuestionBtn');
const previousBtns=document.querySelectorAll('#previousQuestionBtn');
const questions=document.querySelectorAll('.wrapper.question');
const progressBar=document.querySelector('.progress-bar.progress-bar-striped.progress-bar-animated');
const questContainer=document.querySelectorAll('.answers');
const noneBtn=document.querySelectorAll('.answerBtn.none__btn');



const questionNbr=questions.length;
var score=0;
var finalResult=0;

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


function countSelectedAnswers(answers){
  let selectedCount=0;
        for(let j=0;j<answers.length;j++){
          if(answers[j].classList.contains('selected')){
            selectedCount++;
          }
        }
        return selectedCount;

};
function countPositiveSelectedAnswers(answers){
  let selectedCount=0;
        for(let j=0;j<answers.length;j++){
          if((answers[j].textContent)=="OUI" && answers[j].classList.contains('selected')){
            selectedCount++;
          }
        }
        return selectedCount;

};
function countValidSelectedAnswers(answers){
  let selectedCount=0;
        for(let j=0;j<answers.length;j++){
          if(answers[j].classList.contains('selected') && answers[j].classList.contains('valid') ){
            selectedCount++;
          }
        }
        return selectedCount;

};


for(let k=0;k<questContainer.length;k++){
    let answers=questContainer[k].children;
    let selectedCount=0;
    
  
  if(questContainer[k].classList.contains('one__choice--question')){

        questContainer[k].addEventListener('click',(e)=>{
          nextBtns[k].removeAttribute('disabled');
          nextBtns[k].style.cursor='pointer';
                  
              
              //only apply to the answer Btn (not the space between)
              if((e.target).classList.contains('answerBtn')){

                selectedCount=countSelectedAnswers(answers);

                if(!selectedCount){
                  e.target.classList.add('selected');
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
                  e.target.classList.add('selected');
                  selectedCount++;        
                }

                
              }



        });

  }

  else 
  {
    questContainer[k].addEventListener('click',(e)=>{

      
      nextBtns[k].removeAttribute('disabled');
      nextBtns[k].style.cursor='pointer';
      
       selectedCount=countSelectedAnswers(answers);
       //first selected--> increase score & update progress bar
      if(!selectedCount  && !(e.target.classList.contains('selected answerBtn'))){
         score++;
         progressBar.style.width=(score)*12.5+"%";
         progressBar.innerHTML=(score)*12.5+"%";
       }

       if((e.target).classList.contains('valid')){
         noneBtn[k-2].classList.remove('selected');
         e.target.classList.toggle('selected');
       }
       

      if((e.target).classList.contains('none__btn')){
        
          for(let j=0;j<answers.length;j++){
            if(answers[j].classList.contains('valid'))
               answers[j].classList.remove('selected');
          }
          e.target.classList.toggle('selected');
       }

       // if no btn is selected disable next btn and decrease score & update progress bar
       selectedCount=countSelectedAnswers(answers);
       if(!selectedCount) {
         score--;
         progressBar.style.width=(score)*12.5+"%";
         progressBar.innerHTML=(score)*12.5+"%";
         nextBtns[k].setAttribute('disabled','disabled');
         nextBtns[k].style.cursor='not-allowed';
       }
     
    });

    


  }
  
   // listen for next buttons
   nextBtns[k].addEventListener('click',()=>{

      finalResult+=countPositiveSelectedAnswers(answers);
      finalResult+=countValidSelectedAnswers(answers);
      questions[k].classList.add('hidden');
      questions[k+1].classList.remove('hidden');
      console.log(finalResult);
      
    
    });

//listen for previous buttons
    previousBtns[k].addEventListener('click',(e)=>{
      questions[k].classList.add('hidden');
      questions[k-1].classList.remove('hidden');
    });

}

nextBtns[questionNbr-2].addEventListener('click',(e)=>{

  //finalResult+=countValidSelectedAnswers(questContainer[questionNbr-2].children);
  questions[questionNbr-2].classList.add('hidden');
  questions[questionNbr-1].classList.remove('hidden');
  //console.log(finalResult);


  var quizzResult = document.createElement('p');


  if(finalResult==0){
    quizzResult.innerHTML= "Your quizz score is: "+finalResult+"<br> safe ";
    console.log("alo1")
  }

  else if(1<=finalResult<=7){
    console.log("alo2")
    quizzResult.innerHTML= "Your quizz score is: "+finalResult+"<br> unlikely but be careful";
  } 
  else{
    console.log("alo3");
    quizzResult.innerHTML= "Your quizz score is: "+finalResult+"<br> ALERT!!!! It is very likely that you have celiac disease! If you wanna contact specialists <br> wanna know more about celiac disease ?";
  }

  
  questions[questionNbr-1].appendChild(quizzResult);

});





          





