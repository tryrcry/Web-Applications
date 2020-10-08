$(document).ready(function(){
    var autoComplete;
    autoComplete = new google.maps.places.Autocomplete((document.getElementById(from)),{
    types:['geocode']
  });

  google.maps.event.addListener(autoComplete,'place_changed',function(){
    var near_place=autoComplete.getPlace();
  });
  });