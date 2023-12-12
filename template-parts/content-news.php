<?php
/**
 * Template part for displaying news items.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TJM_2023_Redesign
 */

?>
<!-- <?php tjm_2023_redesign_breadcrumb(); ?> -->

<div class="col-12 col-xl-6 mt-4">
    <a class="btn btn-primary mb-4 nav-title" href="<?php echo get_site_url() . '/news' ?>" rel="noopener" role="button"><i class="fa-solid fa-newspaper pe-2 nav-title"></i>Back to News Archives</a>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
    <div class="container">
        <header class="entry-header">
            <?php the_title('<h1 class="entry-title text-center">', '</h1>'); ?>
            <?php if (has_post_thumbnail()): ?>
                <div class="row">
                    <div class="featured-image col-6 mx-auto mt-3 rounded">
                        <?php the_post_thumbnail('large', array('class' => 'rounded')); ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="entry-meta"><!-- .entry-meta -->
                <div class="divider-custom">
                    <div class="divider-custom-line d-none d-sm-block"></div>
                    <div class="divider-custom-icon">
                        <span class="posted-on">
                            <?php
                            printf(
                                esc_html__('%s', 'tjm-2023-redesign'),
                                get_the_time(esc_html__('F j, Y', 'tjm-2023-redesign'))
                            );
                            ?>
                        </span>
                    </div>
                    <div class="divider-custom-line d-none d-sm-block"></div>
                </div>
            </div><!-- .entry-meta -->
        </header><!-- .entry-header -->

        <div class="entry-content container">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-8 mx-auto lead">
                    <?php
                    the_content();
                    ?>
                </div>
            </div>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post -->