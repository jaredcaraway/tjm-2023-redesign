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
					<!-- TODO: Finish styling buttons -->
					<?php
					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-title btn btn-primary"><i class="fa-solid fa-arrow-left"></i> %title</span>',
							'next_text' => '<span class="nav-title btn btn-primary">%title <i class="fa-solid fa-arrow-right"></i></span>',
						)
					);
					?>
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
