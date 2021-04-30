var swiper = new Swiper('.swiper-container', {

  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  coverflowEffect: {

    rotate: 0,
    stretch: 0,
    depth: 100,
    modifier: 2,
    slideShadows: true,
  },
  loop: true,

  slideToClickedSlide: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false
  },
});
/*Review form*/
var closeReview = document.querySelector('.closeReview');
var openReview = document.querySelector('.openReview');
var addReviewForm = document.querySelector('.addReviewForm');
var overlayAddReview = document.querySelector('#overlayAddReview');
openReview.addEventListener("click", () => {
  addReviewForm.classList.add("active");
  overlayAddReview.classList.add("active");
  document.querySelector('body').style.overflow = "hidden";
});
closeReview.addEventListener("click", () => {
  addReviewForm.classList.remove("active");
  overlayAddReview.classList.remove("active");
  document.querySelector('body').style.overflow = "auto";
});

var reviewOne = document.querySelector('#review1');
var reviewTwo = document.querySelector('#review2');
var reviewThree = document.querySelector('#review3');
var reviewFour = document.querySelector('#review4');
var reviewFive = document.querySelector('#review5');
var reviewRating = document.querySelector('#reviewRating');
var reviewHearts = document.querySelector('#stars');

reviewOne.addEventListener("click", () => {
  reviewHearts.value = 1;
  reviewRating.innerHTML = "1/5";
});
reviewTwo.addEventListener("click", () => {
  reviewHearts.value = 2;
  reviewRating.innerHTML = "2/5";
});
reviewThree.addEventListener("click", () => {
  reviewHearts.value = 3;
  reviewRating.innerHTML = "3/5";
});
reviewFour.addEventListener("click", () => {
  reviewHearts.value = 4;
  reviewRating.innerHTML = "4/5";
});
reviewFive.addEventListener("click", () => {
  reviewHearts.value = 5;
  reviewRating.innerHTML = "5/5";
});
var starItems = document.querySelector('.heart_section ').children;

var clicked = false;
for (let i = 1; i < starItems.length; i++) {


  starItems[i].addEventListener('mouseover', () => {

    for (let j = i; j >= 0; j--) {

      starItems[j].classList.remove("far");
      starItems[j].classList.add("fas");
    }

  });

  starItems[i].addEventListener('click', () => {
    clicked = true;
    for (let j = i; j >= 0; j--) {

      starItems[j].classList.remove("far");
      starItems[j].classList.add("fas");
    }
    for (let k = i+1; k< starItems.length; k++) {

      starItems[k].classList.add("far");
      starItems[k].classList.remove("fas");
    }

  });


  starItems[i].addEventListener('mouseout', () => {
    if (!clicked) {
      for (let j = i; j >= 0; j--) {

        starItems[j].classList.add("far");
        starItems[j].classList.remove("fas");
      }
    }


  });

}

/*suuccess message*/
var Reviewstat = document.querySelector('.reviewStat');
if(Reviewstat.id!=""){
  Reviewstat.classList.add("active"); 
  overlayAddReview.classList.add("active");
  document.querySelector('body').style.overflow = "hidden";
  if(Reviewstat.id==1){
    Reviewstat.classList.add("success"); 
    }
    else{
      Reviewstat.classList.add("error");
    }
  setTimeout(function(){ Reviewstat.classList.remove("active"); 
  overlayAddReview.classList.remove("active");
  document.querySelector('body').style.overflow = "auto";}, 3000);

}
