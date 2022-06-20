<!DOCTYPE html><!-- This is the master DetailView for the Items for pagination-->
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Munich72 Collection</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!--Unser Stylesheet in public/css/styleheet-->
  <link rel="stylesheet" href="/css/stylesheet.css">


  <!--Fonts Roboto-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

</head>

<body>
  <header>

    <nav class="navbar col-sm-12">
      <div class="container col-sm-1">
        <a class="navbar-brand" href="/index"><img src="/img/main/m72-logo.png" width="70" height="70" alt="munich-logo"></a>
      </div>

      <div class="col-sm-11">
        <large>Munich 1972 Olympic Games Poster</large>
      </div>
    </nav>

  </header>

  <!--Here is the master for the Detail View of one item-->
  <div class="container">

    <div class="row">
    <!-- Left Column -->
        <div class="col-sm-6">
        <div class="leftItem">
        <img src="/img/main/m72-archery.png" alt="Munich Olympics 1972 - Archery">
      </div>
    </div>
  </div>



</body>

<hr>

<footer>

  <div class="container">
    <div class="row">
      <div class="col-sm">
        <!--HERE COMES THE Footer Linked Page with optional transistion-->
        <p>All rights reserved 2022. Website by Lu Meili and Chantal Genoud for Oppurtinty Zurich. <a href="empty">Here are more Information about the Design Team.</a></p>
      </div>
    </div>
  </div>
</footer>

</html>