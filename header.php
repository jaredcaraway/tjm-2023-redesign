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
			<a class="navbar-brand text-uppercase" href="<?php echo get_site_url() ?>">
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
				<a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo get_site_url() . '#about' ?>"
					>About</a
				>
				</li>
				<li class="nav-item mx-0 mx-lg-1">
				<a href="<?php echo get_site_url() . '#news' ?>" class="nav-link py-3 px-0 px-lg-3 rounded"
					>News</a
				>
				</li>
				<li class="nav-item mx-0 mx-lg-1">
				<a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo get_site_url() . '#books' ?>"
					>Books</a
				>
				</li>
				<li class="nav-item mx-0 mx-lg-1">
				<a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo get_site_url() . '#anthologies' ?>"
					>Anthologies</a
				>
				</li>
				<li class="nav-item mx-0 mx-lg-1">
				<a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo get_site_url() . '#photos' ?>"
					>Photos</a
				>
				</li>
				<li class="nav-item mx-0 mx-lg-1">
				<a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo get_site_url() . '#poems' ?>"
					>Poems</a
				>
				</li>
			</ul>
			</div>
		</div>
		</nav>