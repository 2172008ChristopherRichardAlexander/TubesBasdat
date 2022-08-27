<?php
    include ('connect.php');

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $sql = "EXEC [dbo].[SP_AutoAkun] '".$firstName."','".$lastName."','".$userName."','".$phone."','".$password."','User'";
    $result = sqlsrv_query( $conn, $sql );
    if($result){
        header("Location:Admin/page1.php?q=".$userName);
    }     
    else{
        header("Location:index.html");
    }
?>