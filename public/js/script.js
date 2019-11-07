
    function initMap() {
        var map; var position;
        var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
        geoLocationInit();  
        
    }
    function geoLocationInit() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(geosuccess, fail); 
            console.log(position);
        }
        else {
            alert("Browser not supported");
        }
    }
    function geosuccess(position) {
        
        var latval = position.coords.latitude;
        var lngval = position.coords.longitude;
        console.log(latval,lngval);
        var latlng = new google.maps.LatLng(latval, lngval);
        createMap(latlng);
      //  nearbySearch(latlng);
       searchGirls(latval, lngval);
    }
function fail() {
    alert("failed");
    }
      
    function createMap(latlng) {
        map = new google.maps.Map(document.getElementById('map'), {
            center: latlng,
            zoom: 8
        });
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            title: "HI"
        });
          
    }
    
    function nearbySearch(latlng) {
            var request = {
                location: latlng,
                radius: '2500',
                type: ['school']
            };
            
            service = new google.maps.places.PlacesService(map);
            service.nearbySearch(request, callback);
        
            function callback(results, status) {
                console.log(results);
                if (status == google.maps.places.PlacesServiceStatus.OK) {
                   for (var i = 0; i < results.length; i++) {
                       var place = results[i];
                       latlng = place.geometry.location;
                       icn = place.icon;
                       var marker = new google.maps.Marker({
                        position: latlng,
                        map: map,
                        icon:icn
                    });
                    
                   }
               }
            }
    }
        
    function searchGirls(lat,lng) {
        $.post("{{url('searchGirls')}}", {lat:lat,lng:lng}, function(match) {
            console.log(match);
        });
    }
       
        
    
 

