const hiddenService=document.querySelector('header nav .nav__links .link__item .hidden__services');
const service=document.querySelector('#dropService');

service.addEventListener('click',()=>{

  hiddenService.classList.toggle("blockDisplay");
});

const hiddenProfile=document.querySelector('.profile__hidden');
const profile=document.querySelector('#dropProfilIcon');

profile.addEventListener('click',()=>{

  hiddenProfile.classList.toggle('active');
});


const menuBar=document.querySelector('.menu-toggle');
const menu=document.querySelector('header nav');

menuBar.addEventListener('click',()=>{
  menu.classList.toggle('active');
});


const dropIt= document.querySelector('#drop');
const dropdiv = document.querySelector(".dropdownService");

dropIt.addEventListener('click',()=>{

  dropdiv.classList.toggle('display');
});