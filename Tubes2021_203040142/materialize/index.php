<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: php/login.php");
    exit;
}
// menghubungkan dengan file php lain nya
require 'php/functions.php';
//melakukan query
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $books = query("SELECT * FROM store WHERE
            Name LIKE '%$keyword%' OR
            Description LIKE '%$keyword%' OR
            Price LIKE '%$keyword%' 
            ");
} else {
    $books = query("SELECT * FROM store");
}




?>
<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <style>
        .order .parallax-container {
            height: 600px;
        }

        .order .parallax-container .parallax img {
            opacity: 0.3 !important;
        }

        #order {
            margin-bottom: 30px;
            padding-top: 30px;
            color: rgb(248, 247, 247);
        }

        .order h4 {
            color: goldenrod;
        }

        .parallax .container .row .input-field {
            margin-top: 40px;
        }

        .parallax-container .btn {
            margin-left: 230px;
        }

        .parallax-container .container .row .col .select {
            margin-left: 50px;
        }

        .parallax-container .container .row .col .select p {
            font-size: 15px;
            margin-top: -20px;
        }

        .parallax-container .container .row .col .card-panel {
            background-color: transparent;
            margin-left: 130px;
            margin-bottom: -150px;
        }

        .ongkir {
            color: white;
            font-size: 20px;
        }

        .nikmati {
            color: gray;
            font-size: 15px;
        }
    </style>
</head>

<body class="black">
    <section id="order" class="order scrollspy">
        <div class="parallax-container">
            <div class="parallax"><img src="assets/img/parallax.png"></div>
            <div class="container">
                <h4>Order Here ⬇</h4>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">add_shopping_cart</i>
                        <input id="add_shopping_cart" type="tel" class="validate white-text">
                        <label for="add_shopping_cart">Your Order</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">add_location</i>
                        <input id="add_location" type="text" class="validate white-text">
                        <label for="add_location">Address</label>
                    </div>
                    <div class="col s6 center">
                        <div class="card-panel center">
                            <i class="material-icons">airport_shuttle</i>
                            <p class="ongkir">Gratis Ongkir*</p>
                            <p class="nikmati">Nikmati Gratis Ongkir ke seluruh wilayah
                                Jabodetabek, Banten, Jabar, Jatim, Jateng, & Yogyakarta</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s3 center">
                        <div class="select">
                            <p>Delivery</p>
                            <select class="browser-default">
                                <option value="" disabled selected>select</option>
                                <option value="JNE">JNE</option>
                                <option value="JNT">JNT</option>
                                <option value="POS INDONESIA">POS INDONESIA</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">local_phone</i>
                        <input id="local_phone" type="text" class="validate white-text">
                        <label for="local_phone">Your Phone</label>
                    </div>
                </div>
            </div>
            <a href="php/admin.php" class=" btn waves-effect waves-light btn-small">Kembali</a>
            <a href="php/hapus.php?id=<?= $book["id"]; ?>" onclick="return confirm('Send?');"><button class="btn waves-effect waves-light btn-small">Send</button></a>
        </div>
        </div>
    </section>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const formSelect = document.querySelectorAll('.formSelect');
        M.FormSelect.init(formSelect);
    </script>

</body>

</html>