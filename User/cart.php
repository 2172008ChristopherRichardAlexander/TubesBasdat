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
    <link rel="stylesheet" href="style.css">
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span
                            class="icon-bar"></span><span class="icon-bar"></span><span
                            class="icon-bar"></span></button>
                    <a class="navbar-brand">MariaDB</a>
                </div>

                <div class="navbar-collapse collapse" id="mobile_menu">
                    <ul class="nav navbar-nav">
                    <li><a href="page1.php?q=<?php echo $_GET['q'] ?>">Home</a></li>
                        <li class="active"><a href="cart.php?q=<?php echo $_GET['q'] ?>">Cart</a></li>
                        <li><a href="contactus.php?q=<?php echo $_GET['q'] ?>">Contact Us</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li>
                            <form action="" class="navbar-form">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="search" name="search" id="" placeholder="Search Anything Here..."
                                            class="form-control">
                                        <span class="input-group-addon"><span
                                                class="glyphicon glyphicon-search"></span></span>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span>
                                <?php echo $_GET['q'] ?>
                            </a></li>
                        <li><a href="../index.html"><span class="glyphicon glyphicon-user"></span> Log out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<table class="table">
    <thead bgcolor="grey">
        <tr>
            <th scope="col">#</th>
            <th scope="col">ProductName</th>
            <th scope="col">Colour</th>
            <th scope="col">Qty</th>
            <th scope="col">Price</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <?php 
    include ('../connect.php');
    $sql = "SELECT * FROM tbMenjualDet";
    $result = sqlsrv_query($conn, $sql);
    $no = 1;
    $totHarga = 0;
    while ($row = sqlsrv_fetch_array($result)){
        $sql2 = "SELECT * FROM tbMenjual WHERE idJual = $row[0]";
        $result2 = sqlsrv_query($conn, $sql2);
        $row2 = sqlsrv_fetch_array($result2);
        if($row2[1]==$_GET['q']){
            echo "<tr>";
            echo 	"<td>" . $no . "</td>";
            echo 	"<td>" . $row[1] . "</td>";
            echo 	"<td>" . $row[2] . "</td>";
            echo 	"<td>". $row[3] . "</td>";
            echo 	"<td>" . $row[4] . "</td>";
            $totHarga += $row[4];
            echo "</tr>";
            $no+=1;
        }  
    }
    echo "total Harga = $totHarga"
    ?>
</table>
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
</body>
<script>
    function RemoveRow(){
        // event.target will be the input element.
        var td = event.target.parentNode; 
        var tr = td.parentNode; // the row to be removed
        tr.parentNode.removeChild(tr);
    }
</script>
</html>
