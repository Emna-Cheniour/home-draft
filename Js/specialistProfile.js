window.addEventListener('scroll', reveal);

    function reveal(){
      var reveals = document.querySelectorAll('.reveal');
      var headers=document.querySelectorAll('.specialist__nav li');
      
      
      for(var i = 0; i < reveals.length; i++){

        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if(revealtop < windowheight - revealpoint){
          reveals[i].classList.add('active');
          headers[i+1].classList.add("active__link");
        }
        else{
          reveals[i].classList.remove('active');
          headers[i+1].classList.remove("active__link");
        }
      }
    }