<!DOCTYPE html>
<!-- This is the master DetailView for the Items for pagination-->
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
    <div class="row">
      <div class="col-sm-9 p-3">
        <!-- Title is provisory-->
        <h1>Munich 1972 Olympic Games Posters - Detail View</h1>
      </div>
      <div class="col-sm-3 p-4">
        <img src="/img/main/m72-logo.png" alt="logo">
      </div>
    </div>
</header>

<div class="container">
  <div class="row">
    <div class="col-sm-6">
      Here comes an Image with margin left: 10px, margin top: 10px, margin buttom: 10px
  </div>  
    <div class="col-sm-6">
      Here comes an Image with margin right: 10px, margin top: 10px, margin buttom: 10px
    </div> 
  </div>
</div> 

  <!--Here is the code for the Design Team-->
  <div class="container">
    <div class="row">
        <div class="col-sm-12">
          Here comes the <picture></picture>
          <img src="/img/main/m72-archery.png" alt="Munich Olympics 1972 - Archery">
          <h2>LOREM IPSUM DOLOR Titel DESIGN TEAM</h2>
          <p>Here comes the description. LOREM IPSUM DOLOR. LOREM IPSUM DOLOR. LOREM IPSUM DOLOR. LOREM IPSUM DOLOR. LOREM IPSUM DOLOR. LOREM IPSUM DOLOR. LOREM IPSUM DOLOR. LOREM IPSUM DOLOR. LOREM IPSUM DOLOR. LOREM IPSUM DOLOR. LOREM IPSUM DOLOR.</p>
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
        <p>All rights reserved 2022. Website by Lu Meili and Chantal Genoud for Oppurtinty Zurich. Here are more Information about the Design Team.</p>
      </div>
    </div>
  </div>
</footer>
</html>