@extends('layouts.main')

@section('title', 'Homepage')

@section('stylesheets')


@endsection


@section('content')

  <div class="content">

    {{-- Intro content --}}
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


    {{-- About coontent --}}
    <div class="content-div" id="about">

      <div class="section center-align flex-container">

        <div class="align-content-center">
          <h1 style="padding-bottom: 50px;">About</h1>
          <h5 style="padding-bottom: 50px;">Smart Saver is your online tool that helps you keep track of your saving goals.</h5>

          <h5>Saving is now convenient. Get Motivated, Start saving the smart way!</h5>
        </div>

        <div class="row">
          <div class="col s6 m3">

            <img src="../img/shopping.jpg" style="width: 100%;">
            <img src="../img/food.jpg" style="width: 100%;">
            <img src="../img/watch.jpg" style="width: 100%;">
            
          </div>

          <div class="col s6 m3">

            <img src="../img/zebra.jpg" style="width: 100%;">
            <img src="../img/phone.jpg" style="width: 100%;">
            <img src="../img/travel_bank.jpg" style="width: 100%;">
            
          </div>

          <div class="col s6 m3">

            <img src="../img/shopping2.jpg" style="width: 100%;">
            <img src="../img/cookies.jpg" style="width: 100%;">
            <img src="../img/money.jpg" style="width: 100%;">
            
          </div>

          <div class="col s6 m3">

            <img src="../img/matoke.jpg" style="width: 100%;">
            <img src="../img/headphone.jpg" style="width: 100%;">
            <img src="../img/camera.jpg" style="width: 100%;">
            
          </div>
          
        </div>
      </div>
    </div>


    {{-- How it works content --}}
    <div class="content-div" id="how-it-works" style="background-color: #359AB0;">

      <div class="flex-container center-align">

        <div>
          <h1>How it Works</h1>

          <h5>It only takes five simple steps to save with SmartSaver</h5>
        </div>

        <div class="row">
          <div class="col s4">
            <ul>
              <li><i class="material-icons">add</i></li>
              <li><i class="material-icons">gps_fixed</i></li>
              <li><i class="material-icons">monetization_on</i></li>
              <li><i class="material-icons">poll</i></li>
              <li><i class="material-icons">notifications</i></li>
              <li><i class="material-icons">grade</i></li>
            </ul>
          </div>

          <div class="col s8">
            <ul>
              <li><h5>Add Goal</h5></li>
              <li><h5>Set Target</h5></li>
              <li><h5>Start saving</h5></li>
              <li><h5>Monitor Progress</h5></li>
              <li><h5>Get Notifications</h5></li>
              <li><h5>Achieve your Target</h5></li>
            </ul>
            
          </div>
        </div>
         
      </div>
    </div>

    {{-- Features --}}
    <div id="features">

      <div class="flex-container center-align">
        
        <div class="section">
          <h1>Features</h1>
        </div>

        <div class="section">
          <div class="row">

            <div class="col s12 m4">
              <div class="card medium">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="../img/watch.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Data Visualization<i class="material-icons right">more_vert</i></span>
                  <p>Visualize your data</p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                  <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="card medium">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="../img/watch.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Lock Savings<i class="material-icons right">more_vert</i></span>
                  <p>Tame your spending character</p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                  <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="card medium">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="../img/watch.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Data Analysis<i class="material-icons right">more_vert</i></span>
                  <p>Make informed money decisions</p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                  <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
              </div>
            </div>

        </div>
        </div>

      </div>      
    </div>

    {{-- Testimonials --}}
    <div class="bg-testimonials" id="testimonials">

      <div class="section content-div center-align text-block">

        
        
      </div>
    </div>


    {{-- SignUp --}}
    <div class="content-div" id="signup">
      
    </div>
    
  </div>

@endsection
