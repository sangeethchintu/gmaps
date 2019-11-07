<!DOCTYPE html>
<html>
<head>
	<title>User list - PDF</title>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxu4b4wANHQ3PvVdsnoTOmJjFEZr4L24s&libraries=places"
        async defer></script>
</head>
<body>
<div class="container">
	<form>
		<div class="form-group">
            <label>City<star>*</star></label>
            <input type="text" name="city" placeholder="City" class="form-control" value="{{ old('city') }}" id="city">
        </div>
	</form>
	<!-- <script type="text/javascript">
		function initialize() {
            var input, autocomplete;
		    var options = {
		        types: ['(cities)'],
		        componentRestrictions: {country: "in"}
		    };
		     input = document.getElementById('city');
		     autocomplete = new google.maps.places.Autocomplete(input, options);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
    </script> -->
    
    


</div>
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', function () {
        var places = new google.maps.places.Autocomplete(document.getElementById('city'));
        google.maps.event.addListener(places, 'place_changed', function () {

        });
    });
</script>
</body>
</html>