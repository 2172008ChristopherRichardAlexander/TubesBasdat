<?php
    include ('connect.php');

    $username = $_POST['userLogin'];
    $password = $_POST['passwordLogin'];
    $params = array();
    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $sql = "SELECT * FROM tbAkun WHERE Username='".$username."'AND Password='".$password."'";
    $result = sqlsrv_query($conn, $sql, $params, $options);
    $sql2 = "SELECT TipeAkun FROM tbAkun WHERE Username='".$username."'AND Password='".$password."'";
    $result2 = sqlsrv_query($conn, $sql);

    if(sqlsrv_fetch( $result2 ) === false) {
        die( print_r( sqlsrv_errors(), true));
    }

    $jumlahbaris = sqlsrv_num_rows( $result );
    $tipeakun = sqlsrv_get_field( $result2, 6);
    
    if($jumlahbaris == 1){
        if($tipeakun == "Admin"){
            header("Location:Admin/page1.php?q=".$username);
        }
        else{
            // Bikin ke Page User
            header("Location:User/page1.php?q=".$username);
        }   
    }     
    else{
        header("Location:index.html");
    }


?>