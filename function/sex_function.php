<?php
function getSex($sex,$language){
    if($language == "en"){
        if($sex == "Male"){
            return "<i class=\"fas fa-mars\"></i>"." Male";
        }else if($sex == "Female"){
            return "<i class=\"fas fa-venus\"></i>"." Female";
        }else if($sex == "Other"){
            return "<i class=\"fas fa-genderless\"></i>"." Other";
        }else{
            return "No Sex";
        }
    }
    if($language == "th"){
        if($sex == "Male"){
            return "<i class=\"fas fa-mars\"></i>"." ชาย";
        }else if($sex == "Female"){
            return "<i class=\"fas fa-venus\"></i>"." หญิง";
        }else if($sex == "Other"){
            return "<i class=\"fas fa-genderless\"></i>"." อื่น";
        }else{
            return "ไม่ระบุ";
        }
    }
}
?>