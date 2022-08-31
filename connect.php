<?php
$serverName = "DESKTOP-SMSJ5SS\SQLEXPRESS";  
$uid = "";     
$pwd = "";    
$databaseName = "PerusahaanCat";  
$connectionInfo = array("UID" => $uid, "PWD" => $pwd, "Database"=>$databaseName);  
$conn = sqlsrv_connect( $serverName, $connectionInfo);  
?>  