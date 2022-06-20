<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Munich 1972 Olympic Games Posters Collection</title>

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
        <a class="navbar-brand"><img src="/img/main/m72-logo.png" width="70" height="70" alt="munich-logo" /></a>
      </div>

      <div class="col-sm-11">
        <large>Munich 1972 Olympic Games Poster</large>
      </div>
    </nav>

  </header>

  <!--Here is the 1 row containing 2 pictures with padding according to mock-up-->
  <div class="container">
    <!-- this is whats generates the list -->
    <?php $count = -1; ?>
    @foreach ($posters as $poster)
    <?php $count = $count + 1; ?>

    @if($count % 2 == 0)
    <!-- EVEN NUMBERS -->
    <div class="row">
      <!-- Left Column -->
      <div class="col-sm-6">
        <div class="leftItem">
          <!-- here comes the HTML link for the details-->
          <a href="/details/{{$poster->id}}">
          <img src="/img/main/{{$poster->image}}"></a>
          <alt="{{$poster->sport}}">
            <figcaption>{{$poster->id}}. <b>{{$poster->sport}} </b>poster</figcaption>
        </div>
      </div>

      @else
      <!-- ODD NUMBERS -->
      <!-- Right Column -->
      <div class="col-sm-6">
        <div class="rightItem">
          <!-- here comes the HTML link for the details-->
          <a href="/details/{{$poster->id}}">
          <img src="/img/main/{{$poster->image}}"></a>
          <alt="{{$poster->sport}}">
            <figcaption>{{$poster->id}}. <b>{{$poster->sport}} </b>poster</figcaption>
       
        </div>
      </div>
    </div>
    @endif
    @endforeach
  </div>

</body>

<hr>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm">
                <p>All rights reserved <b>2022</b>. Website by Chantal Genoud and Lu Meili for Opportunity Zürich.
          <a href="/historypage">Here</a> you can find out who was the Munich 1972 Olympic Games branding design team.
        </p>
      </div>
    </div>
  </div>
</footer>

  
</html>