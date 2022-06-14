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
    <div class="row">
      <div class="col-sm-10 p-3">
        <h1>Munich 1972 Olympic Games Posters</h1>
      </div>
      <div class="col-sm-2 p-3">
        <img src="/img/main/m72-logo.png" alt="logo">
      </div>
    </div>
</header>


  <!--Here is the 1 row containing 2 pictures with padding according to mock-up-->
  <div class="container">
    <div class="row">
        <div class="col-sm-6">
          <div class="leftItem">
            <p>
              <img src="/img/main/m72-archery.png" alt="archery">
            Poster archery
            </p>
          </div>
        </div>  
  
      <div class="col-sm-6">
        <div class="rightItem">
          <img src="/img/main/m72-basketball.png" alt="basketball">
        <div>
      </div>
    </div>
  </div>

    
</body>
</html>