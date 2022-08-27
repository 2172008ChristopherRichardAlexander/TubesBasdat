<?php
    include ('connect.php');

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $params = array();
    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $cek = "SELECT Username FROM tbAkun WHERE Username='".$userName."'";
    $resultUser = sqlsrv_query($conn, $cek, $params, $options);
    $resultUser2 = sqlsrv_query($conn, $cek);
    $jumlahBaris = sqlsrv_num_rows( $resultUser );
    $namaUser = sqlsrv_get_field( $resultUser2, 3);

    if($jumlahBaris==0){
        $sql = "EXEC [dbo].[SP_AutoAkun] '".$firstName."','".$lastName."','".$userName."','".$phone."','".$password."','User'";
        $result = sqlsrv_query( $conn, $sql );
        if($result){
            echo '<script type ="text/JavaScript">alert("Akun Berhasil Dibuat")</script>';
            header("Refresh:0; url=index.html");
        }
        else{
            echo '<script type ="text/JavaScript">alert("Akun Gagal Dibuat") </script>';
            header("Refresh:0; url=index.html");
        }
    } 
    else{
        echo '<script type ="text/JavaScript">alert("Akun Gagal Dibuat Karena Username sama!") </script>';
        header("Refresh:0; url=index.html");
    }
?>