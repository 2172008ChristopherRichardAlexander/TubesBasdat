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
                            <li class="active"><a href= <?php echo "page1.php?q=".$_SESSION['userLogin'];?>>Home</a></li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Membeli <span class="caret"></span></a>
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
<!-- CAROUSEL -->

<div id="carousel-example-generic" style="height: 600px; width: 1200px; margin: auto;" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" style="height: 600px; width: 1200px;" role="listbox">
    <div class="item active">
      <img class="gbr" src="https://www.mirachinterior.id/wp-content/uploads/2022/06/banner-warna-cat-no-drop-untuk-luar-rumah-1200x781.jpg" style="height: 600px; width: 1200px;" alt="...">
      <div class="carousel-caption bc">
    <h3 class="tulisan" style="color:white; font-size: 2em;">No Drop</h3>
    <p class="tulisan" style="color:white; font-size: 2em;">"No Drop, No Bocor"</p>
      </div>
    </div>
    <div class="item">
      <img class="gbr" src="https://images.tokopedia.net/img/cache/1200/BgtCLw/2021/6/4/59c671a4-6efa-439a-9f4f-c76e290718ff.jpg?ect=4g" style="height: 600px; width: 1200px;" alt="...">
      <div class="carousel-caption bc">
    <h3 class="tulisan" style="color:white; font-size: 2em;">Nippon Paint</h3>
    <p class="tulisan" style="color:white; font-size: 2em;">"Working Beautifully, Everywhere"</p>
      </div>
    </div>
    <div class="item">
      <img class="gbr" src="https://images.akzonobel.com/akzonobel-flourish/dulux/id/homepage/ace_banner_1.jpg?impolicy=.auto&imwidth=600" style="height: 600px; width: 1200px;" alt="...">
      <div class="carousel-caption bc">
    <h3 class="tulisan" style="color:white; font-size: 2em;">Dulux</h3>
    <p class="tulisan" style="color:white; font-size: 2em;">"Worth Doing, Worth Dulux"</p>
  </div>
</div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Judul -->
<h1 style="text-align: center;">Total Stok Barang</h1>

<!-- Table -->
<table class="table table-bordered" style="width:70%; margin:auto;">
    <tr class="gambarcat">
    <?php
    include ('../connect.php');
    $sql = "SELECT * FROM [dbo].[Vw_TotalQuantityBrand]";
    $result = sqlsrv_query($conn, $sql);
    $result2 = sqlsrv_query($conn, $sql);
    if( $result === false) {
       die( print_r( sqlsrv_errors(), true) );
    }
    if( $result2 === false) {
        die( print_r( sqlsrv_errors(), true) );
    }    
   
    while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
        echo "<td style='text-align: center;'>". $row['Nama Brand']; "</td>";
    }
    echo "</tr>";
    echo "<tr class='qty'>";
    while( $row2 = sqlsrv_fetch_array( $result2, SQLSRV_FETCH_ASSOC) ) {
        echo "<td style='text-align: center;'>". $row2['Jumlah']; "</td>";
    }
    echo "</tr>";
        
    sqlsrv_free_stmt( $result);
    ?>
  </table>
<br> <br> <br>
<footer>
    <div class="content">
        <div class="top">
            <div class="logo-details">
                <span class="logo_name">MariaDB</span>
            </div>
            <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
</footer>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</body>
</html>