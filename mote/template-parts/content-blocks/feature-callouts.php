<?php
/**
 * The template used for displaying feature callouts block content.
 *
 * @package Mote
 */
?>
<div class="blocks callouts" style="background-color: <?php the_sub_field('background_color'); ?>; background-image: url(<?php the_sub_field('background_image'); ?>);">
    <div class="content <?php the_sub_field('styles'); ?>">
        <div class="row">
            <h2><?php the_sub_field('title'); ?></h2>
            <p><?php the_sub_field('description', false); ?></p>
            <a href="<?php the_sub_field('link'); ?>" class="button small primary"><?php the_sub_field('call_to_action'); ?></a>
        </div>
    </div>
</div>
