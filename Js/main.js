const dropIt= document.querySelector('#drop');
const dropdiv = document.querySelector(".dropdownService");
const dropdivPhone = document.querySelector(".dropdownForPhone");
const dropProfil = document.querySelector("#dropProfil");
const dropDivProfil = document.querySelector(".dropdownProfil");
function show(x,y,d){ //Fonction pour afficher ou enlever un element par clic sur un autre
    x.addEventListener("click",()=>{
        var display= y.style.display;
        if((display=="none")) y.style.display=d;
         else y.style.display="none";
     })
}
show(dropIt,dropdiv,"block");
show(dropIt,dropdivPhone,"inline-block");
show(dropProfil,dropDivProfil,"block");
/*//*/
var specialists = document.querySelector(".specialists");

(setInterval(() => {

    var newkid = specialists.children[0];

    specialists.replaceChild(specialists.children[1], specialists.children[0]);
    specialists.appendChild(newkid);
}, 5000));
var center = function centerClass() {
    i = 1;
    specialists.children[i].classList.add("center");
    if (specialists.children[i - 1].classList.contains("center")) {
        specialists.children[i - 1].classList.remove("center");
    }

    i++;
}
center();
(setInterval(center, 5000));