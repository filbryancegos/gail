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
			$query = array(
			'post_type'      => 'portfolio-2',
			'posts_per_page' => 8,
			'post_status'    => array('publish')
			);

			$postQuery = query_posts($query);
			if($postQuery) :
				$display = "";
				$display_large = "";
				?>
					<ul id="banner-gallery">
					</ul>
					<ul id='imageGallery'>
				<?php
				foreach($postQuery as $dataQuery) :
					$gallery = get_field('galleries', $dataQuery->ID);
					if($gallery) :
						$cnt=true;

						foreach ($gallery as $image) :
							if($cnt) :
								//$display .= "<div><a href='".get_post_permalink($dataQuery->ID)."'><img src='".$image['sizes']['thumbnail']."' alt='".$image['alt']."' title='".$image['title']."'></a></div>";
								//$display_large .= "<div><a href='".get_post_permalink($dataQuery->ID)."'><img src='".$image['sizes']['large']."' alt='".$image['alt']."' title='".$image['title']."'></a></div>";
								//print_r($image);
								?>
								<li data-thumb="<?=$image['sizes']['thumbnail']?>"
									  data-src="<?=$image['sizes']['large']?>"
										data-title="<?=$image['title']?>"
										data-caption="<?=$image['caption']?>"
										data-description="<?=$image['description']?>"
										data-id="<?=$image['id']?>" >
									<a href="<?=get_post_permalink($dataQuery->ID)?>">
										<img src="<?=$image['sizes']['thumbnail']?>" alt="<?=$image['alt']?>" title="<?=$image['title']?>" />
									</a>
								</li>
								<?php
								$cnt = false;
							endif;
						endforeach;
					endif;
				endforeach;
			endif;
			?>

			</ul>
			<div class="nav-inline-images">
				<?=$display?>
			</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
