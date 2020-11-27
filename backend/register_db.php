<?php 

    require_once "../config/config.inc.php";
    
    $errors = array();

    if (isset($_POST['reg_user'])) {
        $Names = mysqli_real_escape_string($con_mysqli, $_POST['name']);
        $UserNames = mysqli_real_escape_string($con_mysqli, $_POST['username']);
        $Email = mysqli_real_escape_string($con_mysqli, $_POST['email']);
        $Password = mysqli_real_escape_string($con_mysqli, $_POST['password_1']);
        $Phone = mysqli_real_escape_string($con_mysqli, $_POST['phone']);
        $Birthdate = mysqli_real_escape_string($con_mysqli, $_POST['birthdate']);
        $Gender = mysqli_real_escape_string($con_mysqli, $_POST['gender']);

        /*if (empty($username)) {
            array_push($errors, "Username is required");
            $_SESSION['error'] = "Username is required";
        }
        if (empty($email)) {
            array_push($errors, "Email is required");
            $_SESSION['error'] = "Email is required";
        }
        if (empty($password_1)) {
            array_push($errors, "Password is required");
            $_SESSION['error'] = "Password is required";
        }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
            $_SESSION['error'] = "The two passwords do not match";
        }*/

    //     /*Upload images */
    //     $target_dir = "../../imageuser/";
    //     $target_file = $target_dir . basename($_FILES['inputImage']['name']);
    //     $nameImage = $_FILES['inputImage']['name'];
    //     $temp_name = $_FILES['inputImage']['tmp_name'];
    //     $random = rand(0, 99999999);
    //     $nameImage_new = sha1($nameImage . $random);
    //     $nameImage_use = $nameImage_new . $nameImage;  // Rename Image ----
    //     $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    //     $checkImage = getimagesize($_FILES['inputImage']['tmp_name']);
    //     if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    //         echo "error";
    //     }else if($_FILES['inputImage']['size'] > 2000000){
    //         echo "error size";
    //     }else if($checkImage !== false){
    //         move_uploaded_file($_FILES['inputImage']['tmp_name'], "../imageuser/" . $nameImage_use);
    //         $image_path = "../../imageuser/" . $nameImage_use;
            
    //         if($imageFileType == "jpg"){
    //             $src = imagecreatefromjpeg($image_path);
    //         }else if($imageFileType == "png"){
    //             $src = imagecreatefrompng($image_path);
    //         }
    //         list($width, $height) = getimagesize($image_path);
    //         $newwidth = 768;
    //         $newheight = 768;
    //         $tmp = imagecreatetruecolor($newwidth, $newheight);
    //         imagecopyresampled($tmp, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
    //         imagejpeg($tmp, $image_path, 100);
    //         imagedestroy($src);
    //         imagedestroy($tmp);
    // }

/*
        $user_check_query = "SELECT * FROM register_db WHERE UserName = '$UserName' OR Email = '$Email' LIMIT 1";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { // if user exists
            if ($result['UserName'] === $UserName) {
                array_push($errors, "Username already exists");
            }
            if ($result['email'] === $Email) {
                array_push($errors, "Email already exists");
            }
        }*/

        if (count($errors) == 0) {
            $sql = "INSERT INTO member (MEMBER_STATUS,MEMBER_USERNAME,MEMBER_PASSWORD,MEMBER_EMAIL,MEMBER_PHONE,MEMBER_BIRTHDATE,MEMBER_GENDER,MEMBER_PROFILE_PICTURE) VALUES ('Member', '$Names', '$UserNames', '$Password', '$Email', '$Phone','$Birthdate', '$Gender', '78304597_p0.jpg')";
            mysqli_query($con_mysqli, $sql);

            header("location: /login.php");
        } else {
            //header("location: /register.php");
        }
    }

?>
