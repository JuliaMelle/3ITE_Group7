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
    <link rel="stylesheet" href="../css/register.css" />
    <!-- BOOTSTAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>

<body class="body">
    <div class="parent">
        <div class=" mid_card card card_width ">
            <div class="card-body card_width_body text_left">
            <div style="text-align: center;">
                 <h3 class="card-title font_bold">APPLICATION FORM</h3>
            </div>
                <p><br>📝 Have you made the decision to become a part of our dynamic organization? If so, we're thrilled to have you on board! </br>  
                <br>Fill out the form below and take the first step on your exciting journey with us. </br> 
                <br>🔮 Fill out the form below and let destiny guide your way: Apply Now 🔮 </br> 
                <br>🌟 Good luck, and let's make great things happen together! 🌟 </br>
                <br>🌈 Adventure awaits! 🌈</br>
                </p>
                <!-- <p class="card-text">WELCOME TO UST</p> -->
                <form class="form-flex column" id="regForm" action="../backend/register_data.php" method="post" enctype="multipart/form-data">
                    <input class="form-control margin_forms font_bold" type="text" placeholder="FIRST NAME" aria-label="default input example" name="first_name" required>
                    <input class="form-control margin_forms font_bold" type="text" placeholder="LAST NAME" aria-label="default input example" name="last_name" required>
                    <input class="form-control margin_forms font_bold" type="text" placeholder="+63" aria-label="default input example" name="number" required> 
                     <!-- <input class="form-control margin_forms font_bold" type="text" placeholder="YEAR LEVEL" aria-label="default input example" name="yrlevel"> -->
                    <select class="form-select font_bold gray margin_forms" placeholder="YEAR LEVEL" name="yrlevel" >
                        <option selected>YEAR LEVEL</option>
                        <option value="1ST YEAR" name="yrlevel">1ST YEAR</option>
                        <option value="2ND YEAR" name="yrlevel">2ND YEAR</option>
                        <option value="3RD YEAR" name="yrlevel">3RD YEAR</option>
                        <option value="4TH YEAR" name="yrlevel">4TH YEAR</option>
                        <option value="5TH YEAR" name="yrlevel">5TH YEAR</option>
                    </select>
                    <!-- <input class="form-control margin_forms font_bold" type="text" placeholder="DEGREE PROGRAM" aria-label="default input example" name="program"> -->
                    <select class="form-select font_bold gray margin_forms" placeholder="DEGREE PROGRAM:" name="program" >
                        <option selected>DEGREE PROGRAM</option>
                        <option value="AMV COLLEGE OF ACCOUNTANCY" name="program">AMV COLLEGE OF ACCOUNTANCY</option>
                        <option value="FACULTY OF ARTS AND LETTERS" name="program">FACULTY OF ARTS AND LETTERS</option>
                        <option value="FACULTY OF ENGINEERING" name="program">FACULTY OF ENGINEERING</option>
                        <option value="FACULTY OF MEDICINE AND SURGERY" name="program">FACULTY OF MEDICINE AND SURGERY</option>
                        <option value="FACULTY OF PHARMACY" name="program">FACULTY OF PHARMACY</option>
                        
                        <option value="COLLEGE OF ARCHITECTURE" name="program">COLLEGE OF ARCHITECTURE</option>
                        <option value="COLLEGE OF COMMERCE AND BUSINESS ADMINISTRATION" name="program">COLLEGE OF COMMERCE AND BUSINESS ADMINISTRATION</option>
                        <option value="COLLEGE OF EDUCATION" name="program">COLLEGE OF EDUCATION</option>
                        <option value="COLLEGE OF FINE ARTS AND DESIGN" name="program">COLLEGE OF FINE ARTS AND DESIGN</option>
                        <option value="COLLEGE OF INFORMATION AND COMPUTING SCIENCE" name="program">COLLEGE OF INFORMATION AND COMPUTING SCIENCE</option>
                        <option value="COLLEGE OF NURSING" name="program">COLLEGE OF NURSING</option>
                        <option value="COLLEGE OF TOURISM AND HOSPITALITY MANAGEMENT" name="program">COLLEGE OF TOURISM AND HOSPITALITY MANAGEMENT</option>
                    </select>

                    <input class="form-control margin_forms font_bold" type="text" placeholder="EMAIL ADDRESS" aria-label="default input example" name="email" required>
                    <div class="mb-3">
                        <label for="formFile" class="form-label text_left font_bold">CURRICULUM VITAE</label>
                        <input class="form-control" type="file" id="formFile" name="image"></input>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label text_left font_bold">MYUSTE REGFORM</label>
                        <input class="form-control" type="file" id="formFile" name="image"></input>
                    </div>
            </div>
            <div class="button_position">
                <button type="submit" name="Submit" class="btn btn-warning  button_size font_bold register">SUBMIT APPLICATION</button>
            </div>
        </div>
        </form>

    </div>

    <script src="" async defer></script>
</body>
</html>