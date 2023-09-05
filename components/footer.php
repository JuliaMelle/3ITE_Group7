<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/global.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="../components/navbar.js"></script>
        <script src="https://code.jquery.com/jquery-migrate-3.4.1.js"></script>
        <title>Footer</title>
    </head>
    <body>

        <!-- links -->
        <nav class = "container-fluid pt-3 bg-black">
            <div class = "row g-3 mx-5 my-3 ">
                <div class="col-4">
                    <ul>
                        <li class="lmao">
                            <a href="../frontend/index.php" class="logo">
                                <img src="../assets/Logo.png" style = "max-width: 200px">
                            </a>
                        </li>
                    </ul>
                    <ul class = "list-group copyright">
                        <li class = "list-group-item bg-transparent text-light">© 2023 Copyright: Thomasian Orglink</li>
                    </ul>
                </div>
                <div class="col-2">
                    <div class="items">
                        <ul class = "list-group">
                            <li class = "list-group-item bg-transparent"><a class = "link-light" href="../frontend/index.php">HOME</a></li>
                            <li class = "list-group-item bg-transparent"><a class = "link-light"  href="../frontend/view.php">ORGS</a></li>
                            <li class = "list-group-item bg-transparent"><a class = "link-light"  href="../frontend/aform.php">APPLY</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-2">
                    <div class="items">
                        <ul class = "list-group">
                            <li class = "list-group-item bg-transparent"><a class = "link-light" href="../frontend/index.php">ABOUT</a></li>
                            <li class = "list-group-item bg-transparent"><a class = "link-light"  href="../frontend/view.php">CONTACT US</a></li>
                            <li class = "list-group-item bg-transparent"><a class = "link-light"  href="../frontend/aform.php">RESOURCES</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-2">
                    <div class="items">
                        <ul class = "list-group">
                            <li class = "list-group-item bg-transparent"><a class = "link-light" href="../frontend/index.php">SUPPORT</a></li>
                            <li class = "list-group-item bg-transparent"><a class = "link-light"  href="../frontend/view.php">SUBMIT A TICKET</a></li>
                            <li class = "list-group-item bg-transparent"><a class = "link-light"  href="../frontend/aform.php">AFFILIATES</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-2">
                    <div class="items">
                        <ul class = "list-group">
                            <li class = "list-group-item bg-transparent"><a class = "link-light" href="../frontend/index.php">FAQS</a></li>
                            <li class = "list-group-item bg-transparent"><a class = "link-light"  href="../frontend/view.php">PRIVACY POLICY</a></li>
                            <li class = "list-group-item bg-transparent"><a class = "link-light"  href="../frontend/aform.php">T&C</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        <!-- horizontal rule -->
            <div class="row row-cols-1 row-cols-md-1 g-3 mx-4 my-1 flex_card">
                <div class="col">
                    <hr class = "border border-4 rounded-pill border-warning">
                </div>
            </div>
            
        <!-- socials -->
            <div class = "row g-3 mx-5 my-3">
                <div class="col d-flex justify-content-evenly mb-3">
                    <a href=""><img style = "max-width: 30px" src ="../assets/twitter.png"></a>
                    <a href=""><img style = "max-width: 30px" src ="../assets/fb.png"></a>
                    <a href=""><img style = "max-width: 30px" src ="../assets/ig.png"></a>
                </div>
            </div>
        </nav>
        
    </body>
</html>