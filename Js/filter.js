var drop=document.querySelector('.default-option');
var dropList=document.querySelector('.dropdown-list ul');
var searchRecipeWrapper=document.querySelector('.search__wrapper');
//var dropListItem=document.querySelectorAll('.dropdown-list ul li');

drop.addEventListener('click',(e)=>{
  dropList.classList.toggle('active');

});

var select=document.querySelectorAll('.dropdown-list ul li button');

select.forEach((element) => {
  element.addEventListener('click',(e)=>{
    element.classList.toggle('selected');
    var elementText=document.querySelectorAll('.dropdown-list ul li button a').innerHTML;
    if(element.classList.contains('selected')){

      var selectedAdded = document.createElement("div");
      selectedAdded.id=elementText;
      var selectedText = document.createElement("span");
      var selectedClose = document.createElement("span");
      selectedText.innerHTML=elementText;
      selectedClose.innerHTML="&times;";
      selectedAdded.appendChild(selectedText);
      selectedAdded.appendChild(selectedClose);
      searchRecipeWrapper.appendChild(selectedAdded);

    }
    else{
      var selectedRemoved = document.querySelector("#"+elementText);
      selectedRemoved.remove();
    }
})
})

var removeFilters=document.querySelectorAll('.searchWrapper ul li button');