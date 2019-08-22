<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="row">
		<div class="col-sm-3">	
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="col-sm-9">
			<div class="row">
				<div class="col-sx"><?php echo esc_html( get_the_date() ) ?></div>
			</div>
			<div class="row">
				<div class="col-sx"><?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ) ?></div>
			</div>
			<div class="row">
				<div class="col-sx"><?php the_content( 'Lue lisää' ); ?></div>
			</div>
		</div>
	</div>
</article>
