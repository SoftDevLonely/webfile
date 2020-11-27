<?php
function getAge($date) {
    return intval(date('Y', time() - strtotime($date))) - 1970 . " Year";
}