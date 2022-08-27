<?php
    include ('connect.php');

    $username = $_POST['userLogin'];
    $password = $_POST['passwordLogin'];

    $sql = "SELECT * FROM tbAkun WHERE Username='".$username."'AND Password='".$password."'";
    $result = sqlsrv_query($conn, $sql);
    $sql2 = "SELECT TipeAkun FROM tbAkun WHERE Username='".$username."'AND Password='".$password."'";
    $result2 = sqlsrv_query($conn, $sql2);
    if($result){
        if($result2=='Admin'){
            header("Location:Admin/page1.php?q=".$username);
        }
        else{
            header("Location:User/page1.php?q=".$username);
        }   
    }     
    else{
        header("Location:index.html");
    }
?>