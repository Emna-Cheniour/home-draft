var starItems=document.querySelector('.star__section a').children;

starItems[0].addEventListener('mouseover',()=>{

  starItems[0].style.color='#5FC2BA';

});



starItems[0].addEventListener('mouseout',()=>{
  
  starItems[0].style.color='#00000030';

});


for(let i=1;i<starItems.length;i++){


  starItems[i].addEventListener('mouseover',()=>{

    for(let j=i;j>=0;j--){

      starItems[j].style.color='#5FC2BA';
    }

  });


  
  starItems[i].addEventListener('mouseout',()=>{

    for(let j=i;j>=0;j--){

      starItems[j].style.color='#00000030';
    }

  });

}
