<?php
/**
 * The template for displaying archive pages for News Items.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tjm-2023-redesign
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <?php if (have_posts()): ?>
            <header class="page-header">
                <h1 class="entry-title text-center">News Archives</h1>
            </header><!-- .page-header -->
            <div class="row">
                <?php

                /* Start the Loop */
                while (have_posts()):
                    the_post();
                    // /*
                    //  * Include the Post-Type-specific template for the content.
                    //  * If you want to override this in a child theme, then include a file
                    //  * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                    //  */
                    // get_template_part( 'template-parts/content', get_post_type() );
                    ?>
                    <div class="col-12 col-lg-6 col-xl-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                the_posts_navigation();
            else:
                get_template_part('template-parts/content', 'none');
            endif;
            ?>
            </div> <!-- End row -->
    </div><!--

</main><!-- #main -->

<?php
get_footer();
