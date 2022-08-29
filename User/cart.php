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
                    <a href="page1.php" class="navbar-brand">MariaDB</a>
                </div>

                <div class="navbar-collapse collapse" id="mobile_menu">
                    <ul class="nav navbar-nav">
                        <li ><a href="page1.php">Home</a></li>
                        <li class="active"><a href="cart.php">Cart</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
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

</html>