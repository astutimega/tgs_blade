@extends('layouts.app')
@section('title','Portfolio')
@section ('content')
<div class="jumbotron text-center">
    <img src="img/1.jpg" class="img-circle" class="text-center">
    <h1>Do Kyung Soo</h1>
    <h2>Artist | Actor | EXO</h2>
  </div>



  
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">EXO-L</h2>
          <hr>
        </div>
      </div>

     


      <div class="row">
        <div class="col-sm-5 col-sm-offset-1">
          <p class="pkiri">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-sm-5">
          <p class="pkanan">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </section>

     


@stop

@section('js')
    <script>
        console.log('hello'); 
    </script>
@stop