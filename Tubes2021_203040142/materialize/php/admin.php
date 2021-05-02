<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
// menghubungkan dengan file php lain nya
require 'functions.php';
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
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body class="black">

    <div class="navbar-fixed">
        <nav class="black">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#about" class="brand-logo center"><img src="../assets/img/logo.png" alt=""></a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="left hide-on-med-and-down">
                        <li><a href="#product">Product</a></li>
                        <li><a href="profile.php">Admin</a></li>
                    </ul>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="../index.php">Order</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="#product">Product</a></li>
        <li><a href="profile.php">Admin</a></li>
        <li><a href="../index.php">Order</a></li>
        <li><a href="#contact">Contact Us</a></li>
    </ul>


    <div class="slider">
        <ul class="slides">
            <li>
                <img src="../assets/img/slider/slider1.png"> <!-- random image -->
                <div class="caption left-align">
                    <h3>AE STORE.</h3>
                    <h5 class="light grey-text text-lighten-3">Guaranteed High Quality.</h5>
                </div>
            </li>
            <li>
                <img src="../assets/img/slider/slider2.png"> <!-- random image -->
                <div class="caption center-align">
                    <h3>AE STORE.</h3>
                    <h5 class="light grey-text text-lighten-3">Guaranteed High Quality.</h5>
                </div>
            </li>
            <li>
                <img src="../assets/img/slider/slider3.png"> <!-- random image -->
                <div class="caption right-align">
                    <h3>AE STORE.</h3>
                    <h5 class="light grey-text text-lighten-3">Guaranteed High Quality.</h5>
                </div>
            </li>
        </ul>
    </div>

    <section id="about" class="about scrollspy" style="margin-bottom:150px;">
        <div class="container">
            <div class="row center blue-text">
                <h4 class="grey-text">ABOUT AE STORE</h4>
                <div class="col m1 s12">
                    <a href="logout.php" class="waves-effect waves-light btn-small black white-text">Logout</a>
                </div>
            </div>

            <div class="row">
                <div class="col m6 s12 white-text">
                    <p>T-shirt</p>
                    <div class="progress">
                        <div class="determinate red" style="width: 95%"></div>
                    </div>
                    <p>Jacket</p>
                    <div class="progress">
                        <div class="determinate red" style="width: 80%"></div>
                    </div>
                    <p>Shoes</p>
                    <div class="progress">
                        <div class="determinate red" style="width: 85%"></div>
                    </div>
                    <p>Bag</p>
                    <div class="progress">
                        <div class="determinate red" style="width: 90%"></div>
                    </div>
                </div>
                <div class="col m6 s12 white-text center">
                    <img src="../assets/img/rsz_frame.png" alt="">
                    <p>AE Store is a shop that provides various products, such as bags, pants, t-shirts, jackets and shoes. Apart from trading online, AE Store has also opened an offline store, store branch address is Jl. Trunojoyo, Citarum, Kec. Bandung Wetan, Bandung City, West Java 40115.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="product" class="product scrollspy">
        <div class="container">
            <div class="add mb-3 waves-effect waves-light btn-small" style="width:150px" ;>
                <a href="tambah.php" style="text-decoration:none;color:white;">Add Data</a>
            </div>
            <form action="" method="get" style="float: right;">
                <span class="material-icons white-text" style="float: right;">
                    search</span>
                <button type="submit" name="cari" class="btn btn-outline-success rounded-pill transparent" style=float:right;></button>
                <input type="text" name="keyword" size="25" class="rounded-pill" placeholder="Search Here!" autofocus style="color: white;">
            </form>
            <div class="float-md-start">
                <table class="highlight">
                    <thead>
                        <tr class="yellow">
                            <th scope="col">NO</th>
                            <th scope="col">Opition</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($books)) : ?>
                            <tr>
                                <td colspan="7" style="color: white;">
                                    <h1>Data tidak ditemukan</h1>
                                </td>
                            </tr>
                        <?php else : ?>
                            <?php $i = 1 ?>
                            <?php foreach ($books as $book) : ?>
                                <tr class="white-text">

                                    <th scope="row"><?= $i ?></th>
                                    <td>
                                        <a href="ubah.php?id=<?= $book['id'] ?>"><button class="waves-effect waves-light btn-small yellow">Change</button></a>
                                        <a href="hapus.php?id=<?= $book["id"]; ?>" onclick="return confirm('yakin?');"><button class="waves-effect waves-light btn-small">Delete</button></a>
                                    </td>
                                    <td><img src="../assets/img/productmen/<?= $book["Picture"]; ?>"></td>
                                    <td><?= $book["Name"] ?></td>
                                    <td><?= $book["Description"] ?></td>
                                    <td><?= $book["Price"] ?></td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="progress">
                <div class="indeterminate"></div>
            </div>
        </div>
    </section>

    <section id="model" class="model scrollspy">
        <div class="container">
            <div class="row">
                <div class="col m6 s12">
                    <img src="../assets/img/model/model1.png" alt="">
                </div>
                <div class="col m6 s12">
                    <img src="../assets/img/model/model2.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col m12 s12 center">
                    <img src="../assets/img/model/model3.png" alt="">
                </div>
            </div>
            <div class="progress">
                <div class="indeterminate"></div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact scrollspy">
        <div class="container">
            <div class="row">
                <div class="col m5 s12 center">
                    <div class="card-panel center  black white-text">
                        <i class="material-icons">email</i>
                        <h5>Address</h5>
                        <p>Jl. Karang Pasundan No.14, Bandung</p>
                        <p>West Java, Indonesia</p>
                    </div>
                </div>
                    <div class="col m7 s12">
                        <h4 class="white-text center">Owner</h4>
                        <div class="social-media">
                            <a href="https://twitter.com/Muhamadtaufikm6"><img src="../assets/img/social media/sm1.png" alt=""></a>
                            <a href="https://api.whatsapp.com/send?phone=62895361095444"><img src="../assets/img/social media/sm2.png" alt=""></a>
                            <a href="https://www.instagram.com/mhmdtaufikm/"><img src="../assets/img/social media/sm3.png" alt=""></a>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <div class="footer">
        <p class="center white-text">Muchamad Taufik. Copyright © 2020.</p>
    </div>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script>
        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 600,
            duration: 500,
            interval: 3000
        });

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
            scrollOffset: 100
        });
    </script>
</body>

</html>