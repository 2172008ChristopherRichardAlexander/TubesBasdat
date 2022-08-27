<?php
$serverName = "LAPTOP-B7C4TVBG\SQLEXPRESS";  
$uid = "";     
$pwd = "";    
$databaseName = "PerusahaanCat";  
$connectionInfo = array("UID" => $uid, "PWD" => $pwd, "Database"=>$databaseName);  
$conn = sqlsrv_connect( $serverName, $connectionInfo);  

if($conn){
     echo "Connection established.\n";
}  
else{  
     echo "Connection could not be established.\n";  
     die( print_r( sqlsrv_errors(), true));  
}

?>  