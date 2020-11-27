<?php
function phone_format($phone){
    $phone_1 = substr($phone,0,3);
    $phone_2 = substr($phone,3,3);
    $phone_3 = substr($phone,6,4);
    echo $phone_1.'-'.$phone_2.'-'.$phone_3;
}