<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Thomasian OrgLink</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
 <!-- CSS -->
  <link rel="stylesheet" href="../css/global.css" />
  <link rel="stylesheet" href="../css/home.css" />
  <!-- BOOTSTAP 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!-- FAVICON -->
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/logoicon.png">
</head>

<body style="height: 100vh">
  <?php 
  include('../components/navbar.php');?>
  <!-- carousel -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../assets/2.png" class="d-block w-100 filter" alt="..." />
        <div class="carousel-caption d-none d-md-block caption_carousel">
          <b class="welcome">WELCOME TO THOMASIANS!</b>

          <h1 class="Head_carousel_text">
            To form competent and compassionate persons committed to serve the
            Church, the nation, and the global community.
          </h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../assets/2.png" class="d-block w-100 filter" alt="..." />
        <div class="carousel-caption d-none d-md-block caption_carousel">
          <b class="welcome">WELCOME TO THOMASIANS</b>

          <h1 class="Head_carousel_text">
            To form competent and compassionate persons committed to serve the
            Church, the nation, and the global community.


          </h1>

        </div>
      </div>
      <div class="carousel-item">
        <img src="../assets/2.png" class="d-block w-100 filter" alt="..." />
        <div class="carousel-caption d-none d-md-block caption_carousel">
          <b class="welcome">WELCOME TO THOMASIANS</b>

          <h1 class="Head_carousel_text">
            To form competent and compassionate persons committed to serve the
            Church, the nation, and the global community.
          </h1>

        </div>

      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="parent">
    <div class="mid">
      <div class="button_position">
      <a href = "../frontend/register.php" class="btn btn-dark  button_mid button_view" formaction="../frontend/register.php"> GET STARTED </a>
       <a href = "../frontend/view.php" class="btn btn-dark  button_mid button_view" formaction="../frontend/view.php"> VIEW ORGS </a>
      </div>
      <hr class="new4" />
      <h1 class="head_text">Exploring New Horizons? Discover Organizations Here!</h1>
      <p class="p_text">

      Embark on a journey of personal and professional growth as you explore a wealth of organizations waiting to be discovered.
      There are organizations out there that are a perfect match, ready to help you hone your talents and waiting to harness your potential. 
      So, dive into this world of opportunities, find the organizations that resonate with your aspirations, and let your journey towards skill 
      enhancement and success begin today!
      </p>
    </div>
  </div>
  
  <!-- cards -->
  <div class="row row-cols-1 row-cols-md-3 g-3 mx-4 my-3 flex_card">
    <div class="col">
     <div class="card flex_card my-2 h-100">
        <img src="../assets/unesco.jpg" class="card-img-top" alt="...">
        <div class="card-body display_mid" style="width: 100%!important;">
          <!-- <h5 class="card-title" >Card title</h5> -->
          <p class="card-text"> <b> </b></p>
          <button type="button" class="btn btn-dark button_size">READ MORE</button>
        </div>
      </div>
    </div>

    <div class="col">
     <div class="card flex_card my-2 h-100">
        <img src="../assets/tomweb1.jpg" class="card-img-top" alt="...">
        <div class="card-body display_mid" style="width: 100%!important;">
          <!-- <h5 class="card-title" >Card title</h5> -->
          <p class="card-text"> <b> </b></p>
          <button type="button" class="btn btn-dark  button_size">READ MORE</button>
        </div>
      </div>
    </div>

    <div class="col">
     <div class="card flex_card my-2 h-100">
        <img src="../assets/ustbecarios.jpg" class="card-img-top" alt="...">
        <div class="card-body display_mid " style="width: 100%!important;">
          <!-- <h5 class="card-title" >Card title</h5> -->
          <p class="card-text"> <b> </b></p>
          <button type="button" class="btn btn-dark  button_size">READ MORE</button>
        </div>
      </div>
    </div>

    <div class="col">
     <div class="card flex_card my-2 h-100">
        <img src="../assets/sgawi.jpg" class="card-img-top" alt="...">
        <div class="card-body display_mid" style="width: 100%!important;">
          <!-- <h5 class="card-title" >Card title</h5> -->
          <p class="card-text"> <b> </b></p>
          <button type="button" class="btn btn-dark  button_size">READ MORE</button>
        </div>
      </div>
    </div>

    <div class="col">
     <div class="card flex_card my-2 h-100">
        <img src="../assets/teatrotomasino.png" class="card-img-top" alt="...">
        <div class="card-body display_mid" style="width: 100%!important;">
          <!-- <h5 class="card-title" >Card title</h5> -->
          <p class="card-text"> <b> </b></p>
          <button type="button" class="btn btn-dark  button_size">READ MORE</button>
        </div>
      </div>
    </div>

    <div class="col">
     <div class="card flex_card my-2 h-100">
        <img src="../assets/musicat.jpg" class="card-img-top" alt="...">
        <div class="card-body display_mid" style="width: 100%!important;">
          <!-- <h5 class="card-title" >Card title</h5> -->
          <p class="card-text"> <b> </b></p>
          <button type="button" class="btn btn-dark  button_size">READ MORE</button>
        </div>
      </div>
    </div>

  </div>
  <!------->

  <div class="end"></div>

  <script src="" async defer></script>
</body>

</html>
