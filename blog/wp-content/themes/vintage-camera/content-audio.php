<?php
/**
 * The template used for displaying audio content
 *
 * @package Vintage Camera
 * @since Vintage Camera 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php edit_post_link( __( 'Edit', 'vintage-camera' ) , '', ''); ?>
		<div class="entry-meta">
			<?php vintage_camera_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="audio-entry-content">
  		<?php the_content(); ?>
  	</div>

</article><!-- #post-<?php the_ID(); ?> -->