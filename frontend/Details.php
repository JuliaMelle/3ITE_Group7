<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/detabout.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Details About the Org</title>
</head>
<body>

    <!-- Navbar -->
    <?php include('../components/navbar.php'); ?>

     <!-- Back Button -->
     <div class="container mt-3">
        <button class="btn btn-secondary float-end">Back</button>
    </div>

    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <!-- Organization Image -->
                <div class="orgimg">
                    <a href="#">
                        <img src="../assets/sample.jpg">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="nameorg">
                    <h1 class="text-center">TomasinoWeb</h1>
                    <h3 class="text-center">wgfuihfwueifgwa</h3>
                    <p class="text-center">TomasinoWeb is the premier digital media organization of the University of Santo Tomas joined by students who are immensely interested in multimedia journalism. Its primary goal as a student publication is to deliver relevant information to the Thomasian community through online media.</p>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-warning mt-3">APPLY NOW</button>
                </div>
            </div>
        </div>

        <div class="textarea mt-3">
            <h1>TEXT</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

            <h1>TEXT</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>

    <!-- Bootstrap JavaScript (optional, but required for some components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
