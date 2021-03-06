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
				'id'							 => '',
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
				'post_type'        => 'blog',
				'post_mime_type'   => '',
				'post_parent'      => '',
				'author'	   => '',
				'post_status'      => 'publish',
				'suppress_filters' => true
			);
			$posts_array = get_posts( $args );

					foreach($posts_array as $post_blogs) :
					$block = get_field('blocks', $post_blogs->ID);
					$desc = (strlen($post_blogs->post_content) > 250) ? substr($post_blogs->post_content,0,250).'...' : $post_blogs->post_content;
							?>
							<div class="row">
							  <div class="small-12 medium-4 large-4 columns center-image ">
											<?php
												if($block) :
													$cnt=true;
													foreach ($block as $image) :
														if($cnt) :
											?>
											<div data-title="<?=$image['title']?>"
													data-image="<?=$image['image']?>"
													data-id="<?=$image['id']?>" >
												<a href="<?=get_post_permalink($post_blogs->ID)?>">
													<img src="<?=$image['image']?>" alt="<?=$image['title']?>" title="<?=$image['title']?>" />
												</a>
											</div>
											<?php
											$cnt = false;
											endif;
											endforeach;
											endif;
											?>
									<br>
								</div>
							  <div class="small-12 medium-8 large-8 columns text-left blog-text">
									<!-- <h2><?=the_date()?><h2> -->
									<h2><?=$post_blogs->post_title?></h2>
									<h3>Author :<a href="/designers/gail-arlidge/"> <?=get_the_author();?></a></h3>
									<div class="hr-sep"></div>
									<br>
									<div class="blog">
										<p>
											<?= get_post_meta($post_blogs->ID, '_yoast_wpseo_metadesc', true); ?>
										</p>
									</div>
									<p class="read-more"><a href="<?=get_post_permalink($post_blogs->ID)?>"> Read more</a></p>
								</div>
							</div>
					<?php
				endforeach;
			?>
		</div>
	</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
