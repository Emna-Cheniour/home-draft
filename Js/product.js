var shop = document.querySelector(".shop");
var shopped = document.querySelector(".shopped");
var donate = document.querySelector(".donate");
var donated = document.querySelector(".donated");
var addCart = document.querySelector(".addCart");
var removeCart = document.querySelector(".removeCart");
var addDonation = document.querySelector(".addDonation");
var removeDonation = document.querySelector(".removeDonation");
var wishedProduct = document.querySelector(".wishedProduct");
var product = {};
product["wish"]=0;
product["shopping"] = 0;
product["donations"] = 0;
$(".donate").click(function () {
    product["donations"] = 1;
    $(".sendPost").load("products.php", product);
});
$(".addDonation").click(function () {
    product["donations"]++;
    $(".sendPost").load("products.php", product);
});
$(".removeDonation").click(function () {
    product["donations"]--;
    $(".sendPost").load("products.php", product);
});
$(".shop").click(function () {
    product["shopping"] = 1;
    $(".sendPost").load("products.php", product);
});
$(".addCart").click(function () {
    product["shopping"]++;
    $(".sendPost").load("products.php", product);
});
$(".removeCart").click(function () {
    product["shopping"]--;
    $(".sendPost").load("products.php", product);

});
$(".wishedProduct").click(function () {
    if(!product["wish"])
    {product["wish"]=1;}
    else {product["wish"]=0;}
    $(".sendPost").load("products.php", product);

});
shop.addEventListener('click', () => {
    shop.style.display = "none";
    shopped.style.display = "inline-flex"

})
addCart.addEventListener('click', () => {

    shopped.children[1].innerHTML = parseInt(shopped.children[1].innerHTML) + 1;
});

removeCart.addEventListener('click', () => {
    shopped.children[1].innerHTML = parseInt(shopped.children[1].innerHTML) - 1;
    if (shopped.children[1].innerHTML == 0) {
        shop.style.display = "inline-flex";
        shopped.style.display = "none";
        shopped.children[1].innerHTML = 1;
    }
});
donate.addEventListener('click', () => {
    donated.children[1].innerHTML = 1;
    donate.style.display = "none";
    donated.style.display = "inline-flex"
});
addDonation.addEventListener('click', () => {

    donated.children[1].innerHTML = parseInt(donated.children[1].innerHTML) + 1;
});

removeDonation.addEventListener('click', () => {
    donated.children[1].innerHTML = parseInt(donated.children[1].innerHTML) - 1;
    if (donated.children[1].innerHTML == 0) {
        donate.style.display = "inline-flex";
        donated.style.display = "none";
    }
});
wishedProduct.addEventListener('click', () => {
    var text = wishedProduct.children[1].innerHTML;
    if (text == "Add to Wishlist") {
        text = "Wished";
    } else {
        text = "Add to Wishlist";
    }
    wishedProduct.children[1].innerHTML = text;
    wishedProduct.children[0].classList.toggle("fas");
    wishedProduct.children[0].classList.toggle("far");
})
/*Swiper Image*/
var swiper = new Swiper('.productImageContainer', {
    cssMode: true,
    loop: true,
    pagination: {
        el: '.productImagePagination',
    },
    navigation: {
        nextEl: '.productImageNext',
        prevEl: '.productImagePrev',
    },
    mousewheel: true,
    keyboard: true,
});