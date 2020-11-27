<?php 
    
require_once "../config/config.inc.php";

    $errors = array();

    if (isset($_POST['login_user'])) {
        $UserNames = mysqli_real_escape_string($con_mysqli, $_POST['username']);
        $Password = mysqli_real_escape_string($con_mysqli, $_POST['password_1']);

        if (empty($UserNames)) {
            array_push($errors, "Username is required");
        }

        if (empty($Password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $sql = "SELECT * FROM member WHERE MEMBER_USERNAME = '$UserNames' AND MEMBER_PASSWORD = '$Password'";
            $query = mysqli_query($con_mysqli, $sql);
            $result = mysqli_fetch_array($query);

            if ($result['MEMBER_ID']) {
                $_SESSION['LOGIN'] = $result['MEMBER_ID'];
                $_SESSION['success'] = "Your are now logged in";
                header("location: ../");
            } else {
                array_push($errors, "ไม่พบบัญชีผู้ใช้งาน!".$result['MEMBER_ID']);
                $_SESSION['error'] = "ไม่พบบัญชีผู้ใช้งาน!";
               header("location: ../login.php");
            }

        } else {
            array_push($errors, "Username & Password is required");
            $_SESSION['error'] = "Username & Password is required";
           header("location: ../login.php");
        }
    }
