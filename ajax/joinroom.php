<?php
require_once "../config/config.inc.php";
require_once "../function/db_function.php";
require_once "../function/generate_function.php";

if(isset($_POST['room_id'])){
    $room_id = $_POST['room_id'];
    $profile_id = $_POST['profile_id'];
    $room = select_mysqli("room","WHERE ROOM_ID = '$room_id'","*");
    $room_max = $room['ROOM_MAXIMUM_MEMBER'];
    $check_count = rows_mysqli("room_join","WHERE ROOM_ID ='$room_id'","*");
    if($check_count < $room_max){
        $insert_join = insert_mysqli("NULL,'$room_id','$profile_id',NOW()","room_join");
        $_SESSION['ROOM_ID'] = $room_id;
        if($insert_join == true){
            $data_array = array("data" => array("status" => "success","data" => $insert_join));
        }else{
            $data_array = array("data" => array("status" => "error"));
        }
    }else{
        $data_array = array("data" => array("status" => "error","data" => "Full Room"));
    }

}

$data_encode = json_encode($data_array, JSON_PRETTY_PRINT);
echo $data_encode;
?>