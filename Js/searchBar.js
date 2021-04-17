const recipes =[
  {'name':'salade'},
  {'name':'pancake'},
  {'name':'crepe'},
  {'name':'pain'},
  {'name':'pate'}
];

  
const list =document.querySelector('#list');
const clear = document.querySelector('.clear-icon');
const search = document.querySelector('#search');

function setList(group){
  clearList();

  group.forEach(element => {
    const item = document.createElement('li');
    const text =document.createTextNode(element.name);
    item.appendChild(text);
    list.appendChild(item);
  });
  if(group.length===0){
    noResult();
  }
}

function clearList(){
  while(list.firstChild){
    list.removeChild(list.firstChild);
  }
}

function noResult(){
    const item = document.createElement('li');
    const text =document.createTextNode('Aucun resultat');
    item.appendChild(text);
    list.appendChild(item);
}

function getRelevance(searchValue,value){
  if(searchValue===value){
    return 2;
  } else if(value.startsWith(searchValue)){
    return 1;
  } return 0;
}
search.addEventListener('keyup',(e)=>{
  let searchValue = e.target.value;
  if(searchValue && searchValue.trim().length>0){
    searchValue=searchValue.trim().toLowerCase();
    setList(recipes.filter(element => {
      return(element.name.includes(searchValue));
    }).sort((element1,element2)=>{
      return(getRelevance(element2)-getRelevance(element1));
    }));
  } else {
    clearList();
  }
})




search.addEventListener('keyup',()=>{
  if(search.value && clear.style.visibility!='visible'){
    clear.style.visibility='visible';
  } else if(!search.value){
    clear.style.visibility='hidden';
  }
  
});

clear.addEventListener('click',()=>{
  search.value='';
  clear.style.visibility='hidden';
});
