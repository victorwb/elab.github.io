@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            
            <!-- <div class="col-md-8 offset-md-4">
           
            <img src={{ asset('img/Laborat.jpg') }} alt="default photo" width="300" height="240" class=" img-fluid"> 
            <img src={{ asset('img/labs.webp') }} alt="default photo" width="300" height="240" class=" img-fluid">              
            </div>  -->
                
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active"  id ='carouselExample'>
      <img class="d-block w-100 h-100"  src={{ asset('img/images.jpeg') }} alt="First slide">
    </div>
    <div class="carousel-item" id ='carouselExample'>
      <img class="d-block w-100 h-100" src={{ asset('img/lab.jpeg') }} alt="Second slide">
    </div>
    <div class="carousel-item" id ='carouselExample'>
      <img class="d-block w-100 h-100" src={{ asset('img/lab2.jpeg') }} alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            </div>
            <p> Common Tests</p>
            <table class="table table-primary table-striped ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Test</th>
      <th scope="col">Price</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td colspan=2><b>SYPHILIS</b></td>
      
      
    </tr>
    <tr>
      <th scope="row"></th>
      <td>VDRL</td>
      <td>25,000 each</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>TPPHA</td>
      <td>25,000 each</td>
      
    </tr>
    <tr>
      <th scope="row"></th>
      <td>RPR</td>
      <td>25,000 each</td>
      
    </tr><tr>
      <th scope="row">2</th>
      <td colspan=2><b>TYPHOID</b></td>
      
      
    </tr><tr>
      <th scope="row"></th>
      <td>Widal</td>
      <td>10,000 each</td>
      
    </tr><tr>
      <th scope="row"></th>
      <td>Salmonella</td>
      <td>15,000</td>
      
    </tr><tr>
      <th scope="row">3</th>
      <td><b>Malaria RDT</b></td>
      <td>5,000</td>
      
    </tr><tr>
      <th scope="row">4</th>
      <td colspan=2><b>HIV</b></td>
      
      
    </tr><tr>
      <th scope="row"></th>
      <td>Determine</td>
      <td>10,000</td>
      
    </tr>
    </tr><tr>
      <th scope="row"></th>
      <td>Stat park</td>
      <td>10,000 each</td>
      
    </tr>
    </tr><tr>
      <th scope="row"></th>
      <td>SD Bioline</td>
      <td>10,000 each</td>
      
    </tr></tr><tr>
      <th scope="row">5</th>
      <td colspan=2><b>Self testing kit</b></td>
      
      
    </tr></tr><tr>
      <th scope="row"></th>
      <td>HCG</td>
      <td>10,000 each</td>
      
    </tr></tr><tr>
      <th scope="row"></th>
      <td>Uristicks</td>
      <td>5,000 each</td>
      
    </tr>

    </tr></tr><tr>
      <th scope="row"></th>
      <td>Blood grouping</td>
      <td>25,000 each</td>
      
    </tr>
    </tr></tr><tr>
      <th scope="row"></th>
      <td colspan=2><b>Ulcers</b></td>
      
      
    </tr>
    </tr></tr><tr>
      <th scope="row"></th>
      <td colspan=2>H. pylori antigen</td>
      
      
    </tr>
    </tr></tr><tr>
      <th scope="row"></th>
      <td colspan=2>H. pylori antibody</td>
      
      
    </tr>
    </tr></tr><tr>
      <th scope="row">6</th>
      <td><b>COVID antige test</b></td>
      <td>70,000</td>
      
    </tr>
  </tbody>
</table>
        </div>
        
    </div>
   
</div>
@endsection
