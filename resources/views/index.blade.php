<!DOCTYPE html>
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

    <div class="container">
      <nav class="navbar">
        <p #site-title>Munich 1972 Olympic Games Posters</p>
        <img src="/img/main/m72-logo.png" alt="" width="70" height="70" class="d-inline-block align-text-right">
      </nav>
    </div>

  </header>
  <!-- Site header alternative code
          <h1 class="siteTitle">Munich 1972 Olympic Games Posters</h1>
        </div>
      </div>


      <nav class="navbar navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="/img/main/m72-logo.png" alt="" width="70" height="70">
          </a>
        </div>
      </nav>-->




  <!--Here is the 1 row containing 2 pictures with padding according to mock-up-->
  <div class="container">
    <!-- this is whats generates the list -->
    <?php $count = -1; ?>
    @foreach ($posters as $poster)
    <?php $count = $count + 1; ?>

    @if($count % 2 == 0) <!-- EVEN NUMBERS -->
    <div class="row">
      <!-- Left Column -->
      <div class="col-sm-6">
        <div class="leftItem">
          <img src="/img/main/{{$poster->image}}">
          <!--alt="_____________"-->
          <figcaption>{{$poster->sport}} poster</figcaption>
        </div>
      </div>
      @else <!-- ODD NUMBERS -->
      <!-- Right Column -->
      <div class="col-sm-6">
        <div class="rightItem">
          <img src="/img/main/{{$poster->image}}">
          <!--alt="_____________"-->
          <figcaption>{{$poster->sport}} poster</figcaption>
        </div>
      </div>
    </div>
    @endif
    @endforeach


    <!-- OLDER FORM -->


    <!--
Here is the 2 row containing 2 pictures with padding according to mock-up
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="leftItem">
            <img src="/img/main/m72-rowing.png" alt="rowing" title="This is a poster of the Summer Olympics 1972 in Munich for archery.">
            <figcaption>Rowing poster</figcaption>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="rightItem">
            <img src="/img/main/m72-athletics.png" alt="athletics" title="This is a poster of the Summer Olympics 1972 in Munich for archery.">
            <figcaption>Athletics poster</figcaption>
            <div>
            </div>
          </div>
        </div>


Here is the 3 row containing 2 pictures with padding according to mock-up
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="leftItem">
Probably there will be a description of the image 
                <img src="/img/main/m72-archery.png" alt="archery" title="This is a poster of the Summer Olympics 1972 in Munich for archery.">
                <figcaption>__________ poster</figcaption>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="rightItem">
                <img src="/img/main/m72-basketball.png" alt="basketball">
                <figcaption>__________ poster</figcaption>
                <div>
                </div>
              </div>
            </div>

Here is the 4 row containing 2 pictures with padding according to mock-up
            <div class="container">
              <div class="row">
                <div class="col-sm-6">
                  <div class="leftItem">
Probably there will be a description of the image
                    <img src="/img/main/m72-archery.png" alt="archery" title="This is a poster of the Summer Olympics 1972 in Munich for archery.">
                    <figcaption>__________ poster</figcaption>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="rightItem">
                    <img src="/img/main/m72-basketball.png" alt="basketball">
                    <figcaption>__________ poster</figcaption>
                    <div>
                    </div>
                  </div>
                </div>
-->


</body>

<hr>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <!--HERE COMES THE Footer Linked Page with optional transistion-->
        <!--<p>All rights reserved 2022. Website by Lu Meili and Chantal Genoud for Oppurtinty Zurich. <a href="empty">Here are more Information about the Design Team.</a></p>-->
        <p>All rights reserved 2022. Website by Chantal Genoud and Lu Meili for Opportunity Zürich.
          <a href="empty">Here</a> you can find out who was the Munich 1972 Olympic Games branding design team.
        </p>
      </div>
    </div>
  </div>

</html>