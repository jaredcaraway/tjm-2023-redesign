<?php

/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package TJM_2023_Redesign
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-4" src="<?php echo get_template_directory_uri() . '/assets/img/terry-jude-miller-portrait-no-bg.png' ?>" alt="Portrait of Texas poet Terry Jude Miller wearing a black shirt and gray suit jacket." />
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

</main><!-- #main -->

<?php get_footer(); ?>