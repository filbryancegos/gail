<?php
/**
 * The template used for displaying feature images block content.
 *
 * @package Mote
 */
?>
<div class="blocks images">
    <div class="content <?php the_sub_field('styles'); ?>">
        <?php if (get_sub_field('styles') == 'default') : ?>
        <div class="row">
            <h2><?php the_sub_field('title'); ?></h2>
            <p><?php the_sub_field('description', false); ?></p>
        </div>
        <?php endif; ?>
        <div class="row">
            <?php
                $gallery = get_sub_field('gallery');
                $col     = (count($gallery) > 4) ? 4 : count($gallery);
            ?>
            <?php if ($col > 0) : ?>
            <ul class="small-block-grid-1 medium-block-grid-<?php echo $col; ?> large-block-grid-<?php echo $col; ?>">
                <?php if($gallery) :foreach ($gallery as $image) : ?>
                <li>
                    <div class="image-list">
                        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php $image['alt']; ?>">
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif;  $image = get_sub_field('image'); ?>
            <div class="center-image"><img src="<?php echo $image; ?>" alt="<?php echo get_sub_field('alt');?>" title="<?php echo get_sub_field('title');?>"></div>
          <?php endif; ?>
        </div>
        <?php if (get_sub_field('styles') == 'image-first') : ?>
        <div class="row">
            <h2><?php the_sub_field('title'); ?></h2>
            <p><?php the_sub_field('description', false); ?></p>
        </div>
        <?php endif; ?>
    </div>
</div>
