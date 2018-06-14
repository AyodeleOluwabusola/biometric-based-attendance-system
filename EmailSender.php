<?php
$AddressToEmailTo = "oluwabusola.ayodele@gmail.com";


$SubjectOfEmail = "Notice from web page";


$content = 'This email sent from script ' . $_SERVER['PHP_SELF'] . "\n\nData received:\n\n";
if( isset($_GET['IP']) ) { $_GET['IP '] = $_SERVER['REMOTE_ADDR']; }
else { $_GET['IP'] = $_SERVER['REMOTE_ADDR']; }
ksort($_GET);
foreach( $_GET as $k => $v ) { $content .= "\t$k = $v\n"; }
mail($AddressToEmailTo,$SubjectOfEmail,$content,"From: $AddressToEmailTo");
?>
