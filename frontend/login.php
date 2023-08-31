<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thomasian OrgLink</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/login.css" />
    <!-- BOOTSTAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- FAVICON -->
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/logoicon.png">
</head>

<body class="body">
  <?php
    include('../components/navbar.php');
    ?>
    <div class="parent">
        <?php
        if (isset($_GET['fillout'])) { //check if authenticate key exists in URL
            if ($_GET['fillout'] == "false") { ?>

                <!-- <div class="alert">
                        <span class="closebtn">&times;</span>  
                        <strong style="color:white">Please fill out</strong> 
                        </div> -->

                <div class="alert alert-warning d-flex align-items-center capsule" role="alert">
                    <div>
                        Please fill out
                    </div>
                </div>
        <?php
            }
        }
        ?>
        <?php
        if (isset($_GET['password'])) { //check if authenticate key exists in URL
            if ($_GET['password'] == "false") { ?>
                <div class="alert alert-warning d-flex align-items-center capsule" role="alert">
                    <div>
                        Incorrect Username / Password</strong> <br>Please try again
                    </div>
                </div>

        <?php
            }
        }
        ?>
        <div class=" mid_card card card_width ">
            <div class="card-body card_width_body text_left">
                <h3 class="card-title font_bold create_acc">WELCOME THOMASIANS!</h3>
                <!-- <p class="card-text">WELCOME TO UST</p> -->
                <form action="../backend/authenticate.php" method="post">
                    <input class="form-control margin_forms font_bold" type="text" placeholder="USERNAME" aria-label="default input example" name="username">

                    <input class="form-control margin_forms font_bold" type="password" placeholder="PASSWORD" aria-label="default input example" name="password">

            </div>
            <div class="button_position">
                <a href="register.php" type="button" class="btn btn-warning  button_size font_bold">REGISTER</button></a>
                <a href="register.php" type="button" class="btn btn-dark  button_size font_bold register">LOGIN</button></a>
                </form>

            </div>
        </div>

    </div>

    <script src="" async defer></script>


    <!-- <script src="" async defer></script> -->
    <script>
        var close = document.getElementsByClassName("closebtn");
        var i;

        for (i = 0; i < close.length; i++) {
            close[i].onclick = function() {
                var div = this.parentElement;
                div.style.opacity = "0";
                setTimeout(function() {
                    div.style.display = "none";
                }, 600);
            }
        }
    </script>
</body>

</html>
