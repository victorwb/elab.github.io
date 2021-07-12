@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <p><b>Services</b></p>
                <ul>
                    <li><a href="/description">Dematology</a></li>
                    <li><a href="/description">Microbiology</a></li>
                    <li><a href="/description">Clinical Chemistry</a></li>
                </ul>
                <p> <b>Semi complex Tests</b></p>
                
                <table class="table table-primary table-striped ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Test</th>
      <th scope="col">Price</th>
      
    </tr>
  </thead>
  <tbody>
<!-- clickable row    -->
    <tr class='clickable-row' data-href='url://'>
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

<p> <b>Complex Tests</b></p>
                
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
      <td>CBC</td>
      <td>25000</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>RFTs</td>
      <td>20,000 each</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>LFTs</td>
      <td>20,000 each</td>
      
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>PFTs</td>
      <td>20,000 each</td>
      
    </tr><tr>
      <th scope="row">5</th>
      <td>Electrolytes</td>
      <td>80,000</td>
      
    </tr><tr>
      <th scope="row">6</th>
      <td>Hormone profile 20 each</td>
      <td>20,000 each</td>
      
    </tr><tr>
      <th scope="row">7</th>
      <td>ELISA</td>
      <td>200,000</td>
      
    </tr><tr>
      <th scope="row">8</th>
      <td>PCR</td>
      <td>250,000</td>
      
    </tr><tr>
      <th scope="row">9</th>
      <td>DNA testing</td>
      <td>500,000</td>
      
    </tr><tr>
      <th scope="row">10</th>
      <td>PSA</td>
      <td>30,000</td>
      
    </tr>
    </tr><tr>
      <th scope="row">11</th>
      <td>Tumor makers</td>
      <td>30,000 each</td>
      
    </tr>
  </tbody>
</table>

<p> <b>Rapid Tests</b></p>
                
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
</div>

<script>
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
</script>
@endsection
