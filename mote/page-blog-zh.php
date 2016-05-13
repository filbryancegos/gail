<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Mote
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php $args = array(
				'posts_per_page'   => 15,
				'offset'           => 0,
				'category'         => '',
				'category_name'    => '',
				'orderby'          => 'date',
				'order'            => 'DESC',
				'include'          => '',
				'exclude'          => '',
				'meta_key'         => '',
				'meta_value'       => '',
				'post_type'        => 'post',
				'post_mime_type'   => '',
				'post_parent'      => '',
				'author'	   => '',
				'post_status'      => 'publish',
				'suppress_filters' => true
			);
			$posts_array = get_posts( $args );

				foreach($posts_array as $post_blog) :
					$desc = (strlen($post_blog->post_content) > 200) ? substr($post_blog->post_content,0,200).'...' : $post_blog->post_content;
					?>
					<div class="row">
					  <div class="small-12 large-3 columns text-left blog-text">
							<h2><?=the_date()?><h2>
							<h2><?=$post_blog->post_title?><h2>
							<h3>Author : <?=get_the_author();?><h3>
						</div>
					  <div class="small-12 large-9 columns">
							<?=$desc?>
							<br>
							<p class="read-more"><a href="<?=get_post_permalink($post_blog->ID)?>"> Read more</a></p>
						</div>
						<hr>
					</div>

					<?php
				endforeach;
			?>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
