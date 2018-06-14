<?php
$base_path		= "";
$db_host = "127.0.0.1";
$db_name = "demo_flexcodesdk";
$db_user = "root";
$db_pass = "";


$conn = mysql_connect($db_host, $db_user, $db_pass );
if(!$conn ){
     die("Connection refused");
}
else{
    // echo "Successfully connected to the ";
}
mysql_select_db($db_name, $conn ) ;

?>




