<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Mote
 */
?>

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="site-info">
            <div class="row">
                <div class="small-12 medium-7 columns">
                    <?php the_field('copyright', 'option'); ?>
                </div>
                <div class="small-12 medium-5 columns">
                    <?php if (have_rows('social_media', 'option')) : ?>
                    <ul class="inline-list right">
                        <?php while (have_rows('social_media', 'option')) : the_row(); ?>
                        <li class="<?php the_sub_field('medium'); ?>"><a href="<?php the_sub_field('link'); ?>" target="<?php the_sub_field('target'); ?>"><?php the_sub_field('text'); ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </footer>
</div>
<?php wp_footer(); ?>
</div>
<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- Magnific Popup core JS file -->
<script src="magnific-popup/jquery.magnific-popup.js"></script>
</body>
</html>
