var icons= document.querySelectorAll('.Icontab');
var tabShow=document.querySelectorAll('.tabShow');

for(let i=0;i<icons.length;i++){

  icons[i].addEventListener('click',()=>{


    for(let j=0;j<icons.length;j++){
      icons[j].classList.remove('active');
      tabShow[j].classList.add('hidden');
    }
    icons[i].classList.toggle('active');
    tabShow[i].classList.toggle('hidden');




  });

}