<?php 
$id = $_GET["id"];
header('HTTP/1.1 301 Moved Permanently');
header('Location: http://signin.office.theodi.org/individual/?id=' .$id);
die();
?>
