@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>About Page</h1>
  <p>Welcome to my page</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Learn Laravel</h3>
      <p>Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. </p>
      <p>Laravel attempts to take the pain out of development by easing common tasks used in most web projects.</p>
    </div>
    <div class="col-sm-4">
      <h3>Learn Bootstrap</h3>
      <p>Bootstrap is a free front-end framework for faster and easier web development
        Bootstrap includes HTML and CSS based design templates for typography, forms, buttons, tables, navigation, modals, image carousels and many other, as well as optional JavaScript plugins
        Bootstrap also gives you the ability to easily create responsive designs</p>
      
    </div>
    <div class="col-sm-4">
      <h3>Learn Node Js</h3>        
      <p>As an asynchronous event-driven JavaScript runtime, Node.js is designed to build scalable network applications. In the following "hello world" example, many connections can be handled concurrently. </p>
      <p>Upon each connection, the callback is fired, but if there is no work to be done, Node.js will sleep.</p>
    </div>
  </div>
</div>
<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
    <h3>THE BAND</h3>
    <p><em>We love music!</em></p>
    <p>We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <br>
    <div class="row">
      <div class="col-sm-4">
        <p class="text-center"><strong>Name</strong></p><br>
        <a href="#demo" data-toggle="collapse">
          <img src="bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
        </a>
        <div id="demo" class="collapse">
          <p>Guitarist and Lead Vocalist</p>
          <p>Loves long walks on the beach</p>
          <p>Member since 1988</p>
        </div>
      </div>
      <div class="col-sm-4">
        <p class="text-center"><strong>Name</strong></p><br>
        <a href="#demo2" data-toggle="collapse">
          <img src="bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
        </a>
        <div id="demo2" class="collapse">
          <p>Drummer</p>
          <p>Loves drummin'</p>
          <p>Member since 1988</p>
        </div>
      </div>
      <div class="col-sm-4">
        <p class="text-center"><strong>Name</strong></p><br>
        <a href="#demo3" data-toggle="collapse">
          <img src="bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
        </a>
        <div id="demo3" class="collapse">
          <p>Bass player</p>
          <p>Loves math</p>
          <p>Member since 2005</p>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
@endsection