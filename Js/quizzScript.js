const intro=document.querySelector('.wrapper.introduce');
const startBtn=document.querySelector('#startBtn');
const nextBtns=document.querySelectorAll('#nextQuestionBtn');
const previousBtns=document.querySelectorAll('#previousQuestionBtn');
const questions=document.querySelectorAll('.wrapper.question');
const progressBar=document.querySelector('.progress-bar.progress-bar-striped.progress-bar-animated');
const questContainer=document.querySelectorAll('.answers');
const noneBtn=document.querySelectorAll('#none__btn');

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
nextBtns[questionNbr-2].addEventListener('click',(e)=>{

        questions[questionNbr-2].classList.add('hidden');
        questions[questionNbr-1].classList.remove('hidden');
        console.log(finalResult);


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
          if((answers[j].textContent)!="Rien de ce qui précède" && answers[j].classList.contains('selected')){
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

                finalResult+=countPositiveSelectedAnswers(answers);
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
      if(!selectedCount && !(e.target.classList.contains('selected'))){
         score++;
         progressBar.style.width=(score)*12.5+"%";
         progressBar.innerHTML=(score)*12.5+"%";
       }

       if((e.target).classList.contains('answerBtn')){
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
      
       finalResult+=countValidSelectedAnswers(answers);
      
       
     
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

// null result btns

/*

for(let k=0;k<noneBtn.length;k++){

    let answers=questContainer[k+2].children;
    let selectedCount=0;

    noneBtn[k].addEventListener('click',(e)=>{
      console.log(e);
      
       selectedCount=countSelectedAnswers(answers);
       //first selected--> increase score & update progress bar
      if(!selectedCount && !(noneBtn[k].classList.contains('selected'))){
        console.log(selectedCount)
         score++;
         progressBar.style.width=(score)*12.5+"%";
         progressBar.innerHTML=(score)*12.5+"%";
         nextBtns[k].removeAttribute('disabled');
         nextBtns[k].style.cursor='pointer';
       }
      
      selectedCount=countSelectedAnswers(answers);
      if(selectedCount){

      for(let j=0;j<answers.length;j++){
        answers[j].classList.remove('selected');
      }
      noneBtn[k].classList.add('selected');
    }
      
      
      


      });
}
*/




          





