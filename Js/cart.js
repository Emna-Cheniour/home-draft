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

/*Payment pop up control*/
var confirmCart = document.querySelector("#confirmCart");
var paymentPopUp = document.querySelector(".paymentPopUp");
var overlayCart = document.querySelector("#overlayCart");
var closePaymentPopUp = document.querySelector(".closePaymentPopUp");
confirmCart.addEventListener("click", () => {
    paymentPopUp.classList.add("active");
    overlayCart.classList.add("active");
    document.querySelector('body').style.overflow = "hidden";
});
closePaymentPopUp.addEventListener("click", () => {
    paymentPopUp.classList.remove("active");
    overlayCart.classList.remove("active");
    document.querySelector('body').style.overflow = "auto";
});
overlayCart.addEventListener("click", () => {
    paymentPopUp.classList.remove("active");
    overlayCart.classList.remove("active");
    document.querySelector('body').style.overflow = "auto";
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
var closeLocationPopUp2 = document.querySelector("#mybutton1");
        closeLocationPopUp2.addEventListener("click", () => {
        document.getElementById("locAddress").innerHTML = "bonjour";
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
    
    const request = {
        placeId: "ChIJN1t_tDeuEmsRUsoyG83frY4",
        fields: ["name", "formatted_address", "place_id", "geometry"],
      };
      const infowindow = new google.maps.InfoWindow();
      const service = new google.maps.places.PlacesService(map);

      
    map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);
}

service.getDetails(request, (place, status) => {
    if (
      status === google.maps.places.PlacesServiceStatus.OK &&
      place &&
      place.geometry &&
      place.geometry.location
    ) {
      const marker = new google.maps.Marker({
        map:map,
        position: place.geometry.location,
      });
      google.maps.event.addListener(marker, "click", function () {
        console.log(place.name) ;  
        infowindow.setContent(
          "<div><strong>" +
            place.name +
            "</strong><br>" +
            "Place ID: " +
            place.place_id +
            "<br>" +
            place.formatted_address +
            "</div>"
        );
        infowindow.open(map, this);
      });
      
    }
    
  });

  