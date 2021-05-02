<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: php/login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

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
    @import url('http://fonts.googleapis.com/ccs/family=Quicksand:400,500&subset=latin-ext');

    body {
      padding: 100px;
      background-image: linear-gradient(TO RIGHT, #040404, #000000, #656565);
      text-align: center;
      font-family: 'Quicksand', sans-serif;
    }

    h5 {
      text-align: center;
      margin-left: -15px;
      display: inline-block;
    }

    h5 i:hover {
      -webkit-transform: scale(1.08);
      transform: scale(1.48);
    }

    .main {
      width: 800px;
      height: 520px;
      background-color: #fafafa;
      margin: 0 auto;
      padding-top: 20px;
      border-radius: 10px;
      border: 1px solid #eeeeee;
    }

    .img {
      background-image: url(../assets/img/taufik.jpeg);
      background-color: #eaeaea;
      background-size: cover;
      border-radius: 100px;
      width: 150px;
      height: 150px;
      margin: 0 auto;
      border: 1px solid #eaeaea;
    }

    h1 {
      text-align: center;
      font-size: 30px;
      margin: 0;
      font-weight: bold;
      color: #404040;
    }

    .text {
      text-align: center;
      font-size: 15px;
      margin: 0;
      color: #324e63;
    }

    p {
      margin: 0 auto;
      padding-top: 20px;
      width: 450px;
      height: auto;
      color: #324e63;
    }

    p a:hover {
      color: goldenrod;
    }
  </style>
</head>

<body>
  <div class="main">
    <div class="img"></div>
    <h1>Muchamad Taufik Mulyadi</h1>
    <div class="text">Owner of the Company from <strong>Bandung, Indonesia</strong></div>
    <p>Hello, welcome to my shop, Thank you for being our loyal customer, we will serve you as best as possible, <a href="admin.php #about">don't forget to visit my offline shop here</a>, and if there are defects in our shop, you can contact me.</p>
    <h5><a href="admin.php #contact"><i class="material-icons">account_box</i></a></h5>
  </div>
</body>

</html>