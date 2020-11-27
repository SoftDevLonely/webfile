<?php

    if (isset($_SESSION['LOGIN'])) {
        header('location: /');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link href="https://fonts.googleapis.com/css?family=Prompt:200&display=swap&subset=thai" rel="stylesheet">
    <link rel="stylesheet" href="/resource/css/style-login.css?v=<?= date("Y-m-d H:i:s"); ?>">
    <link href="/resource/css/style1.css?v=<?= date("Y-m-d H:i:s"); ?>" rel="stylesheet" />
</head>
<body class="background-main">
    
    <div class="header">
        <h2>สมัครสมาชิก</h2>
    </div>

    <form action="/backend/register_db.php" method="post" enctype="multipart/form-data">
        <div class="input-group">
            <label for="name"></label>
            <input type="text" name="name" required placeholder="Name" class = "input-group1">
        </div>
        <div class="input-group">
            <label for="username"></label>
            <input type="text" name="username" required placeholder="Username" class = "input-group1">
        </div> 
        <div class="input-group">
            <label for="password_1"></label>
            <input type="password" name="password_1" required placeholder="Password" class = "input-group1">
        </div>
        <div class="input-group">
            <label for="email"></label>
            <input type="email" name="email" required placeholder="E-mail" class = "input-group1">
       
        <div class="input-group">
            <label for="phone"></label>
            <input type="text" name="phone" required center placeholder="Phone number" class = "input-group1">
        </div>
        <div class="input-group">
            <label for="Birth Date."></label>
            <input type="text" name="birthdate" required placeholder="Birth Date. yyyy-mm-dd " class = "input-group1">
        </div>
        <div><center>
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male"> Male
            <per><input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female"> Female</per>
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other"> Other 
        </center></div>
        <div class="input-group">
            <center><input name="inputImage" type="file" class = "input-group2"></center>
        </div> 

        <div class="input-group">
            <button name = "reg_user" type="submit" class="btn">ยืนยันการสมัคร</button>
        </div>
        <p>เข้าสู่ระบบ? <a href="login.php">Sign in</a></p>
    </form>

</body>
</html>