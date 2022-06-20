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


  <!-- Old design template, can be deleted
    <div class="container">

      <div class="row">
          <div class="col-sm-6">
          <div class="leftItem">
          <img src="/img/main/m72-archery.png" alt="Munich Olympics 1972 - Archery">
          <figcaption>_____________ poster</figcaption>
        </div>
      </div>
    </div>
-->


  <!-- Here comes the code for the details-->
  <div class="container">

    <div class="row">
      <div class="col-sm">
        <div class="leftItem">
          <h3>{{$poster->id}}. <b>{{$poster->sport}}</h3><br>
          <img src="/img/main/{{$poster->image}}" alt="{{$poster->sport}}">
          <ul style="list-style-type:none;">
            <br>
            <li>Author: <b>{{$poster->author}}</b></li>
            <li>Media: <b>{{$poster->media}}</b></li>
            <li>Item#: [0{{$poster->number}}]</li>
          </ul>
        </div>
      </div>
    </div>
    </div>

</body>

<hr>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm">
                <p>All rights reserved <b>2022</b>. Website by Chantal Genoud and Lu Meili for Opportunity Zürich.
          <a href="empty">Here</a> you can find out who was the Munich 1972 Olympic Games branding design team.
        </p>
      </div>
    </div>
</footer>

  
</html>