<?php
/**
 * The template used for displaying forms block content.
 *
 * @package Mote
 */
?>
<div class="row">
    <?php if (get_sub_field('styles') == 'left') : ?>
    <div class="small-12 medium-6 columns">
        <?php
            $form = get_sub_field('form');
            gravity_form_enqueue_scripts($form['id'], true);
            gravity_form($form['id'], false, false, false, '', true, 1);
        ?>
    </div>
    <div class="small-12 medium-6 columns">
        <div class="content_wrapper"><?php the_sub_field('content'); ?></div>
    </div>
    <?php elseif (get_sub_field('styles') == 'right') : ?>
    <div class="small-12 medium-6 columns">
        <div class="content_wrapper"><?php the_sub_field('content'); ?></div>
    </div>
    <div class="small-12 medium-6 columns">
        <?php
            $form = get_sub_field('form');
            gravity_form_enqueue_scripts($form['id'], true);
            gravity_form($form['id'], false, false, false, '', true, 1);
        ?>
    </div>
    <?php else : ?>
    <div class="small-12 columns">
        <?php
            $form = get_sub_field('form');
            gravity_form_enqueue_scripts($form['id'], true);
            gravity_form($form['id'], false, false, false, '', true, 1);
        ?>
    </div>
    <?php endif; ?>
</div>
