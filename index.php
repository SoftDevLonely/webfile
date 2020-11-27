<?php
require_once "config/config.inc.php";
require_once "function/db_function.php";

$content = (isset($_GET['content'])) ? $_GET['content'] : '';
$action = (isset($_GET['action'])) ? $_GET['action'] : '';
if ($action == "logout") {
    session_destroy();
    header('Location: /');
}
if (isset($_SESSION['LOGIN'])) { 
    $profile_id = $_SESSION['LOGIN'];
    $profile = select_mysqli("member","WHERE MEMBER_ID = '$profile_id'","*");
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>LONELY</title>
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]>
        <script src="resource/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="/resource/js/ie-emulation-modes-warning.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="/resource/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Prompt:200&display=swap&subset=thai" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="/node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />

        <link href="/node_modules/node-waves/dist/waves.css" rel="stylesheet" />
        <link href="/node_modules/animate.css/animate.css" rel="stylesheet" />

        <link href="/node_modules/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" />
        <link href="/node_modules/trumbowyg/dist/ui/trumbowyg.min.css" rel="stylesheet" />
        <link href="/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
        <link href="/node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />

        <link href="/node_modules/ekko-lightbox/dist/ekko-lightbox.css" rel="stylesheet" />
        <link href="/node_modules/@fortawesome/fontawesome-free/css/all.css" rel="stylesheet" />
        <link href="/resource/css/style1.css?v=<?= date("Y-m-d H:i:s"); ?>" rel="stylesheet" />
    </head>

    <body class="background-main">
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-black">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait... </p>
            </div>
        </div>
        <div class="overlay"></div>
        <?php include("component/navbar.php"); ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-9">
                </div>
                <div class="col-xs-3 text-center m-l--20" style="background-color: #CFCFCF;">
                    <h2><span>เ-ห-ง-า<br>#ลาดกะบัง</span></h2>
                </div>
            </div>
            <?php
    $check_room_join_sql = "SELECT * FROM room_join,room WHERE room_join.MEMBER_ID = '$profile_id' AND room.ROOM_TIMEEND_MEETING > NOW()";
    $check_room_query = mysqli_query($con_mysqli,$check_room_join_sql);
    $check_room_join = mysqli_fetch_array($check_room_query);
            if ($_GET["content"] != '') {
 
                if(isset($check_room_join['ROOM_JOIN_ID'])){
                    include("component/content/join.php");
                }else{
                    if (file_exists("component/content/$content.php")) {
                        include("component/content/$content.php");
                    } else {

                        header('Location:/');
                    }
                }

            } else {
                if(isset($check_room_join['ROOM_JOIN_ID'])){
                    include("component/content/join.php");
                }else{
                    include("component/content/home.php");
                }
            }
            ?>
        </div> <!-- /container -->
        <?php include("component/footer.php"); ?>
        <!-- Jquery Core Js -->
        <script src="/node_modules/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap Core Js -->
        <script src="/node_modules/bootstrap/dist/js/bootstrap.js"></script>
        <!-- Select Plugin Js -->
        <script src="/node_modules/bootstrap-select/dist/js/bootstrap-select.js"></script>
        <!-- Waves Effect Plugin Js -->
        <script src="/node_modules/node-waves/dist/waves.js"></script>
        <!-- SweetAlert Plugin Js -->
        <script src="/node_modules/sweetalert/dist/sweetalert.min.js"></script>
        <script src="/node_modules/trumbowyg/dist/trumbowyg.min.js"></script>
        <!-- Custom Js -->
        <!-- Moment Plugin Js -->
        <script src="/node_modules/moment/min/moment-with-locales.js"></script>
        <script src="/node_modules/moment/locale/th.js"></script>
        <!-- Bootstrap Material Datetime Picker Plugin Js -->
        <script src="/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
        <!-- Bootstrap Datepicker Plugin Js -->
        <script src="/node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
        <script src="/node_modules/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
        <script src="/resource/chart/highcharts.js"></script>
        <script src="/resource/chart/data.js"></script>
        <script src="/resource/chart/exporting.js"></script>
        <script src="/resource/js/admin.js?v=<?= date("Y-m-d H:i:s"); ?>"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="/resource/js/ie10-viewport-bug-workaround.js"></script>
        <script src="/resource/js/component/home.js"></script>

        </script>
    </body>

    </html>
<?php
} else {
    header('Location: /login.php');
}
?>