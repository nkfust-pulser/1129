<?php
require_once('connect_members.php');
session_start();
$array2 = array();
$id = '';
$sql = "SELECT measure_time FROM measure_time ORDER BY measure_time DESC";
if($stmt = mysqli_prepare($link,$sql)){
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_bind_result($stmt, $file_names);
        while(mysqli_stmt_fetch($stmt)){

            $array2[] = $file_names;
        }
    }
}
mysqli_stmt_close($stmt);
$last_date = $array2[0];
$last_filename1 = str_replace('-',"",$last_date);
$last_filename2 = str_replace(':',"",$last_filename1);
$last_filename3 = str_replace(" ","",$last_filename2);
var_dump($last_filename3);

?>