<?php
/**
 * Template part for displaying news items.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TJM_2023_Redesign
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
    <div class="container">
        <header class="entry-header">
            <?php the_title('<h1 class="entry-title text-center">', '</h1>'); ?>
            <div class="entry-meta"><!-- .entry-meta -->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
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
                    
                    <div class="divider-custom-line"></div>
                </div>
            </div><!-- .entry-meta -->
        </header><!-- .entry-header -->

        <div class="entry-content container">
            <?php
            the_field('news_item_body');
            ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-<?php the_ID(); ?> -->