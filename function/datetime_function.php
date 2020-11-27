<?php
function DateTimeFormat($strDate, $language)
{
    if ($strDate == "" && $language == "") {
        return null;
    } else {

        $strYear = date("Y", strtotime($strDate)) + 543;
        $strMonth = date("n", strtotime($strDate));
        $strDay = (int)date("d", strtotime($strDate));
        $strHour = date("H", strtotime($strDate));
        $strMinute = date("i", strtotime($strDate));
        $strSeconds = date("s", strtotime($strDate));
        $strMonthTHCut = Array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
        $strMonthENCut = Array("", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
        $strMonthThai = $strMonthTHCut[$strMonth];
        $strMonthEng = $strMonthENCut[$strMonth];
        if ($language == "TH") {
            return "$strDay $strMonthThai $strYear - $strHour:$strMinute:$strSeconds น.";
        } else if ($language == "EN") {
            $strYear = $strYear - 543;
            return "$strDay $strMonthEng $strYear - $strHour:$strMinute:$strSeconds";
        }
    }
}
function DateTimeFormat_short($strDate, $language)
{
    if ($strDate == "" && $language == "") {
        return null;
    } else {

        $strYear = date("Y", strtotime($strDate)) + 543;
        $strMonth = date("n", strtotime($strDate));
        $strDay = (int)date("d", strtotime($strDate));
        $strHour = date("H", strtotime($strDate));
        $strMinute = date("i", strtotime($strDate));
        $strSeconds = date("s", strtotime($strDate));
        $strMonthTHCut = Array("", "ม.ค.", "ก.พ", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย", "ต.ค.", "พ.ย.", "ธ.ค.");
        $strMonthENCut = Array("", "Jan.", "Feb.", "Mar.", "Apr.", "May.", "Jun.", "Jul.", "Aug.", "Sep.", "Oct.", "Nov.", "Dec.");
        $strMonthThai = $strMonthTHCut[$strMonth];
        $strMonthEng = $strMonthENCut[$strMonth];
        if ($language == "TH") {
            return "$strDay $strMonthThai $strYear $strHour:$strMinute:$strSeconds น.";
        } else if ($language == "EN") {
            $strYear = $strYear - 543;
            return "$strDay $strMonthEng $strYear $strHour:$strMinute:$strSeconds";
        }
    }
}
function DateFormat_short($strDate, $language)
{
    if ($strDate == "" && $language == "") {
        return null;
    } else {

        $strYear = date("Y", strtotime($strDate)) + 543;
        $strMonth = date("n", strtotime($strDate));
        $strDay = (int)date("d", strtotime($strDate));
        $strHour = date("H", strtotime($strDate));
        $strMinute = date("i", strtotime($strDate));
        $strSeconds = date("s", strtotime($strDate));
        $strMonthTHCut = Array("", "ม.ค.", "ก.พ", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย", "ต.ค.", "พ.ย.", "ธ.ค.");
        $strMonthENCut = Array("", "Jan.", "Feb.", "Mar.", "Apr.", "May.", "Jun.", "Jul.", "Aug.", "Sep.", "Oct.", "Nov.", "Dec.");
        $strMonthThai = $strMonthTHCut[$strMonth];
        $strMonthEng = $strMonthENCut[$strMonth];
        if ($language == "TH") {
            return "$strDay $strMonthThai $strYear";
        } else if ($language == "EN") {
            $strYear = $strYear - 543;
            return "$strDay $strMonthEng $strYear";
        }
    }
}
?>