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
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php /*
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header>
                */ ?>
                <div class="entry-content">
                    <?php
                        if (have_rows('block')) {
                            while (have_rows('block')) {
                                the_row();
                                ACF_Layout::render(get_row_layout());
                            }
                        }
                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'mote'),
                            'after'  => '</div>',
                       ));
                    ?>
                </div>
                <footer class="entry-footer">
                    <?php edit_post_link(esc_html__('Edit', 'mote'), '<span class="edit-link">', '</span>'); ?>
                </footer>
            </article>
            <div class="row">
            <?php $args = array(
              'posts_per_page'   => 3,
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
              foreach($posts_array as $post_blog) :
                $block = get_field('blocks', $post_blog->ID);
                $desc = (strlen($post_blog->post_content) > 300) ? substr($post_blog->post_content,0,300).'...' : $post_blog->post_content;
                ?>
                    <div class="small-12 medium-4 large-4 columns ">
                      <?php
                        if($block) :
                          $cnt=true;

                          foreach ($block as $image) :
                            if($cnt) :
                      ?>
                      <div class="center-image" data-title="<?=$image['title']?>"
                          data-image="<?=$image['image']?>"
                          data-id="<?=$image['id']?>" >
                        <a href="<?=get_post_permalink($post_blog->ID)?>">
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
                      <div class="text-left blog-text">
                        <!-- <h2><?=the_date()?><h2> -->
                        <h2><?=$post_blog->post_title?><h2>
                        <a href="http://gailarlidge.local/designers/katish-green/"><h3>Author : <?=get_the_author();?></h3></a>
                        <?=$desc?>
                        <br>
                        <p class="read-more"><a href="<?=get_post_permalink($post_blog->ID)?>"> Read more</a></p>
                      </div>
                    </div>
                <?php
              endforeach;
            ?>
          </div>
        </main>
    </div>
<?php get_footer(); ?>
