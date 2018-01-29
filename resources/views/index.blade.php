@extends('layouts.main')

@section('title', 'Homepage')

@section('stylesheets')

  <link rel="stylesheet" href="{{ asset('css/index.css') }}">


@endsection


@section('content')

  <div class="content">

    <div class="bg" id="intro">

      <div class="section center-align intro-content flex-container">

        <div>
          <h1>Save the smart way</h1>
        </div>

        <div>
          <a class="waves-effect waves-light btn-large"><i class="material-icons right">arrow_drop_down</i>Learn More</a>
        </div>
        
      </div>

    </div>

    <div class="container-fluid" id="about">

      <div class="flex-container">
        <div>
          <h1>About</h1>
          <p>Smart Saver is your online tool that helps you keep track of your savings saving goals.</p>
        </div>
        <div></div>
        <div></div>
        <div></div>
        <div>
          <p>Saving is now convenient. Get Motivated, Start saving the smart way!</p>
        </div>
      </div>
      
    </div>

   

    
    
  </div>

@endsection
