@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class='myDiv' >
                <p>About Us</p>
                </div>
                <div class='myDiv' >
                <p>CEO and Founder</p>
                <img  style="float:right" src={{ asset('img/labs.webp') }} alt="default photo" width="200" height="200" class=" img-fluid" >
            
                <p>Dr. Ebalu Elvis</p>
                <p>Email: </p>
                <p>Phone number:</p>
                
                </div>
                <div class='myDiv'>
                <p>Co-Founder</p>
                <img style="float:right" src={{ asset('img/me.jpeg') }} alt="default photo" width="200" height="200" class=" img-fluid">
                
                <p>Eng Victor Waiswa</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
