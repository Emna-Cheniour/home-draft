const drop= document.querySelector('#drop');
const dropPhone= document.querySelector('.dropPhone');
const dropdiv = document.querySelector(".dropdown");
const dropdivPhone = document.querySelector(".dropdownForPhone");
function show(x,y,d){ //Fonction pour afficher ou enlever un element par clic sur un autre
    x.addEventListener("click",()=>{
        var display= y.style.display;
        if((display=="none")) y.style.display=d;
         else y.style.display="none";
     })
}
show(drop,dropdiv,"block");
show(dropPhone,dropdivPhone,"inline-block");