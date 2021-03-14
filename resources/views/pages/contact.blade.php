@extends('layouts.app')
@section('title','Portfolio')
@section ('content')

<section class="contact" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">Contact</h2>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control" placeholder="enter your name">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" placeholder="enter your email">
            </div>
            <div class="form-group">
              <label for="tlp">Phone Number</label>
              <input type="tel" name="tlp" class="form-control" placeholder="enter a phone number">
            </div>

            <select class="form-control">
              <option>--- choose category ---</option>
              <option>makan bang</option>
              <option>kopi dangdut</option>
            </select>

            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" rows="10" placeholder="input message"></textarea>
            </div>

            <div class="text-right"><button>enter</button></div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir kontak -->

  <!-- footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <p class="text-center">Copyright 2021 | built with <i class="glyphicon glyphicon-heart "></i> by. Mega Putri
          </p>
        </div>
      </div>
    </div>
  </footer> -->
@stop