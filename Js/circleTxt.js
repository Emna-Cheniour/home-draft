// split text in lettres
const text=document.querySelector(".text");
text.innerHTML=text.textContent.replace(/\S/g,"<span>$&</span>");

const element=document.querySelectorAll(".text span");
for(let i=0;i<element.length;i++){
  element[i].style.transform="rotate("+i*18+"deg)";
}
