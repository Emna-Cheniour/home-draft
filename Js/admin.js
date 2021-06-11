var optionBtn=document.querySelectorAll('.section__admin .services__btn.default');

var optionSection=document.querySelectorAll('.section__admin .hidden__options');

console.log(optionBtn[1]);
for(let i=0;i<optionBtn.length;i++){
  optionBtn[i].addEventListener('click',(e)=>{
    
    optionSection[i].classList.toggle('display');
  });
}



