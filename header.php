<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TJM_2023_Redesign
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
	<!-- TODO: Add meta description -->
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Terry Jude Miller: Richmond, Texas-Based Poet & Author</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <?php wp_head(); ?>
</head>

<body <?php body_class();  ?> id="page-top" >
<?php wp_body_open(); ?>
<!-- Navigation-->
	<nav class="navbar navbar-expand-xl bg-secondary fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand text-uppercase" href="#page-top">
			Terry Jude Miller
			</a>
			<button
			class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbarResponsive"
			aria-controls="navbarResponsive"
			aria-expanded="false"
			aria-label="Toggle navigation"
			>
			Menu
			<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item mx-0 mx-lg-1">
				<a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about"
					>About</a
				>
				</li>
				<li class="nav-item mx-0 mx-lg-1">
				<a href="#news" class="nav-link py-3 px-0 px-lg-3 rounded"
					>News</a
				>
				</li>
				<li class="nav-item mx-0 mx-lg-1">
				<a class="nav-link py-3 px-0 px-lg-3 rounded" href="#books"
					>Books</a
				>
				</li>
				<li class="nav-item mx-0 mx-lg-1">
				<a class="nav-link py-3 px-0 px-lg-3 rounded" href="#anthologies"
					>Anthologies</a
				>
				</li>
				<li class="nav-item mx-0 mx-lg-1">
				<a class="nav-link py-3 px-0 px-lg-3 rounded" href="#photos"
					>Photos</a
				>
				</li>
				<li class="nav-item mx-0 mx-lg-1">
				<a class="nav-link py-3 px-0 px-lg-3 rounded" href="#poems"
					>Poems</a
				>
				</li>
			</ul>
			</div>
		</div>
		</nav>
		<!-- Masthead-->
		<header class="masthead bg-primary text-white text-center">
		<div class="container d-flex align-items-center flex-column">
			<!-- Masthead Avatar Image-->
			<img
			class="masthead-avatar mb-4"
			src="<?php echo get_template_directory_uri() . '/assets/img/terry-jude-miller-portrait-no-bg.png' ?>"
			alt="Portrait of Texas poet Terry Jude Miller wearing a black shirt and gray suit jacket."
			/>
			<!-- Masthead Heading-->
			<h1 class="masthead-heading text-uppercase mb-0">Terry Jude Miller</h1>
			<!-- Masthead Subheading-->
			<p class="masthead-subheading font-weight-light mb-0 mt-4">
			Poet based in Richmond, Texas
			</p>
			<!-- Icon Divider-->
			<div class="divider-custom divider-light">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon">
				<i class="fa-solid fa-pen-nib"></i>
			</div>
			<div class="divider-custom-line"></div>
			</div>
		</div>
		</header>
