<?php
	
session_start();

if (isset($_GET['msg']) && !empty($_GET['msg'])) {
	
	echo $_GET['msg'];

} elseif (isset($_GET['user_name']) && !empty($_GET['user_name']) && isset($_GET['time']) && !empty($_GET['time'])) {
	
	include 'include/global.php';
	include 'include/function.php';
	include("config.php");
	
	$user_name	= $_GET['user_name'];
	$time		= date('Y-m-d H:i:s', strtotime($_GET['time']));
	
	echo $user_name." login success on ".date('Y-m-d H:i:s', strtotime($time));

	
    
    $day_of_capture = date("l");
    $date_of_capture = date("Y-m-d h:i:s");
    $sign_in_user = "INSERT INTO students_attendance (username , attendance_status , date_of_capture , day) VALUES ('$user_name' , '1' , '$date_of_capture' , '$day_of_capture')";
	$query = mysql_query( $sign_in_user );
	// header("Location: index.php");

	
} else {
		
	$msg = "Parameter invalid..";
	
	echo "$msg";
	
}

	
?>

<div style="height: 50px"></div>




<script type="text/javascript"><!--
/* 
   Email Engine for Sending Email via Server Side Script
   Version 1.0
   March 19, 2012

   Will Bontrager Software, LLC
   https://www.willmaster.com/
   Copyright 2012 Will Bontrager Software, LLC

   This software is provided "AS IS," without 
   any warranty of any kind, without even any 
   implied warranty such as merchantability 
   or fitness for a particular purpose.
   Will Bontrager Software, LLC grants 
   you a royalty free license to use or 
   modify this software provided this 
   notice appears on all copies. 
*/

/////////////////////////////////////////////
// One place to customize.
//
// Specify the URL of the emailing script.

//var URLofEmailingScript = "http://localhost/demo_flexcodesdk/EmailSender.php";

// End of customization section.
/////////////////////////////////////////////

// URLofEmailingScript = URLofEmailingScript.replace(/^https?:\/\/[^\/]*/i,"");

// function GetServerRequestObject() {
// var http;
// if (window.XMLHttpRequest) {
//    try { http = new XMLHttpRequest(); }
//    catch(e) {}
//    } 
// else if (window.ActiveXObject) {
//    try { http = new ActiveXObject("Msxml2.XMLHTTP"); }
//    catch(e) {
//       try { http = new ActiveXObject("Microsoft.XMLHTTP"); } 
//       catch(e) {}
//       }
//    }
// else {
//    alert('Unable to connect with the server.');
//    return false;
//    }
// return http;
// }

// function SendAnEmail(message) {
// var http = GetServerRequestObject();
// if( ! http ) { alert('Unable to open http connection'); return true; }
// var url = URLofEmailingScript + "?" + escape("Page with link") + "=" + escape(document.URL);
// if( message.length ) { url += "&Message=" + escape(message); }
// http.onreadystatechange = function() {};
// http.open("GET",url,true);
// http.send("");
// return true;
// }
//--></script>


<?php


/* Set e-mail recipient */
  $myemail = "oluwabusola.ayodele@gmail.com";

  /* Check all form inputs using check_input function */
  $name = $user_name;
  $email = $_SESSION['email'];
  $subject ="This is Attendance capture";
  $message = "cool";

  /* Let's prepare the message for the e-mail */

  $subject2 = "Message from Birmingham Vegans website";

  $message = "

  Someone has sent you a message using your contact form:

  Name: $user_name
  Email: $email
  Subject: $subject

  Message:
  $message

  ";

  /* Send the message using mail() function */
  mail($myemail, $subject2, $message);

?>