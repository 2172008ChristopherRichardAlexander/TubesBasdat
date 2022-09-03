<?php
    include ('../connect.php');
    $sql = "TRUNCATE TABLE tbCart";
    $result = sqlsrv_query($conn,$sql);
?>