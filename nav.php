<body data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="0">

<?php 
  session_start();
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restorani</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v1.2.1
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Restorani</title>
		    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

	</head>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <?php
                        echo('<li><a href="index.php">Naslovna</a></li>');

           if(isset($_SESSION["email"]))
           { 
                        if ($_SESSION["uloga"]=="admin")
             {
               echo('<li><a href="restorani.php">Restorani</a></li>');
             }   
             echo('<li><a href="mojerezervacije.php">Moje rezervacije</a></li>');

             echo('<li><a href="#" >Prijavljeni ste kao '.$_SESSION["email"].'</a></li>');
             echo('<li><a href="logout.php">Odjava</a></li>');

           }
           

           else{
             echo('<li><a href="registracija.php">Registracija</a></li>');
             echo('<li><a href="prijava.php">Prijava</a></li>');
             echo("<li><a href= >Prijavljeni ste kao gost</a></li>");
           }
           
         ?>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  <button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button></header>
