<?php
/**
 * The template used for displaying feature services block content.
 *
 * @package Mote
 */
?>
<div class="blocks services" style="background-color: <?php the_sub_field('background_color'); ?>; background-image: url(<?php the_sub_field('background_image'); ?>);">
    <div class="content <?php the_sub_field('styles'); ?>">
        <div class="row">
            <h2><?php the_sub_field('title'); ?></h2>
            <p><?php the_sub_field('description', false); ?></p>
        </div>
        <div class="row">
            <?php if (have_rows('features')) : ?>
            <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-3" data-equalizer>
                <?php while (have_rows('features')) : the_row(); ?>
                <li>
                    <div class="service">
                        <div class="image">
                            <?php $image = get_sub_field('image'); ?>
                            <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php $image['alt']; ?>">
                        </div>
                        <div class="info" data-equalizer-watch>
                            <h3><?php the_sub_field('title'); ?></h3>
                            <p><?php the_sub_field('description', false); ?></p>
                        </div>
                        <div class="call-to-action">
                            <a href="<?php the_sub_field('link'); ?>" class="button primary tiny"><?php the_sub_field('call_to_action'); ?></a>
                        </div>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
</div>
