@extends('welcome')
@section('content')

<div >
<div id="searchcity">
        <input id="pac-input" type="text"
            placeholder="Enter a location">
      </div>
</div>

<div class="container">
    <div id="map">
    </div>
</div>
<script>
var input = document.getElementById('searchcity');
  console.log(input);
  var options = {
  types: ['(cities)'],
  componentRestrictions: {country: 'fr'}
};
  var autocomplete = new google.maps.places.Autocomplete(input, options);


    </script>

@endsection