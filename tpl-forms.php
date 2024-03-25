<?php
/**
 * Template Name: FORMS (Full Width)
 */
?>

<div class="container cards">
        <?php if (!have_posts()) : ?>
          <div class="alert alert-warning test">
            <?php _e('Sorry, no results were found.', 'sage'); ?>
          </div>
          <?php get_search_form(); ?>
        <?php endif; ?>

        <div id="card-grid" class="card-deck">
          <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
          <?php endwhile; ?>
        </div>

        <?php Roots\Sage\Extras\pagination(); ?>
      </div>
    </div>
  </div>