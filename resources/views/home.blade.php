@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ __('You are welcome') }}  {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                    <br/>
                    <a href="/services"><b>{{ __('Request a checkup')}}</b></a>

                    <p><b>Tests history</b></p>
                    <table class="table table-primary table-striped ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Test</th>
      <th scope="col">Price</th>
      <th scope="col">Date</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Urinalysis</td>
      <td>10000</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Malaria Microscopy</td>
      <td>10,000</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Film comment</td>
      <td>15,000</td>
      
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Stool analysis</td>
      <td>20,000</td>
      
    </tr><tr>
      <th scope="row">3</th>
      <td>ZN test</td>
      <td>80,000</td>
      
    </tr><tr>
      <th scope="row">5</th>
      <td>FM TB</td>
      <td>60,000</td>
      
    </tr><tr>
      <th scope="row">6</th>
      <td>Swabs</td>
      <td>25,000</td>
      
    </tr><tr>
      <th scope="row">7</th>
      <td>Body Fluids</td>
      <td>30,00</td>
      
   
  </tbody>


</table>
<p><b>Near by testers</b></p>
                    <script>
                    
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const uluru = { lat: 1.3707, lng: 32.3032 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 8,
          center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
      }
    </script>

    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqLFOr4P3S7kjjR3i0633XBl-ygfGp2-U&callback=initMap&libraries=&v=weekly"
      async
    ></script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
