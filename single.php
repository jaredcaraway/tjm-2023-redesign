<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TJM_2023_Redesign
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container">
		<?php
		while (have_posts()):
			the_post();

			get_template_part('template-parts/content', get_post_type());
			?>
			<div class="row">
				<div class="col-8 mx-auto my-4">
					<?php
					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-title btn btn-primary"><i class="fa-solid fa-arrow-left"></i> ' . get_the_date('m/d/y') . ': %title</span>',
							'next_text' => '<span class="nav-title btn btn-primary">' . get_the_date('m/d/y') .': %title ' .  '<i class="fa-solid fa-arrow-right"></i></span>',
						)
					);
					?>
				</div>
				<div class="col-12 col-xl-6 offset-xl-3 text-center mt-4 mb-3">
					<a class="btn btn-primary mb-2 nav-title" href="<?php echo get_site_url() . '/news' ?>" rel="noopener" role="button"><i class="fa-solid fa-newspaper pe-2 nav-title"></i>Back to News Archives</a>
				</div>
			</div>
			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()):
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</div>
</main><!-- #main -->

<?php
get_footer();
