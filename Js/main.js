const drop= document.querySelector('#drop');
const dropdiv = document.querySelector(".dropdown");
const dropdivPhone = document.querySelector(".dropdownForPhone");
function show(x,y){ //Fonction pour afficher ou enlever un element par clic sur un autre
    x.addEventListener("click",()=>{
        var display= y.style.display;
        if((display=="none")) y.style.display="block";
         else y.style.display="none";
     })
}
show(drop,dropdiv);
show(drop,dropdivPhone);