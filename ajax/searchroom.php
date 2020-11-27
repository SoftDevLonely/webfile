<?php
require_once "../config/config.inc.php";
require_once "../function/db_function.php";
require_once "../function/generate_function.php";
$profile_id = $_SESSION['LOGIN'];
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $room = select_mysqli("room","WHERE ROOM_ID = '$id' AND ROOM_TIMEEND_MEETING > NOW()","*");
    if($room['ROOM_ID']){
            $data_array = array("data" => array("status" => "success","profile_id" => $profile_id,"room_id" => $room['ROOM_ID'],"room_name" => $room['ROOM_NAME']));
    }else{
        $data_array = array("data" => array("status" => "error","data" => "false"));
    }
}

$data_encode = json_encode($data_array, JSON_PRETTY_PRINT);
echo $data_encode;
?>