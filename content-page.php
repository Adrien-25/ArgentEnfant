<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Argent Enfant
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="page-container">
		<?php the_content(); ?>
	</div><!-- .page-content -->

	<footer class="entry-footer entry-meta">
		<?php edit_post_link( __( 'Edit', 'argent' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
