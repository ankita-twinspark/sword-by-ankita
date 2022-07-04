<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="<?php echo get_template_directory_uri();?>/img/favicon.png" rel="icon">
	<link href="<?php echo get_template_directory_uri();?>/img/apple-touch-icon.png" rel="apple-touch-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php echo get_template_directory_uri();?>/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php //body_class(); ?>>
<?php //wp_body_open(); ?>
 <!-- ======= Header ======= -->
<heder id="header" class="fixed-top ">
<div class="container d-flex align-items-center justify-content-lg-between">

  <h1 class="logo me-auto me-lg-0"><a href="index.html">Gp<span>.</span></a></h1>
  <!-- Uncomment below if you prefer to use an image logo -->
  <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

  <nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
      <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
      <li><a class="nav-link scrollto" href="#about">About</a></li>
      <li><a class="nav-link scrollto" href="#services">Services</a></li>
      <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
      <li><a class="nav-link scrollto" href="#team">Team</a></li>
      <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a href="#">Drop Down 1</a></li>
          <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="#">Deep Drop Down 1</a></li>
              <li><a href="#">Deep Drop Down 2</a></li>
              <li><a href="#">Deep Drop Down 3</a></li>
              <li><a href="#">Deep Drop Down 4</a></li>
              <li><a href="#">Deep Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#">Drop Down 2</a></li>
          <li><a href="#">Drop Down 3</a></li>
          <li><a href="#">Drop Down 4</a></li>
        </ul>
      </li>
      <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav><!-- .navbar -->

  <a href="#about" class="get-started-btn scrollto">Get Started</a>

</div>
</header><!-- End Header -->