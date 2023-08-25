
<?php
session_start();
if (isset($_POST['Submit'])) {

    //1. Setup Database connection
    require_once 'config.php';
    $upload_dir = '../assets/user_identification/';
    $upload_dir2 = '../assets/user_identification/';

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $number = $_POST['number'];
    $program = $_POST['program'];
    $email = $_POST['email'];
    $username = $_POST['username'];
   
    $password = md5($_POST['password']);

    $imgName = $_FILES['image']['name'];
    $imgTmp = $_FILES['image']['tmp_name'];
    $imgSize = $_FILES['image']['size'];

    $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

    $allowExt  = array('jpeg', 'jpg', 'png', 'gif');

    $userPic = time() . '_' . rand(1000, 9999) . '.' . $imgExt;

    // IMAGE SIZE
    if (in_array($imgExt, $allowExt)) {

        if ($imgSize < 5000000) {
            move_uploaded_file($imgTmp, $upload_dir . $userPic);
        } else {
            $errorMsg = 'Image too large';
        }
    } else {
        $errorMsg = 'Please select a valid image';
    }

    // 2nd image
    $imgName2 = $_FILES['image_v2']['name'];
    $imgTmp2 = $_FILES['image_v2']['tmp_name'];
    $imgSize2 = $_FILES['image_v2']['size'];

    $imgExt2 = strtolower(pathinfo($imgName2, PATHINFO_EXTENSION));

    $allowExt  = array('jpeg', 'jpg', 'png', 'gif');

    $userPic2 = time() . '_' . rand(1000, 9999) . '.' . $imgExt2;

    // IMAGE SIZE
    if (in_array($imgExt, $allowExt)) {

        if ($imgSize2 < 5000000) {
            move_uploaded_file($imgTmp2, $upload_dir2 . $userPic2);
        } else {
            $errorMsg = 'Image too large';
        }
    } else {
        $errorMsg = 'Please select a valid image';
    }

    if (empty($first_name) or empty($last_name) or empty($number)or empty($username) or empty($email) or empty($password) or empty($address)) {
        $errorMsg = 'There is a missing input. Cannot complete registration. Please try again.';
        header('Location: ../registration_form.php?authenticate=false');
    }

    $sql2 = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $result2 = mysqli_query($conn, $sql2);
    $count2 = mysqli_num_rows($result2);
    $row2 = mysqli_fetch_assoc($result2);

    if ($count2 > 0) {
        header('Location: ../registration_form.php?useremail=false');
    } else {
        $sql = "INSERT INTO `users`
        (`first_name`, `last_name`, `number`, `program`, `email`, `username`, `password`, `profile`) 
        VALUES (
            '" . $first_name . "',
            '" . $last_name . "',
            '" . $number . "',
            '" . $program . "',
            '" . $email . "',
            '" . $username . "',
            '" . $password . "',
            '" . $userPic . "'
            )";

        //3. Execute SQL
        if (mysqli_query($conn, $sql)) {
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header('Location:../frontend/index.php');        
        } else {
            header('Location: ../registration_form?authenticate=false');
        }

        mysqli_close($conn);
    }


    // $sql2 = "SELECT * FROM users";
    // if ($result = $conn->query($sql2)) {
    //     if ($result->num_rows > 0) {
    //         while ($row = $result->fetch_array()) {
    //             if (($username == $row['username'])) {
    //                 header('Location: ../registration_form.php?username=false');
    //             } 
    //             if (($email == $row['email'])) {
    //                 header('Location: ../registration_form.php?email=false');
    //             }
    //             if (($username == $row['username']) and ($email == $row['email'])) {
    //                 header('Location: ../registration_form.php?useremail=false');
    //             }
    //         }
    //     }
    // }



    $sql3 = "SELECT * FROM users";
    if ($result = $conn->query($sql3)) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                if (empty($first_name) or empty($username) or empty($email) or empty($password) or empty($address)) {
                    $errorMsg = 'There is a missing input. Cannot complete registration. Please try again.';
                    header('Location: ../registration_form.php?authenticate=false');
                }
                if (($username == $row['username'])) {
                    header('Location: ../registration_form.php?username=false');
                }
                if (($email == $row['email'])) {
                    header('Location: ../registration_form.php?email=false');
                }
                if (($username == $row['username']) and ($email == $row['email'])) {
                    header('Location: ../registration_form.php?useremail=false');
                }
                if (($username !== $row['username'] or $email !== $row['email']) and ($username == $row['username']) and ($email == $row['email'])) {
                    $sql = "INSERT INTO `users`
                (`first_name`, `username`, `email`, `password`, `address`, `profile_img`, `valid_id_img`) 
                VALUES (
                    '" . $first_name . "',
                    '" . $username . "',
                    '" . $email . "',
                    '" . $password . "',
                    '" . $address . "',
                    '" . $userPic . "',
                    '" . $userPic2 . "'
                    )";

                    //3. Execute SQL
                    if (mysqli_query($conn, $sql)) {
                        $_SESSION['loggedin'] = TRUE;
                        $_SESSION['username'] = $username;
                        $_SESSION['password'] = $password;

                        // header('Location:authenticate2.php');
                        header('Location:../frontend/index.php');

                    } else {
                        mysqli_error($conn);
                        header('Location: ../registration_form?authenticate=false');
                    }

                    mysqli_close($conn);
                }
            }
        }
    }
}
?>
