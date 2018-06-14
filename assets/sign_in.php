<?php 

include("config.php");

if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    $day_of_capture = date("l");
    $date_of_capture = date("Y-m-d h:i:s");
    $sign_in_user = "INSERT INTO students_attendance (user_id , attendance_status , date_of_capture , day) VALUES ('$user_id' , '1' , '$date_of_capture' , '$day_of_capture')";
    $query = mysql_query( $sign_in_user );
}