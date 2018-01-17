$(document).ready(function(){
  $('.full-nav__wrapper').sticky({topSpacing:0});
  $(".logo-img").animate({"opacity": "1"}, 700);
  $(".arrow").delay(1500).animate({"opacity": ".5"}, 700);
  $(".scroll-down-prompt").delay(1500).animate({"opacity": ".5"}, 700);

  AOS.init();
})

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 43.6627635, lng: -79.7951424},
    zoom: 14,
    scrollwheel: false,
    styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#c1c1c1"},{"visibility":"on"}]}]
  });
}
