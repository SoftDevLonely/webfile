<?php
    require_once "config/config.inc.php";

    if (isset($_SESSION['LOGIN'])) {
        header('location: /');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css?family=Prompt:200&display=swap&subset=thai" rel="stylesheet">
    <link rel="stylesheet" href="/resource/css/style-login.css?v=<?= date("Y-m-d H:i:s"); ?>">
    <link href="/resource/css/style1.css?v=<?= date("Y-m-d H:i:s"); ?>" rel="stylesheet" />
</head>
<body style="background-image:url('/resource/img/bglogin.png'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
    
    <div class="header">
        <h2>เข้าสู่ระบบ</h2>
    </div>

    <form action="backend/login_db.php" method="post">
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" class = "input-group1" autocomplete="off" >
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password_1" class = "input-group1" >
        </div>
        <div class="input-group">
            <button type="submit" name="login_user" class="btn">เข้าสู่ระบบ</button>
        </div>
        <p>สมัครสมาชิก? <a href="/register.php">สร้างบัญชี</a></p>
    </form>

</body>
</html>