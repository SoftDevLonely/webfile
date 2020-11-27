<?php
require_once "../config/config.inc.php";
require_once "../function/db_function.php";
require_once "../function/generate_function.php";
$profile_id = $_SESSION['LOGIN'];
if(isset($_POST['inputName'])){
    $inputName = $_POST['inputName'];
    $inputLocation = $_POST['inputLocation'];
    $inputTypeMax = $_POST['inputTypeMax'];
    $inputTypeSex = $_POST['inputTypeSex'];
    $inputTypeAgeStart = $_POST['inputTypeAgeStart'];
    $inputTypeAgeEnd = $_POST['inputTypeAgeEnd'];
    $inputDetail = $_POST['inputDetail'];
    $datestart = $_POST['date-start'];
    $dateend = $_POST['date-end'];
    $room_id = generateRandomCode(5);
    $check_room_id = select_mysqli("room","WHERE ROOM_ID = '$room_id'","*");
    if(!$check_room_id['ROOM_ID']){
        $result = insert_mysqli("'$room_id', '$inputName', '$inputLocation', '$profile_id', '$inputTypeMax', '$inputTypeAgeStart', '$inputTypeAgeEnd', '$inputTypeSex', '$datestart', '$dateend', '$inputDetail'","room");
        $_SESSION['ROOM_ID'] = $room_id;
        if($result == true){
            $insert_mentor = insert_mysqli("NULL,'$room_id','$profile_id',NOW()","room_join");
            $data_array = array("data" => array("status" => "success","data" => $result));
        }else{
            $data_array = array("data" => array("status" => "error","data" => "false"));
        }
    }else{
        $data_array = array("data" => array("status" => "error","data" => "false"));
    }
}
    
    
$data_encode = json_encode($data_array, JSON_PRETTY_PRINT);
echo $data_encode;
?>