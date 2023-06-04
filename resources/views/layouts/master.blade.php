<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
          body {
    /* font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7; */
  }
  .bg-4 {
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
    height: 10%;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
    text-align: center;
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 {
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 {
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 {
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
        </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Unknown Page')</title>
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Home</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/category/id">Category</a></li>
          <li><a href="/contact-me">Contact Us</a></li>
          <li><a href="{{ route("abbas") }}">About Us</a></li>
        </ul>
      </div>
    </div>
  </nav>
    {{-- Start Nav Bar --}}
    {{-- @include("layouts.navbar") --}}

    {{-- End Nav Bar --}}
@yield('contact')
<footer class="container-fluid bg-4 text-center">
    <p>Bootstrap Theme Made By <a href="https://beconnected-me.com">www.beconnected.com</a></p>
  </footer>
</body>
</html>
