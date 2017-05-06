<?php session_start(); ?>
<html>
<head>
	<title>Woksqua</title>	
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="bootstrap-3.3.7-dist\css\bootstrap.min.css" rel="stylesheet" type="text/css">
	 <script type='text/javascript' src='jquery-3.2.1.min.js'></script>
	 <script type="text/javascript" src='jssor.slider-23.1.5.min.js'></script>
	 
</head>
<body>
<ul id="menu">
   <li><img src='img/logo.png'/></li>
   <li><a href="index.php">home</a></li>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">ikan</a>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </li>
  <li>aksesoris</li>
  <li>artikel</li>
  <li class="alatpertama"><img src="img/find.png"/></li>
  <li><img src="img/keranjang.png"/></li>
  <?php
    if(isset($_SESSION['valid'])) {
          echo "<li class=\"dropdown\"><a href=\"javascript:void(0)\" class=\"dropbtn\">".$_SESSION['nama']."</a>";
          echo "<div class=\"dropdown-content\">
                  <a href=\"pengaturan.php\">Pengaturan</a>
                  <a href=\"logout.php\">Logout</a>
                </div></li>";
    }else{
            echo "<li><a href=\"login.php\">login</a></li>";
                        }
  echo "</ul>"; ?>