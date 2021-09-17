<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Our_Towns
 */

get_header();
?>

	<div id="" class="container_single">
		<div class="row justify-content-start">
		<?php
		while ( have_posts() ) :
			the_post();

			// get_template_part( 'template-parts/content', get_post_type() );
			?>
			<div class="col-7 whereAmI">
				<? the_content();?>
			</div>
			<?

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'our-towns' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'our-towns' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );

			// // If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>
			<div class="col-5 whereAmI">

			</div>
		</div>
	</div>

<?php
get_sidebar();
get_footer();
