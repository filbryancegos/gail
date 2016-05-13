<?php
/**
 * The template used for displaying maps block content.
 *
 * @package Mote
 */
?>
<div class="row">
    <div class="small-12 columns">
        <div class="acf-map">
            <?php while (have_rows('locations')) : the_row(); ?>
            <?php $location = get_sub_field('map'); ?>
            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>" data-icon="<?php echo get_template_directory_uri() . '/img/map.png'; ?>">
                <h4><?php the_sub_field('title'); ?></h4>
                <p><?php echo $location['address']; ?></p>
                <p><?php the_sub_field('description'); ?></p>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
