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
  <link rel="stylesheet" href="../css/view.css" />
  <!-- BOOTSTAP 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!-- FAVICON -->
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/logoicon.png">
</head>

<body style="height: 100vh">
<?php 
      include('../components/navbarnew.php');?>

<!-- search bar -->

  <div class="row g-1 mx-5 mt-5 flex_card border border-2 border-dark rounded-pill h-10">

    <!-- dropdown -->
    <div class ="col-3 d-inline-flex justify-content-center">
      <div class="dropdown">
        <button class="btn btn-light text-dark dropdown-toggle" style = "width: 130%" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <b>Filter department</b>
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
    </div>

    <!-- vertical rule -->
    <div class ="col d-inline-flex justify-content-center">
      <div class = "vr mt-1 rounded bg-black" style="width: 10%; max-height: 75%"></div>
    </div>

    <!-- text field -->
    <div class="col-8 d-inline-flex">
          <input type="text" class="form-control mb-1 border border-0 " placeholder="What org are you looking for?">
    </div>

    <!-- search icon -->
    <div class = "col d-inline-flex justify-content-center">
    <img src="../assets/search.png" class="card-img-top me-2 mt-1" style="width: 85%; max-height: 75%" alt="...">
    </div>
  </div>

  <!-- org cards -->
  <div class="row row-cols-sm-1 row-cols-md-3 g-3 mx-5 my-3 flex_card">
    <div class="col">
      <div class="card flex_card border border-dark border-2 h-75 justify-content-center">
        <div class="card-body d-inline-flex">
          <img src="../assets/arts.png" class="card-img-top" style="width: 13%" alt="...">
            <!-- <h5 class="card-title" >Card title</h5> -->
            <div class = "card-body">
              <p class="card-text"> <b> FACULTY OF ARTS AND LETTERS  </b></p>
            </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card flex_card border border-dark border-2 h-75 justify-content-center">
        <div class="card-body d-inline-flex ">
          <img src="../assets/business.png" class="card-img-top me-3" style="width: 14%" alt="...">
            <!-- <h5 class="card-title" >Card title</h5> -->
              <p class="card-text"> <b>COLLEGE OF COMMERCE AND BUSINESS ADMINISTRATION </b></p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card flex_card border border-2 border-dark h-75 justify-content-center">
        <div class="card-body d-inline-flex">
          <img src="../assets/educ.png" class="card-img-top" style="width: 14%" alt="...">
            <!-- <h5 class="card-title" >Card title</h5> -->
            <div class = "card-body">
              <p class="card-text"> <b> COLLEGE OF EDUCATION </b></p>
            </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card flex_card border border-2 border-dark h-75 justify-content-center">
        <div class="card-body d-inline-flex">
        <img src="../assets/amv.png" class="card-img-top me-3" style="width: 14%" alt="...">
            <!-- <h5 class="card-title" >Card title</h5> -->
              <p class="card-text ms-2"> <b>AMV COLLEGE OF ACCOUNTANCY </b></p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card flex_card border border-2 border-dark h-75 justify-content-center ">
        <div class="card-body d-inline-flex ">
          <img src="../assets/tourism.png" class="card-img-top me-3" style="width: 14%" alt="...">
            <!-- <h5 class="card-title" >Card title</h5> -->
              <p class="card-text"> <b>COLLEGE OF TOURISM AND HOSPITALITY MANAGEMENT </b></p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card flex_card border border-2 border-dark h-75 justify-content-center">
        <div class="card-body d-inline-flex">
          <img src="../assets/arch.png" class="card-img-top" style="width: 14%" alt="...">
            <!-- <h5 class="card-title" >Card title</h5> -->
            <div class = "card-body">
              <p class="card-text"> <b>COLLEGE OF ARCHITECTURE </b></p>
            </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card flex_card border border-2 border-dark h-75 justify-content-center">
        <div class="card-body d-inline-flex ">
          <img src="../assets/cics.png" class="card-img-top me-3" style="width: 14%" alt="...">
            <!-- <h5 class="card-title" >Card title</h5> -->
              <p class="card-text"> <b>COLLEGE OF INFORMATION AND COMPUTING SCIENCES </b></p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card flex_card border border-2 border-dark h-75 justify-content-center">
        <div class="card-body d-inline-flex ">
          <img src="../assets/fine-arts.png" class="card-img-top me-3" style="width: 14%" alt="...">
            <!-- <h5 class="card-title" >Card title</h5> -->
              <p class="card-text"> <b>COLLEGE OF FINE ARTS AND DESIGN </b></p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card flex_card border border-2 border-dark h-75 justify-content-center">
        <div class="card-body d-inline-flex">
          <img src="../assets/eng.png" class="card-img-top" style="width: 14%" alt="...">
            <!-- <h5 class="card-title" >Card title</h5> -->
            <div class = "card-body">
              <p class="card-text"> <b>FACULTY OF ENGINEERING </b></p>
            </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card flex_card border border-2 border-dark h-75 justify-content-center">
        <div class="card-body d-inline-flex">
          <img src="../assets/nursing.png" class="card-img-top" style="width: 14%" alt="...">
            <!-- <h5 class="card-title" >Card title</h5> -->
            <div class = "card-body">
              <p class="card-text"> <b>COLLEGE OF NURSING </b></p>
            </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card flex_card border border-2 border-dark h-75 justify-content-center">
        <div class="card-body d-inline-flex">
          <img src="../assets/pharma.png" class="card-img-top" style="width: 14%" alt="...">
            <!-- <h5 class="card-title" >Card title</h5> -->
            <div class = "card-body">
              <p class="card-text"> <b>FACULTY OF PHARMACY </b></p>
            </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card flex_card border border-2 border-dark h-75 justify-content-center ">
        <div class="card-body d-inline-flex ">
          <img src="../assets/medicine.png" class="card-img-top me-3" style="width: 14%" alt="...">
            <!-- <h5 class="card-title" >Card title</h5> -->
              <p class="card-text"> <b>FACULTY OF MEDICINE AND SURGERY</b></p>
        </div>
      </div>
    </div>

  </div>
  <!------->

  <div class="row row-cols-1 row-cols-md-1 g-3 mx-5 my-1 flex_card">
    <div class="col">
      <div class="card flex_card border border-2 border-dark justify-content-center align-items-center h-75">
        <div class="card-body d-inline-flex">
          <img src="../assets/ust.png" class="card-img-top ms-auto" style="width: 9%" alt="...">
          <p class="card-text ms-3 me-auto mt-3"> <b>UNIVERSITY WIDE ORGANIZATIONS</b></p>
        </div>
      </div>
    </div>
  </div>

  <!-- horizontal rule -->
  <div class="row row-cols-1 row-cols-md-1 g-3 mx-4 my-1 flex_card">
    <div class="col">
      <hr class = "border border-4 rounded-pill border-warning">
    </div>
  </div>

  <!-- cards -->
  <div class="row row-cols-1 row-cols-md-3 g-3 mx-4 my-3 flex_card">

    <div class="col">
      <div class="card flex_card my-2 h-100">
        <img src="../assets/bgindex.jpg" class="card-img-top"  alt="...">
        <div class="card-body" style="width: 100%!important;">
          <h5 class="card-title"><b>TomasinoWeb</b></h5>
          <p class="card-text"> <b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, molestiae labore? A consequuntur nihil numquam quam ipsam ad ea ullam deserunt ut aut sed tempore ipsum, cupiditate hic sit explicabo. </b></p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card flex_card my-2 h-100">
        <img src="../assets/bgindex.jpg" class="card-img-top" alt="...">
        <div class="card-body" style="width: 100%!important;">
          <h5 class="card-title" >Card title</h5>
          <p class="card-text"> <b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, molestiae labore? A consequuntur nihil numquam quam ipsam ad ea ullam deserunt ut aut sed tempore ipsum, cupiditate hic sit explicabo. </b></p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card flex_card my-2 h-100">
        <img src="../assets/bgindex.jpg" class="card-img-top" alt="...">
        <div class="card-body" style="width: 100%!important;">
          <h5 class="card-title" >Card title</h5>
          <p class="card-text"> <b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, molestiae labore? A consequuntur nihil numquam quam ipsam ad ea ullam deserunt ut aut sed tempore ipsum, cupiditate hic sit explicabo. </b></p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card flex_card my-2">
        <img src="../assets/bgindex.jpg" class="card-img-top" alt="...">
        <div class="card-body" style="width: 100%!important;">
          <h5 class="card-title" >Card title</h5>
          <p class="card-text"> <b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, molestiae labore? A consequuntur nihil numquam quam ipsam ad ea ullam deserunt ut aut sed tempore ipsum, cupiditate hic sit explicabo. </b></p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card flex_card my-2">
        <img src="../assets/bgindex.jpg" class="card-img-top" alt="...">
        <div class="card-body" style="width: 100%!important;">
          <h5 class="card-title" >Card title</h5>
          <p class="card-text"> <b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, molestiae labore? A consequuntur nihil numquam quam ipsam ad ea ullam deserunt ut aut sed tempore ipsum, cupiditate hic sit explicabo. </b></p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card flex_card my-2">
        <img src="../assets/bgindex.jpg" class="card-img-top" alt="...">
        <div class="card-body" style="width: 100%!important;">
          <h5 class="card-title" >Card title</h5>
          <p class="card-text"> <b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, molestiae labore? A consequuntur nihil numquam quam ipsam ad ea ullam deserunt ut aut sed tempore ipsum, cupiditate hic sit explicabo. </b></p>
        </div>
      </div>
    </div>
    
  </div>

  <div class = "container-fluid bg-primary">

   </div>

  <div class="end"></div>

  <script src="" async defer></script>
</body>

</html>