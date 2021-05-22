const dropIt= document.querySelector('#drop');
const dropdiv = document.querySelector(".dropdownService");
const dropdivPhone = document.querySelector(".dropdownForPhone");
const dropProfil = document.querySelector("#dropProfil");
const dropDivProfil = document.querySelector(".dropdownProfil");

/*/Swiper*/
var swiper = new Swiper('.specialistsContainer', {
    direction: 'vertical',
    slidesPerView: 3,
    loop: true,
 
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
});
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