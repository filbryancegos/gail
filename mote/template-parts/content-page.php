<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Mote
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">

		<?php
			if (have_rows('blocks')) {
				while (have_rows('blocks')) {
					the_row();
					ACF_Layout::render(get_row_layout());
				}
			}

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mote' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'mote' ), '<span class="edit-link">', '</span>' ); ?>
	</footer>
</article><!-- #post-## -->
