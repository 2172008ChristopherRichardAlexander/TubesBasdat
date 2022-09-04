<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
        integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
        crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        <a href="#" class="navbar-brand">MariaDB</a>
                    </div>

                    <div class="navbar-collapse collapse" id="mobile_menu">
                        <ul class="nav navbar-nav">
                            <li><a href= <?php echo "page1.php?q=".$_SESSION['userLogin'];?>>Home</a></li>
                            <li class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Membeli <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href=<?php echo "supplier.php?q=".$_SESSION['userLogin'];?>>Supplier</a></li>
                                    <li><a href=<?php echo "membeli.php?q=".$_SESSION['userLogin'];?>>Membeli</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Pabrik <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href=<?php echo "cat.php?q=".$_SESSION['userLogin'];?>>Cat</a></li>
                                    <li><a href=<?php echo "pabrik.php?q=".$_SESSION['userLogin'];?>>Pabrik</a></li>
                                    <li><a href=<?php echo "pegawai.php?q=".$_SESSION['userLogin'];?>>Pegawai</a></li>
                                    <li><a href=<?php echo "gaji.php?q=".$_SESSION['userLogin'];?>>Gaji</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Menjual <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href=<?php echo "menjual.php?q=".$_SESSION['userLogin'];?>>Menjual</a></li>
                                    <li><a href=<?php echo "customer.php?q=".$_SESSION['userLogin'];?>>Akun</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_GET['q'] ?></a></li>
                            <li><a href="../index.html"><span class="glyphicon glyphicon-user"></span> Log out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container">
<form method="POST" action=<?php echo "membeli.php?q=".$_SESSION['userLogin'] ?>>
<table class="table table-striped table-dark table-bordered table-hover" id="tbmembeli" name="tbmembeli">
    <label for="tbmembeli" style="font-size:2em; text-decoration:underline;"> tbMembeli </label>
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">IdKirim</th>
            <th scope="col">VendorCode</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include ('../connect.php');
        $sql = "SELECT * FROM tbMembeli";
        $result = sqlsrv_query($conn, $sql);
        if( $result === false) {
        die( print_r( sqlsrv_errors(), true) );
        }
        $num = 1;
        while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
            echo "<tr>";
            echo "<td>". $num; "</td>";
            echo "<td>". $row['IdKirim']; "</td>";
            echo "<td>". $row['VendorCode']; "</td>";
            echo "<td>". $row['Tanggal']->format('d-m-Y H:i:s'); "</td>";
            echo "<td> <div> <button type='submit' class='btn btn-success'>Update</button> <button type='submit' value='".$row['IdKirim']."' name='delete' class='btn btn-danger'>Delete</button> </div> </td>";
            echo "</tr>";
            $num = $num + 1;
        }   
        sqlsrv_free_stmt( $result);
        ?>
    </tbody>
</table>
<form method="POST" action=<?php echo "membeli.php?q=".$_SESSION['userLogin'] ?>>
<table class="table table-striped table-dark table-bordered table-hover" name="tbmembelidet" id="tbmembelidet">
    <label for="tbmembelidet" style="font-size:2em; text-decoration:underline;"> tbMembeliDet </label>
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">IdKirim</th>
            <th scope="col">ProductNickName</th>
            <th scope="col">Qty</th>
            <th scope="col">Harga</th>
            <th scope="col">Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include ('../connect.php');
        $sql = "SELECT * FROM tbMembeliDet";
        $result = sqlsrv_query($conn, $sql);
        if( $result === false) {
        die( print_r( sqlsrv_errors(), true) );
        }
        $num = 1;
        while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
            echo "<tr>";
            echo "<td>". $num; "</td>";
            echo "<td>". $row['IdKirim']; "</td>";
            echo "<td>". $row['ProductNickName']; "</td>";
            echo "<td>". $row['Qty']; "</td>";
            echo "<td>". $row['Harga']; "</td>";
            echo "<td> <div> <button type='submit' class='btn btn-success'>Update</button> <button type='submit' value='".$row['IdKirim']."' name='delete' class='btn btn-danger'>Delete</button> </div> </td>";
            echo "</tr>";
            $num = $num + 1;
        }   
        sqlsrv_free_stmt( $result);
        ?>
    </tbody>
</table>
</form>
<button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary col-xs-5 col-md-3 col-lg-1 vcenter" style="position:absolute; left:50%; transform:translateX(-50%);">Add</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <!-- FORMS -->
    <form class="form-horizontal" method="POST" action=<?php echo "membeli.php?q=".$_SESSION['userLogin'] ?>>
        <div class="form-group">
            <label for="VendorCode" class="col-sm-2 control-label">VendorCode</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="VendorCode" name="VendorCode" placeholder="VendorCode">
                </div>
        </div>
        <div class="form-group">
            <label for="pnickname" class="col-sm-3 control-label">ProductNickName</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="pnickname" name="pnickname" placeholder="ProductNickName">
                </div>
        </div>
        <div class="form-group">
            <label for="Quantity" class="col-sm-2 control-label">Quantity</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Quantity" name="Quantity" placeholder="Quantity">
                </div>
        </div>
        <div class="form-group">
            <label for="Harga" class="col-sm-2 control-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Harga" name="Harga" placeholder="Harga">
                </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="button1" class="btn btn-primary">Add</button>
      </div>
      </form>
    <!-- FORMS CLOSE -->
    </div>
  </div>
</div>
</div>

<?php
function tambah2() {
    include ('../connect.php');
    $pnickname = $_POST['pnickname'];
    $quantity = $_POST['Quantity'];
    $harga = $_POST['Harga'];
    $sql = "EXEC [dbo].[SP_AutoMembeliDet] '". $pnickname. "', ". $quantity. ", ". $harga . " ";
    $result = sqlsrv_query($conn, $sql);
    if ($result) {
        echo '<script type ="text/JavaScript">alert("Data Berhasil Ditambahkan")</script>';
    }
    else {
        echo '<script type ="text/JavaScript">alert("Data Gagal Ditambahkan")</script>';
    }
    
}
function tambah() {
    include ('../connect.php');
    $vendorcode = $_POST['VendorCode'];
    $sql = "EXEC [dbo].[SP_AutoMembeli] '". $vendorcode. "'";
    $result = sqlsrv_query($conn, $sql);
    if ($result) {
        tambah2();
    }
    else {
        echo '<script type ="text/JavaScript">alert("Data Gagal Ditambahkan")</script>';
    }
    
}
function delete() {
    include ('../connect.php');
    $pk = $_POST['delete'];
    $sql = "DELETE FROM tbMembeliDet WHERE IdKirim = '". $pk . "'";
    $result = sqlsrv_query($conn, $sql);
    if ($result) {
        delete2();
    }
    else {
        echo '<script type ="text/JavaScript">alert("Data Gagal Dihapus")</script>';
    }
    
}

function delete2() {
    include ('../connect.php');
    $pk = $_POST['delete'];
    $sql = "DELETE FROM tbMembeli WHERE IdKirim = '". $pk . "'";
    $result = sqlsrv_query($conn, $sql);
    if ($result) {
        echo '<script type ="text/JavaScript">alert("Data Berhasil Dihapus")</script>';
    }
    else {
        echo '<script type ="text/JavaScript">alert("Data Gagal Dihapus")</script>';
    }
    
}
    if(isset($_POST['button1'])) {
        tambah();
        echo "<meta http-equiv='refresh' content='0'>";
    }
    if (isset($_POST['delete'])) {
        echo "<script type ='text/JavaScript'>confirm('Apakah Anda Yakin?')</script>";
        delete();
        echo "<meta http-equiv='refresh' content='0'>";
    }
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
