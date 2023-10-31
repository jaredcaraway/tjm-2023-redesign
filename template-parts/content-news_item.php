<?php
/**
 * Template part for displaying news items.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TJM_2023_Redesign
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <div class="entry-meta">
            <?php
            tjm_2023_redesign_posted_on();
            tjm_2023_redesign_posted_by();
            ?>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->

    <div class="entry-content">
        <h1>NEWS ITEM TEMPLATE</h1>
        <?php
        the_content();

        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tjm-2023-redesign' ),
            'after'  => '</div>',
        ) );
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php tjm_2023_redesign_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
