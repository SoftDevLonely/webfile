<?php include('connection.php');

$q = "SELECT * FROM promotion WHERE PROMOTION_ID='" . $_GET['m_id'] . "'";
$query = mysqli_query($dbcon, $q);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="syst.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<title>รายละเอียดโปรโมชั่น</title>
<div class="row">
            <div class="col text-right">
                <a href="#"><img src="img/logo.png" width="100" height="50"></a>
            </div>
        </div>
    </div>

<body class="background">
    <br>
    <div class="container">
        <div class="cardpromotion">
            <div class="row">
                <div class="col-3 col-sm-3 text-center">
                    <br>
                    <img src="img/<?php echo $row['PROMOTION_ICON']; ?>" width="150" height="150" />
                </div>
                <div class="col-9 col-sm-9" style="padding-right: 120px;">
                    <br>
                    <h1><?php echo $row['PROMOTION_LOCATION']; ?></h1>
                    <p><?php echo $row['PROMOTION_DETAIL']; ?></p>
                </div>
            </div>

            <div class="row" style="padding-top: 30px;">
                <div class="col-12">
                    <center><img src="img/<?php echo $row['PROMOTION_PHOTO']; ?>" width="700" height="450" /></center>
                </div>
            </div>

            <?php

            mysqli_free_result($query);
            mysqli_close($dbcon);
            ?>
            <div style="padding-top: 30px;">
            </div>
        </div>
        <!-- jQuery and JS bundle w/ Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>