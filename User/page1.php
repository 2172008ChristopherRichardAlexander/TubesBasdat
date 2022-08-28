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
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/footers/">
    <style>
        .prod-info-main {
            border: 1px solid #CEEFFF;
            margin-bottom: 20px;
            margin-top: 10px;
            background: #fff;
            padding: 6px;
            -webkit-box-shadow: 0 1px 4px 0 rgba(21, 180, 255, 0.5);
            box-shadow: 0 1px 1px 0 rgba(21, 180, 255, 0.5);
        }

        .prod-info-main .product-image {
            background-color: #EBF8FE;
            display: block;
            min-height: 238px;
            overflow: hidden;
            position: relative;
            border: 1px solid #CEEFFF;
            padding-top: 40px;
        }

        .rotprod {
            -webkit-transition-duration: 0.8s;
            -moz-transition-duration: 0.8s;
            -o-transition-duration: 0.8s;
            transition-duration: 0.8s;
        }

        .rotprod:hover {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
        }

        .prod-info-main .product-deatil {
            border-bottom: 1px solid #dfe5e9;
            padding-bottom: 17px;
            padding-left: 16px;
            padding-top: 16px;
            position: relative;
            background: #fff
        }

        .product-content .product-deatil h5 a {
            color: #2f383d;
            font-size: 15px;
            line-height: 19px;
            text-decoration: none;
            padding-left: 0;
            margin-left: 0
        }

        .prod-info-main .product-deatil h5 a span {
            color: #9aa7af;
            display: block;
            font-size: 13px
        }

        .prod-info-main .product-deatil span.tag1 {
            border-radius: 50%;
            color: #fff;
            font-size: 15px;
            height: 50px;
            padding: 13px 0;
            position: absolute;
            right: 10px;
            text-align: center;
            top: 10px;
            width: 50px
        }

        .prod-info-main .product-deatil span.sale {
            background-color: #21c2f8
        }

        .prod-info-main .product-deatil span.discount {
            background-color: #71e134
        }

        .prod-info-main .product-deatil span.hot {
            background-color: #fa9442
        }

        .prod-info-main .description {
            font-size: 12.5px;
            line-height: 20px;
            padding: 10px 14px 16px 19px;
            background: #fff
        }

        .prod-info-main .product-info {
            padding: 11px 19px 10px 20px
        }

        .prod-info-main .product-info a.add-to-cart {
            color: #2f383d;
            font-size: 13px;
            padding-left: 16px
        }

        .prod-info-main name.a {
            padding: 5px 10px;
            margin-left: 16px
        }

        .product-info.smart-form .btn {
            padding: 6px 12px;
            margin-left: 12px;
            margin-top: -10px
        }

        .load-more-btn {
            background-color: #21c2f8;
            border-bottom: 2px solid #037ca5;
            border-radius: 2px;
            border-top: 2px solid #0cf;
            margin-top: 20px;
            padding: 9px 0;
            width: 100%
        }

        .product-block .product-deatil p.price-container span,
        .prod-info-main .product-deatil p.price-container span,
        .shipping table tbody tr td p.price-container span,
        .shopping-items table tbody tr td p.price-container span {
            color: #21c2f8;
            font-family: Lato, sans-serif;
            font-size: 24px;
            line-height: 20px
        }

        .product-info.smart-form .rating label {
            margin-top: 15px;

        }

        .prod-wrap .product-image span.tag2 {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            padding: 10px 0;
            color: #fff;
            font-size: 11px;
            text-align: center
        }

        .prod-wrap .product-image span.tag3 {
            position: absolute;
            top: 10px;
            right: 20px;
            width: 60px;
            height: 36px;
            border-radius: 50%;
            padding: 10px 0;
            color: #fff;
            font-size: 11px;
            text-align: center
        }

        .prod-wrap .product-image span.sale {
            background-color: #57889c;
        }

        .prod-wrap .product-image span.hot {
            background-color: #a90329;
        }

        .prod-wrap .product-image span.special {
            background-color: #3B6764;
        }

        .shop-btn {
            position: relative
        }

        .shop-btn>span {
            background: #a90329;
            display: inline-block;
            font-size: 10px;
            box-shadow: inset 1px 1px 0 rgba(0, 0, 0, .1), inset 0 -1px 0 rgba(0, 0, 0, .07);
            font-weight: 700;
            border-radius: 50%;
            padding: 2px 4px 3px !important;
            text-align: center;
            line-height: normal;
            width: 19px;
            top: -7px;
            left: -7px
        }

        .product-deatil hr {
            padding: 0 0 5px !important
        }

        .product-deatil .glyphicon {
            color: #3276b1
        }

        .product-deatil .product-image {
            border-right: 0px solid #fff !important
        }

        .product-deatil .name {
            margin-top: 0;
            margin-bottom: 0
        }

        .product-deatil .name small {
            display: block
        }

        .product-deatil .name a {
            margin-left: 0
        }

        .product-deatil .price-container {
            font-size: 24px;
            margin: 0;
            font-weight: 300;

        }

        .product-deatil .price-container small {
            font-size: 12px;

        }

        .product-deatil .fa-2x {
            font-size: 16px !important
        }

        .product-deatil .fa-2x>h5 {
            font-size: 12px;
            margin: 0
        }

        .product-deatil .fa-2x+a,
        .product-deatil .fa-2x+a+a {
            font-size: 13px
        }

        .product-deatil .certified {
            margin-top: 10px
        }

        .product-deatil .certified ul {
            padding-left: 0
        }

        .product-deatil .certified ul li:not(first-child) {
            margin-left: -3px
        }

        .product-deatil .certified ul li {
            display: inline-block;
            background-color: #f9f9f9;
            padding: 13px 19px
        }

        .product-deatil .certified ul li:first-child {
            border-right: none
        }

        .product-deatil .certified ul li a {
            text-align: left;
            font-size: 12px;
            color: #6d7a83;
            line-height: 16px;
            text-decoration: none
        }

        .product-deatil .certified ul li a span {
            display: block;
            color: #21c2f8;
            font-size: 13px;
            font-weight: 700;
            text-align: center
        }

        .product-deatil .message-text {
            width: calc(100% - 70px)
        }

        /*--Button effect classes for add to cart*/
        .btn-cart {
            border-radius: 0;
            position: relative;
            color: #fff;
            border: 1px solid transparent;
            text-transform: uppercase;
            transition: all 0.40s ease 0s;
        }

        .btn-cart:after {
            content: "\f07a";
            font-family: fontawesome;
            position: absolute;
            right: 6px;
            top: -4px;
            opacity: 0;
            color: #fff;
            transition: all 0.40s ease 0s;
        }

        .btn-cart:hover:after {
            top: 40%;
            opacity: 5;
        }

        .btn-cart span {
            display: block;
            transition: all 0.70s linear 0s;
        }

        .btn-cart:hover span {
            transform: translate(-9px);
        }

        /*--Button effect classes for More info*/
        .btn-info {
            border-radius: 0;
            position: relative;
            color: #fff;
            border: 1px solid transparent;
            text-transform: uppercase;
            transition: all 0.40s ease 0s;
        }

        .btn-info:after {
            content: "\f129";
            font-family: fontawesome;
            position: absolute;
            right: 6px;
            top: -4px;
            opacity: 0;
            color: #fff;
            transition: all 0.40s ease 0s;
        }

        .btn-info:hover:after {
            top: 40%;
            opacity: 5;
        }

        .btn-info span {
            display: block;
            transition: all 0.70s linear 0s;
        }

        .btn-info:hover span {
            transform: translate(-9px);
        }

        @media only screen and (min-width:1024px) {
            .prod-info-main div[class*=col-md-4] {
                padding-right: 0
            }

            .prod-info-main div[class*=col-md-8] {
                padding: 0 13px 0 0
            }

            .prod-wrap div[class*=col-md-5] {
                padding-right: 0
            }

            .prod-wrap div[class*=col-md-7] {
                padding: 0 13px 0 0
            }

            .prod-info-main .product-image {
                border-right: 1px solid #dfe5e9
            }

            .prod-info-main .product-info {
                position: relative
            }
        }
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
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
                    <a href="page1.html" class="navbar-brand">MariaDB</a>
                </div>

                <div class="navbar-collapse collapse" id="mobile_menu">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="page1.html">Home</a></li>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Membeli <span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="supplier.html">Supplier</a></li>
                                <li><a href="membeli.html">Membeli</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Pabrik <span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="cat.html">Cat</a></li>
                                <li><a href="pabrik.html">Pabrik</a></li>
                                <li><a href="pegawai.html">Pegawai</a></li>
                                <li><a href="gaji.html">Gaji</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Menjual <span
                                    class="caret"></span></a>
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

<div class="container">
    <div class="col-xs-12 col-md-6">
        <!-- First product box start here-->
        <div class="prod-info-main prod-wrap clearfix">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="product-image">
                        <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/6/10/b9297349-df25-4842-bc6f-987acf676fbd.jpg" class="img-responsive rotprod">
                        <span class="tag2 hot">
                            HOT
                        </span>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="product-deatil">
                        <h5 class="name">
                            <a href="#">
                                Product Code/Name here
                            </a>
                            <a href="#">
                                <span>Product Category</span>
                            </a>

                        </h5>
                        <p class="price-container">
                            <span>$199</span>
                        </p>
                        <span class="tag1"></span>
                    </div>
                    <div class="description">
                        <p>A Short product description here </p>
                    </div>
                    <div class="product-info smart-form">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="javascript:void(0);" class="btn btn-danger btn-cart"><span>Add to
                                        cart</span></a>
                                <a href="javascript:void(0);" class="btn btn-info"><span>More info</span></a>
                            </div>
                            <div class="col-md-12">
                                <div class="rating">Rating:
                                    <label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
                                    <label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end product -->
    </div>
    <div class="col-xs-12 col-md-6">
        <!-- First product box start here-->
        <div class="prod-info-main prod-wrap clearfix">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="product-image">
                        <img src="https://s3.bukalapak.com/img/8630621573/large/CAT_PELAPIS_ANTI_BOCOR_NO_DROP___NODROP_KEMASAN_4_KG.jpg" alt="194x228" class="img-responsive rotprod">
                        <span class="tag2 hot">
                            HOT
                        </span>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="product-deatil">
                        <h5 class="name">
                            <a href="#">
                                Product Code/Name here <span>Product Category</span>
                            </a>
                        </h5>
                        <p class="price-container">
                            <span>$50</span>
                        </p>
                        <span class="tag1"></span>
                    </div>
                    <div class="description">
                        <p>A Short product description here </p>
                    </div>
                    <div class="product-info smart-form">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="javascript:void(0);" class="btn btn-danger btn-cart"><span>Add to
                                        cart</span></a>
                                <a href="javascript:void(0);" class="btn btn-info"><span>More info</span></a>
                            </div>
                            <div class="col-md-12">
                                <div class="rating">Rating:
                                    <label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
                                    <label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end product -->
    </div>
    <div class="col-xs-12 col-md-6">
        <!-- First product box start here-->
        <div class="prod-info-main prod-wrap clearfix">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="product-image">
                        <img src="data:image/jpeg;base64,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" class="img-responsive rotprod">
                        <span class="tag3 special">
                            Special
                        </span>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="product-deatil">
                        <h5 class="name">
                            <a href="#">
                                Product Code/Name here <span>Product Category</span>
                            </a>
                        </h5>
                        <p class="price-container">
                            <span>$299</span>
                        </p>
                        <span class="tag1"></span>
                    </div>
                    <div class="description">
                        <p>A Short product description here </p>
                    </div>
                    <div class="product-info smart-form">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="javascript:void(0);" class="btn btn-danger btn-cart"><span>Add to
                                        cart</span></a>
                                <a href="javascript:void(0);" class="btn btn-info"><span>More info</span></a>
                            </div>
                            <div class="col-md-12">
                                <div class="rating">Rating:
                                    <label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
                                    <label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end product -->
    </div>
    <div class="col-xs-12 col-md-6">
        <!-- First product box start here-->
        <div class="prod-info-main prod-wrap clearfix">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="product-image">
                        <img src="https://cf.shopee.co.id/file/aa6d7b5ad2c69b77eb947b23575209ef" alt="194x228" class="img-responsive rotprod">
                        <span class="tag2 sale">
                            SALE
                        </span>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="product-deatil">
                        <h5 class="name">
                            <a href="#">
                                Product Code/Name here <span>Product Category</span>
                            </a>
                        </h5>
                        <p class="price-container">
                            <span>$1000</span>
                        </p>
                        <span class="tag1"></span>
                    </div>
                    <div class="description">
                        <p>A Short product description here </p>
                    </div>
                    <div class="product-info smart-form">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="javascript:void(0);" class="btn btn-danger btn-cart"><span>Add to
                                        cart</span></a>
                                <a href="javascript:void(0);" class="btn btn-info"><span>More info</span></a>
                            </div>
                            <div class="col-md-12">
                                <div class="rating">Rating:
                                    <label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
                                    <label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



</div>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <title>Bootstrap</title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>
  <symbol id="facebook" viewBox="0 0 16 16">
    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
  </symbol>
  <symbol id="instagram" viewBox="0 0 16 16">
      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
  </symbol>
  <symbol id="twitter" viewBox="0 0 16 16">
    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
  </symbol>
</svg>

<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      </a>
      <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
    </ul>
  </footer>
</div>

</body>

</html>