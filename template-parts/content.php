<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Our_Towns
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-5 m-2 genPost report-shadow'); ?>>
	<a href="<? the_permalink();?>">
		<header class="entry-header">
		<?php our_towns_post_thumbnail('small');
			if (is_singular()) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				?> <h1><? the_title();?></h1><?
			endif;?>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?
			if(has_excerpt())
			{
				echo get_the_excerpt();
			}
			else
			{
				echo wp_trim_words(get_the_content(), 18);
			}
			?>
		</div> <!-- .entry-content -->
	</a>
</article><!-- #post-<?php the_ID(); ?> -->