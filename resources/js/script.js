$(document).ready(function () {

    
        var Hounslow ={lat: 51.4667, lng: -0.35};
      map = new google.maps.Map(document.getElementById('map'), {
        center: Hounslow,
        zoom: 8
      });
     
    
    
   

    var marker = new google.maps.Marker({
        position: Hounslow,
        map: map
    });

    var request = {
        location: Hounslow,
        radius: '500',
        type: ['school']
    };
    
    service = new google.maps.places.PlacesService(map);
    service.nearbySearch(request, callback);

  function nearbySearch() {
    
  }
    function callback(results, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            var place = results[i];
            createMarker(results[i]);
          }
        }
    }
    
});