<?php
require_once "../config/config.inc.php";
require_once "../function/db_function.php";
$profile_id = $_SESSION['LOGIN'];
$room_id = $_SESSION['ROOM_ID'];

$result = delete_mysqli("room_join","WHERE MEMBER_ID = '$profile_id' AND ROOM_ID = '$room_id' ");
if($result == true){
    unset($_SESSION['ROOM_ID']);
}
header("Location: /");


?>