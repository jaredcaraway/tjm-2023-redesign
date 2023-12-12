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
                <h1 class="entry-title text-center mb-4">News Archives</h1>
            </header><!-- .page-header -->

            <div class="row d-flex mb-5 align-items-stretch">
                <?php
                /* Start the Loop */
                while (have_posts()): the_post();
                    /*
                     * Include the Post-Type-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                     */
                    // get_template_part( 'template-parts/content', get_post_type() );
                    ?>

                    <div class="col-12 col-sm-6 col-xl-3 mb-4">
                        <div class="card archive-card">
                            <?php if (has_post_thumbnail()): ?>
                                <div class="post-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
                                        echo '<img src="' . esc_url($thumbnail[0]) . '" alt="' . esc_attr(get_the_title()) . '">';
                                        ?>
                                    </a>
                                </div>
                            <?php else: ?>
                                <div class="post-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-thumbnail.png" alt="<?php echo esc_attr(get_the_title()); ?>">
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="card-body">
                                <!--<h2 class="card-title"></h2>-->
                                <p class="card-text text-center">
                                    <?php
                                    printf(
                                        esc_html__('%s', 'tjm-2023-redesign'),
                                        get_the_time(esc_html__('F j, Y', 'tjm-2023-redesign'))
                                    );
                                    ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary post-link-button"><h2><?php echo esc_html(get_the_title()); ?></h2></a>
                            </div><!-- .card-body -->
                        </div><!-- .card -->
                    </div><!-- .col -->

                    <?php
                endwhile;
                the_posts_navigation();
            else:
                get_template_part('template-parts/content', 'none');
            endif;
            ?>
            </div> <!-- .row -->
    </div><!-- .container -->
</main><!-- #main -->

<?php
get_footer();
?>
