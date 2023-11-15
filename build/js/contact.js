/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./src/js/pages/contact.js ***!
  \*********************************/
window.addEventListener("load", function (event) {
  console.log(locationData.dataLocation);
  document.querySelector(".wpcf7").addEventListener("wpcf7mailsent", function (event) {
    //console.log(thankyouUrl);
    location = thankyouUrl;
  }, false);
});
var map;
initMap();
function initMap() {
  var options = {
    center: {
      lat: -8.65014910640421,
      lng: 115.12941024554938
    },
    zoom: 19,
    styles: [{
      elementType: "geometry",
      stylers: [{
        color: "#ffffff"
      }]
    }, {
      elementType: "labels.text.fill",
      stylers: [{
        color: "#818181"
      }]
    }, {
      elementType: "labels.text.stroke",
      stylers: [{
        color: "#ffffff"
      }]
    }, {
      featureType: "administrative.country",
      elementType: "geometry.stroke",
      stylers: [{
        color: "#4b6878"
      }]
    }, {
      featureType: "administrative.land_parcel",
      elementType: "labels.text.fill",
      stylers: [{
        color: "#64779e"
      }]
    }, {
      featureType: "administrative.province",
      elementType: "geometry.stroke",
      stylers: [{
        color: "#4b6878"
      }]
    }, {
      featureType: "landscape.natural",
      elementType: "geometry",
      stylers: [{
        color: "#2bc184"
      }]
    }, {
      featureType: "poi",
      elementType: "geometry",
      stylers: [{
        color: "#1e805f"
      }]
    }, {
      featureType: "poi",
      elementType: "labels.text.fill",
      stylers: [{
        color: "#818181"
      }]
    }, {
      featureType: "poi",
      elementType: "labels.text.stroke",
      stylers: [{
        color: "#ffffff"
      }]
    }, {
      featureType: "poi.park",
      elementType: "geometry.fill",
      stylers: [{
        color: "#277c57"
      }]
    }, {
      featureType: "poi.park",
      elementType: "labels.text.fill",
      stylers: [{
        color: "#818181"
      }]
    }, {
      featureType: "road",
      elementType: "geometry",
      stylers: [{
        color: "#dbdbdb"
      }]
    }, {
      featureType: "road",
      elementType: "labels.text.fill",
      stylers: [{
        color: "#818181"
      }]
    }, {
      featureType: "road",
      elementType: "labels.text.stroke",
      stylers: [{
        color: "#dbdbdb"
      }]
    }, {
      featureType: "road.highway",
      elementType: "geometry",
      stylers: [{
        color: "#2d7662"
      }]
    }, {
      featureType: "road.highway",
      elementType: "geometry.stroke",
      stylers: [{
        color: "#1a6149"
      }]
    }, {
      featureType: "road.highway",
      elementType: "labels.text.fill",
      stylers: [{
        color: "#818181"
      }]
    }, {
      featureType: "road.highway",
      elementType: "labels.text.stroke",
      stylers: [{
        color: "#22594b"
      }]
    }, {
      featureType: "transit",
      elementType: "labels.text.fill",
      stylers: [{
        color: "#818181"
      }]
    }, {
      featureType: "transit",
      elementType: "labels.text.stroke",
      stylers: [{
        color: "#1d2c4d"
      }]
    }, {
      featureType: "transit.line",
      elementType: "geometry.fill",
      stylers: [{
        color: "#283d6a"
      }]
    }, {
      featureType: "transit.station",
      elementType: "geometry",
      stylers: [{
        color: "#3a4762"
      }]
    }, {
      featureType: "water",
      elementType: "geometry",
      stylers: [{
        color: "#1d4d72"
      }]
    }, {
      featureType: "water",
      elementType: "labels.text.fill",
      stylers: [{
        color: "#818181"
      }]
    }]
  };
  //new map
  map = new google.maps.Map(document.getElementById("map"), options);
  //Array Marker 
  var markersData = JSON.parse(locationData.dataLocation);
  console.log(markersData);
  var markers = markersData;
  //loop thriught markers
  for (var i = 0; i < markers.length; i++) {
    addMarker(markers[i]);
  }
  function addMarker(props) {
    var marker = new google.maps.Marker({
      position: props.coord,
      map: map
      //icon: props.iconImage,
    });

    // if(props.iconImage){
    //     //set icon image
    //     marker.setIcon(props.iconImage);
    // }

    if (props.content) {
      var infoWindow = new google.maps.InfoWindow({
        content: props.content
      });
      infoWindow.open(map, marker);
      marker.addListener('click', function () {
        infoWindow.open(map, marker);
      });
    }
  }
  console.log(locationData.dataLocation);
}
/******/ })()
;
//# sourceMappingURL=contact.js.map