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

		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array(
			'posts_per_page'   => 1,
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

			foreach($posts_array as $post_news) :
				$block = get_field('blocks', $post_news->ID);
				$desc = (strlen($post_news->post_content) > 3000) ? substr($post_news->post_content,0,3000).'...' : $post_news->post_content;
						?>
						<div class="row">
							<div class="small-12 medium-4 large-4 columns center-image">
										<?php
											if($block) :
												$cnt=true;

												foreach ($block as $image) :
													if($cnt) :
										?>
										<div data-title="<?=$image['title']?>"
												data-image="<?=$image['image']?>"
												data-id="<?=$image['id']?>" >
											<a href="<?=get_post_permalink($post_news->ID)?>">
												<img src="<?=$image['image']?>" alt="<?=$image['title']?>" title="<?=$image['title']?>" />
											</a>
												<h2>News</h2>
										</div>
										<?php
										$cnt = false;
										endif;
										endforeach;
									endif;
										?>
								<br>
							</div>
							<div class="small-12 medium-8 large-8 columns blog-text">
								<!-- <h2><?=the_date()?><h2> -->
								<!-- <h2><?=$post_news->post_title?><h2> -->
								<!-- <a href="http://gailarlidge.local/designers/katish-green/"><h3>Author : <?=get_the_author();?><h3></a> -->
									<?=$desc?>
									<br>
									<br>
								<!-- <p class="read-more"><a href="<?=get_post_permalink($post_news->ID)?>"> Read more</a></p>
								<!-- <hr> -->
							</div>

						</div>
				<?php
			endforeach;
		?>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
