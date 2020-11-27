<?php
function select_mysqli($table,$condition,$field){
    global $con_mysqli;
    $sql = "SELECT $field FROM $table $condition";
    $result = mysqli_fetch_array(mysqli_query($con_mysqli,$sql));
    return $result;
}
function rows_mysqli($table,$condition,$field){
    global $con_mysqli;
    $sql = "SELECT $field FROM $table $condition";
    $result = mysqli_num_rows(mysqli_query($con_mysqli,$sql));
    return $result;
}
function insert_mysqli($value,$table){
    global $con_mysqli;
    $sql = "INSERT INTO $table VALUES ($value)";
    $result = mysqli_query($con_mysqli,$sql);
    return $result;
}

function update_mysqli($table,$command,$condition){
    global $con_mysqli;
    $sql = "UPDATE $table SET $command $condition";
    $result = mysqli_query($con_mysqli,$sql);
    return $result;
}

function delete_mysqli($table,$condition){
    global $con_mysqli;
    $sql ="DELETE FROM $table $condition";
    $result = mysqli_query($con_mysqli,$sql);
    return $result;
}