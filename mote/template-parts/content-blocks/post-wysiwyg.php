<?php
/**
 * The template used for displaying image with content.
 *
 * @package Mote
 */
?>
<div class="blocks post-wysiwyg">
    <div class="row">
        <div class="small-12 medium-4 columns text-center">
            <?php $image = get_sub_field('feature_image'); ?>
            <?php if ($image) : ?>
            <div class="img"><img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>"></div>
            <?php endif; ?>
            <h1><?php the_sub_field('title'); ?></h1>
        </div>
        <div class="small-12 medium-8 columns">
            <?php the_sub_field('content'); ?>
        </div>
    </div>
</div>
