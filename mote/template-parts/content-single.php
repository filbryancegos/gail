<?php
/**
 * @package Mote
 */
?>
<div class="row">
<?php
$gallery = get_field('galleries');
if($gallery) : ?>
<div class="row-grid">
	<div class="nav-banner-bg">
		<ul id="banner-gallery">
		</ul>
	</div>
	<div class="nav-items-list">
		<img src="<?=get_field('label_image')?>" class="label-img" />
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<ul id='imageGallery'>
		<?php

			foreach ($gallery as $image) :
					?>
					<li data-thumb="<?=$image['sizes']['thumbnail']?>"
							data-src="<?=$image['sizes']['large']?>"
							data-title="<?=$image['title']?>"
							data-caption="<?=$image['caption']?>"
							data-description="<?=$image['description']?>"
							data-id="<?=$image['id']?>" >
							<img src="<?=$image['sizes']['thumbnail']?>" alt="<?=$image['alt']?>" title="<?=$image['title']?>" />
					</li>
					<?php
			endforeach;
		?>
		</ul>
	</div>

</div>
<?php endif; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<h2>Posted on <?php the_date(); ?> By <?=get_the_author();?></h2>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mote' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php mote_entry_footer(); ?>
	</footer>
</article><!-- #post-## -->

</div>
