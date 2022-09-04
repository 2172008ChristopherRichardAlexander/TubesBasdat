<?php 

    if($_POST['color']!=NULL and $_POST['brandName']!=NULL and $_POST['jumlah']!=NULL and $_POST['price']!=NULL and $_POST['pabrik']!=NULL){
        
        include ('../connect.php');

        $getColours = $_POST['color'];
        $getName = $_POST['brandName'];
        $getQty = $_POST['jumlah'];
        $getPrice = $_POST['price'];
        $getPabrik = $_POST['pabrik'];
        $totalHarga = $getPrice * $getQty;
        $akun = $_GET['q'];
        
        if($getPabrik=="pabrikSenyum"){
            $kodePabrik = "PB-001";
        }
        else{
            $kodePabrik = "PB-002";
        }
        $userName = $_GET['q'];

        if($getName =="Dulux"){
            if($getColours=="Merah"){
                $kodeProduct = "DL-001";
            }
            elseif($getColours=="Kuning"){
                $kodeProduct = "DL-002";
            }
            elseif($getColours=="Hijau"){
                $kodeProduct = "DL-003";
            }
            elseif($getColours=="Biru"){
                $kodeProduct = "DL-004";
            }
        }
        elseif($getName =="Puffin"){
            if($getColours=="Merah"){
                $kodeProduct = "PF-001";
            }
            elseif($getColours=="Kuning"){
                $kodeProduct = "PF-002";
            }
            elseif($getColours=="Hijau"){
                $kodeProduct = "PF-003";
            }
            elseif($getColours=="Biru"){
                $kodeProduct = "PF-004";
            }
        }
        elseif($getName =="NoDrop"){
            if($getColours=="Merah"){
                $kodeProduct = "ND-001";
            }
            elseif($getColours=="Kuning"){
                $kodeProduct = "ND-002";
            }
            elseif($getColours=="Hijau"){
                $kodeProduct = "ND-003";
            }
            elseif($getColours=="Biru"){
                $kodeProduct = "ND-004";
            }
        }
        elseif($getName =="NipponPaint"){
            if($getColours=="Merah"){
                $kodeProduct = "NP-001";
            }
            elseif($getColours=="Kuning"){
                $kodeProduct = "NP-002";
            }
            elseif($getColours=="Hijau"){
                $kodeProduct = "NP-003";
            }
            elseif($getColours=="Biru"){
                $kodeProduct = "NP-004";
            }
        }

        $sql = "SELECT Qty FROM tbStock WHERE KodeProduct = '$kodeProduct'";
        $result3 = sqlsrv_query($conn, $sql);
        echo $result3;
        if($result3<$getQty){
            echo '<script type ="text/JavaScript">window.alert("Stock Barang Tidak Mencukupi")</script>';
            header("Refresh:0; url=page1.php?q=$userName");
        }
        else{
            $query = "EXEC [dbo].[SP_AutoJual] '".$kodePabrik."','".$akun."'";
            $result = sqlsrv_query($conn, $query);
            if($result){
                $query2 = "EXEC [dbo].[SP_AutoJualDet] '".$getName."','".$getColours."','".$getQty."','".$totalHarga."','".$kodeProduct."'";
                $result2 = sqlsrv_query($conn, $query2);
                if($result2){
                   header("Location:page1.php?q=$userName");
                }
                else{
                    echo "gagal1";
                    header("Location:page1.php?q=$userName");
                }
            }
            else{
                echo "gagal2";
            }
        }
    }
    
?>