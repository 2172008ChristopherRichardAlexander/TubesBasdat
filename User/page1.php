<?php

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
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.6.0.min.js"></script>
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

        .color {
            margin-bottom: 20px;
            margin-left: 50px;
        }
        input[type='number']{
        width: 50px;
        } 
        .pabrik{
            text-align: center;
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
                    <a class="navbar-brand">MariaDB</a>
                </div>

                <div class="navbar-collapse collapse" id="mobile_menu">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="page1.php?q=<?php echo $_GET['q'] ?>">Home</a></li>
                        <li><a href="cart.php?q=<?php echo $_GET['q'] ?>">History</a></li>
                        <li><a href="contactus.php?q=<?php echo $_GET['q'] ?>">Contact Us</a></li>
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
<form id="myform" method="post" action="insertcart.php">
    <select  id="yourid"  class="pabrik">
        <option value="pabrikSenyum">Pabrik Senyum</option>
        <option value="pabrikCemberut">Pabrik Cemberut</option>
    </select>
</form>
<div class="container">
    <div class="col-xs-12 col-md-6">
        <!-- First product box start here-->
        <div class="prod-info-main prod-wrap clearfix">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="product-image">
                        <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/6/10/b9297349-df25-4842-bc6f-987acf676fbd.jpg"
                            class="img-responsive rotprod">
                        <span class="tag2 hot">
                            HOT
                        </span>
                    </div>
                </div>
                <form  method="post" action="insertcart.php?q=<?php echo $_GET['q'] ?>">
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-deatil">
                            <h5 class="name">
                                <a href="#">
                                    Dulux
                                </a>
                                <a href="#">
                                    <span>Product Category</span>
                                </a>
                            </h5>
                            <p class="price-container">
                                <input name="price" id="priceIpt" type="hidden" value="150000"/>
                                <span id="shwPrice">Rp150000</span>
                            </p>
                            <span class="tag1"></span>
                        </div>
                        <div class="description">
                            <p>Warnai rumah Anda Dulux Paint.</p>
                        </div>
                        <div class="product-info smart-form">
                            <div class="row">
                                <input type="hidden" value="Dulux" name="brandName"></input>
                                <select id="dropDown1" onchange="price1()" name="color" class="color">
                                    <option value="Merah">Merah</option>
                                    <option value="Kuning">Kuning</option>
                                    <option value="Hijau">Hijau</option>
                                    <option value="Biru">Biru</option>
                                </select>
                                <input required name="jumlah" class="input1" min="1" type="number">Qty</input>
                                <input type="hidden" id="hasilPabrik" name="pabrik" value="pabrikSenyum"></input>
                                <div class="col-md-12">
                                    <button onclick="namaPabrik()" type="submit" href="javascript:void(0);"
                                        class="btn btn-danger btn-cart"><span>Buy</span></button>
                                </div>
                                <div class="col-md-12">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end product -->
    </div>
    <script>
        function price1 (){
            var color = document.getElementById("dropDown1").value;
            if(color=="Merah") {
                var price = 150000;
                document.getElementById("priceIpt").value=price;
                document.getElementById("shwPrice").innerHTML="Rp"+price;
            }
            else if(color=="Kuning") {
                var price = 170000;
                document.getElementById("priceIpt").value=price;
                document.getElementById("shwPrice").innerHTML="Rp"+price;
            }
            else if(color=="Hijau") {
                var price = 200000;
                document.getElementById("priceIpt").value=price;
                document.getElementById("shwPrice").innerHTML="Rp"+price;
            }
            else {
                var price = 230000;
                document.getElementById("priceIpt").value=price;
                document.getElementById("shwPrice").innerHTML="Rp"+price;
            }
        }
    </script>
    <div class="col-xs-12 col-md-6">
        <!-- First product box start here-->
        <div class="prod-info-main prod-wrap clearfix">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="product-image">
                        <img src="https://s3.bukalapak.com/img/8630621573/large/CAT_PELAPIS_ANTI_BOCOR_NO_DROP___NODROP_KEMASAN_4_KG.jpg"
                            alt="194x228" class="img-responsive rotprod">
                        <span class="tag2 hot">
                            HOT
                        </span>
                    </div>
                </div>
                <form method="post" action="insertcart.php?q=<?php echo $_GET['q'] ?>"">
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-deatil">
                            <h5 class="name">
                                <a href="#">
                                    NoDrop <span>Product Category</span>
                                </a>
                            </h5>
                            <p class="price-container">
                                <input name="price" id="priceIpt2" type="hidden" value="250000"/>
                                <span id="shwPrice2">Rp250000</span>
                            </p>
                            <span class="tag1"></span>
                        </div>
                        <div class="description">
                            <p>Dapatkan Cat Pelapis Anti Bocor Tahan Lama Hingga 5 Tahun.</p>
                        </div>
                        <div class="product-info smart-form">
                            <div class="row">
                                <input type="hidden" value="NoDrop" name="brandName"></input>
                                <select id="dropDown2" onchange="price2()" name="color" class="color">
                                    <option value="Merah">Merah</option>
                                    <option value="Kuning">Kuning</option>
                                    <option value="Hijau">Hijau</option>
                                    <option value="Biru">Biru</option>
                                </select>
                                <input required name="jumlah" class="input1" min="1" type="number" >Qty</input>
                                <input type="hidden" id="hasilPabrik" name="pabrik" value="pabrikSenyum"></input>
                                <div class="col-md-12">
                                    <button onclick="namaPabrik()" type="submit" href="javascript:void(0);"
                                        class="btn btn-danger btn-cart"><span>Buy</span></button>
                                </div>
                                <div class="col-md-12">

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end product -->
    </div>
    <script>
        function price2 (){
            var color = document.getElementById("dropDown2").value;
            if(color=="Merah") {
                var price = 250000;
                document.getElementById("priceIpt2").value=price;
                document.getElementById("shwPrice2").innerHTML="Rp"+price;
            }
            else if(color=="Kuning") {
                var price = 220000;
                document.getElementById("priceIpt2").value=price;
                document.getElementById("shwPrice2").innerHTML="Rp"+price;
            }
            else if(color=="Hijau") {
                var price = 200000;
                document.getElementById("priceIpt2").value=price;
                document.getElementById("shwPrice2").innerHTML="Rp"+price;
            }
            else {
                var price = 270000;
                document.getElementById("priceIpt2").value=price;
                document.getElementById("shwPrice2").innerHTML="Rp"+price;
            }
        }
    </script>
    <div class="col-xs-12 col-md-6">
        <!-- First product box start here-->
        <div class="prod-info-main prod-wrap clearfix">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="product-image">
                        <img src="data:image/jpeg;base64,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"
                            class="img-responsive rotprod">
                        <span class="tag3 special">
                            Special
                        </span>
                    </div>
                </div>
                <form method="post" action="insertcart.php?q=<?php echo $_GET['q'] ?>"">
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-deatil">
                            <h5 class="name">
                                <a href="#">
                                    NipponPaint <span>Product Category</span>
                                </a>
                            </h5>
                            <p class="price-container">
                                <input name="price" id="priceIpt3" type="hidden" value="150000"/>
                                <span id="shwPrice3">Rp150000</span>
                            </p>
                            <span class="tag1"></span>
                        </div>
                        <div class="description">
                            <p>Percantik Rumah Anda dengan Cat Tembok Anti Pudar dan Tahan Lama. </p>
                        </div>
                        <div class="product-info smart-form">
                            <div class="row">
                                <input type="hidden" value="NipponPaint" name="brandName"></input>
                                <select onchange="price3()" id="dropDown3" name="color" class="color">
                                    <option value="Merah">Merah</option>
                                    <option value="Kuning">Kuning</option>
                                    <option value="Hijau">Hijau</option>
                                    <option value="Biru">Biru</option>
                                </select>
                                <input required name="jumlah" class="input1" min="1" type="number">Qty</input>
                                <input type="hidden" id="hasilPabrik" name="pabrik" value="pabrikSenyum"></input>
                                <div class="col-md-12">
                                    <button onclick="namaPabrik()" type="submit" href="javascript:void(0);"
                                        class="btn btn-danger btn-cart"><span>Buy</span></button>
                                </div>
                                <div class="col-md-12">

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end product -->
    </div>
    <script>
        function price3 (){
            var color = document.getElementById("dropDown3").value;
            if(color=="Merah") {
                var price = 150000;
                document.getElementById("priceIpt3").value=price;
                document.getElementById("shwPrice3").innerHTML="Rp"+price;
            }
            else if(color=="Kuning") {
                var price = 120000;
                document.getElementById("priceIpt3").value=price;
                document.getElementById("shwPrice3").innerHTML="Rp"+price;
            }
            else if(color=="Hijau") {
                var price = 100000;
                document.getElementById("priceIpt3").value=price;
                document.getElementById("shwPrice3").innerHTML="Rp"+price;
            }
            else {
                var price = 175000;
                document.getElementById("priceIpt3").value=price;
                document.getElementById("shwPrice3").innerHTML="Rp"+price;
            }
        }
    </script>
    <div class="col-xs-12 col-md-6">
        <!-- First product box start here-->
        <div class="prod-info-main prod-wrap clearfix">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="product-image">
                        <img src="https://cf.shopee.co.id/file/aa6d7b5ad2c69b77eb947b23575209ef" alt="194x228"
                            class="img-responsive rotprod">
                        <span class="tag2 sale">
                            SALE
                        </span>
                    </div>
                </div>
                <form method="post" action="insertcart.php?q=<?php echo $_GET['q'] ?>">
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-deatil">
                            <h5 class="name">
                                <a href="#">
                                    Puffin <span>Product Category</span>
                                </a>
                            </h5>
                            <p class="price-container">
                                <input name="price" id="priceIpt4" type="hidden" value="130000"/>
                                <span id="shwPrice4">Rp130000</span>
                            </p>
                            <span class="tag1"></span>
                        </div>
                        <div class="description">
                            <p>Mau menyulap rumah kamu menjadi rumah yang elegan dengan Puffin Paint </p>
                        </div>
                        <div class="product-info smart-form">
                            <div class="row">
                                <input type="hidden" value="Puffin" name="brandName"></input>
                                <select id="dropDown4" onchange="price4()" name="color" class="color">
                                    <option value="Merah">Merah</option>
                                    <option value="Kuning">Kuning</option>
                                    <option value="Hijau">Hijau</option>
                                    <option value="Biru">Biru</option>
                                </select>
                                <input required name="jumlah" class="input1" min="1" type="number">Qty</input>
                                <input type="hidden" id="hasilPabrik" name="pabrik" value="pabrikSenyum"></input>
                                <div class="col-md-12">
                                <button onclick="namaPabrik()" type="submit" href="javascript:void(0);"
                                        class="btn btn-danger btn-cart"><span>Buy</span></button>
                                </div>
                                <div class="col-md-12">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function price4 (){
            var color = document.getElementById("dropDown4").value;
            if(color=="Merah") {
                var price = 130000;
                document.getElementById("priceIpt4").value=price;
                document.getElementById("shwPrice4").innerHTML="Rp"+price;
            }
            else if(color=="Kuning") {
                var price = 190000;
                document.getElementById("priceIpt4").value=price;
                document.getElementById("shwPrice4").innerHTML="Rp"+price;
            }
            else if(color=="Hijau") {
                var price = 120000;
                document.getElementById("priceIpt4").value=price;
                document.getElementById("shwPrice4").innerHTML="Rp"+price;
            }
            else {
                var price = 150000;
                document.getElementById("priceIpt4").value=price;
                document.getElementById("shwPrice4").innerHTML="Rp"+price;
            }
        }
</script>
<script>
    function namaPabrik(){
        var x =document.getElementById("yourid").value;
        document.getElementById("hasilPabrik").value=x;
    }
</script>
</form>
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

<?php 
    

?>