var emptyCart = document.querySelector('.panierVide');
var width = document.querySelector('#catalogue a').offsetWidth;
var myLineHover;
var myLine;
if (emptyCart) {
    document.querySelector('#catalogue a').addEventListener("mouseover", () => {

        width = document.querySelector('#catalogue a').offsetWidth;
        myLine.remove()
        myLineHover = new LeaderLine(
            LeaderLine.pointAnchor(document.querySelector('#visiterCatalogue'), {
                x: '50%',
                y: '0%'
            }), LeaderLine.pointAnchor(document.querySelector('#catalogue a'), {
                x: width,
                y: '50%'
            }), {
                color: '#3B556D',
                size: 6,
                dash: true,
            }
        );
        myLineHover.setOptions({
            startSocketGravity: [-200, -100]
        });
    });
    document.querySelector('#catalogue a').addEventListener("mouseout", () => {

        width = document.querySelector('#catalogue a').offsetWidth;
        myLineHover.remove()
        myLine = new LeaderLine(
            LeaderLine.pointAnchor(document.querySelector('#visiterCatalogue'), {
                x: '50%',
                y: '0%'
            }), LeaderLine.pointAnchor(document.querySelector('#catalogue a'), {
                x: width,
                y: '50%'
            }), {
                color: '#3B556D',
                size: 6,
                dash: true,
            }
        );

        myLine.setOptions({
            startSocketGravity: [-200, -100]
        });

    })
    myLine = new LeaderLine(
        LeaderLine.pointAnchor(document.querySelector('#visiterCatalogue'), {
            x: '50%',
            y: '0%'
        }), LeaderLine.pointAnchor(document.querySelector('#catalogue a'), {
            x: width,
            y: '50%'
        }), {
            color: '#3B556D',
            size: 6,
            dash: true,
        }
    );
    myLine.setOptions({
        startSocketGravity: [-200, -100]
    });
}
/*Product control*/
var shopped = document.querySelectorAll(".shopped");
var addCart = document.querySelectorAll(".addCart");
var removeCart = document.querySelectorAll(".removeCart");
var product = {};
/*To remove element refrsh page !!!!*/ /*please read important*/
product["shopping"] = [];

for (let i = 0; i < shopped.length; i++) {
    product["shopping"].push(1);
}
for (let i = 0; i < shopped.length; i++) {
    addCart[i].addEventListener('click', () => {

        shopped[i].children[1].innerHTML = parseInt(shopped[i].children[1].innerHTML) + 1;
    });

    removeCart[i].addEventListener('click', () => {
        if (shopped[i].children[1].innerHTML > 1) {

            shopped[i].children[1].innerHTML = parseInt(shopped[i].children[1].innerHTML) - 1;
        }

    });
}

$('.addCart').each(function (index) {

    $(this).on("click", function () {
        product["shopping"][index]++;
        $(".sendPost").load("cartAjax.php", product);
    });
});
$('.removeCart').each(function (index) {

    $(this).on("click", function () {
        if (product["shopping"][index] > 1) {
            product["shopping"][index]--;
            $(".sendPost").load("cartAjax.php", product);
        }
    });
});


/*/*/
/*Adress Popup control*/
var changeLocation = document.querySelector("#changeLocation");
var locationPopUp = document.querySelector(".locationPopUp");
var overlayCart = document.querySelector("#overlayCart");
var closeLocationPopUp = document.querySelector(".closeLocationPopUp");
changeLocation.addEventListener("click", () => {
    locationPopUp.classList.add("active");
    overlayCart.classList.add("active");
    document.querySelector('body').style.overflow = "hidden";
});
closeLocationPopUp.addEventListener("click", () => {
    locationPopUp.classList.remove("active");
    overlayCart.classList.remove("active");
    document.querySelector('body').style.overflow = "auto";
});
overlayCart.addEventListener("click", () => {
    locationPopUp.classList.remove("active");
    overlayCart.classList.remove("active");
    document.querySelector('body').style.overflow = "auto";
});
/*Map adreesse*/
function initMap() {
    // The location of Uluru
    const insat = {
        lat: 36.84286722163025,
        lng: 10.196148353222771
    };
    // The map, centered at center
    const map = new google.maps.Map(document.getElementById("mapAddress"), {
        zoom: 17,
        center: insat,
    });


    var infowindow6 = new google.maps.InfoWindow({
        content: 'Insat'
    });
    const marker6 = new google.maps.Marker({
        position: center,
        map: map,
        title: "Insat",

    });

    infowindow6.open(map, marker6);
    document.getElementById("mybtn1").addEventListener("click", () => {
        map.setCenter(insat);
    });

    map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);
}