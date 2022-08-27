<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
<div class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        <a href="page1.html" class="navbar-brand">MariaDB</a>
                    </div>

                    <div class="navbar-collapse collapse" id="mobile_menu">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="page1.html">Home</a></li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Membeli <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="supplier.html">Supplier</a></li>
                                    <li><a href="membeli.html">Membeli</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Pabrik <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="cat.html">Cat</a></li>
                                    <li><a href="pabrik.html">Pabrik</a></li>
                                    <li><a href="pegawai.html">Pegawai</a></li>
                                    <li><a href="gaji.html">Gaji</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Menjual <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="menjual.html">Menjual</a></li>
                                    <li><a href="customer.html">Customer</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li>
                                <form action="" class="navbar-form">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="search" name="search" id="" placeholder="Search Anything Here..." class="form-control">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                                        </div>
                                    </div>
                                </form>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
    
</body>
</html>