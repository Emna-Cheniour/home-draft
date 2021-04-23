var drop=document.querySelector('.default-option');
var dropList=document.querySelector('.dropdown-list ul');
//var dropListItem=document.querySelectorAll('.dropdown-list ul li');

drop.addEventListener('click',(e)=>{
  dropList.classList.toggle('active');

  let select=document.querySelectorAll('.dropdown-list ul li button');

  select.forEach((element) => {
    element.addEventListener('click',(e)=>{
      element.classList.toggle('selected');
  })
})


});




