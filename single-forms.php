<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content-single', get_post_type()); ?>
<?php endwhile; ?>

<div class="container recent-posts">
  <!-- <h2 class="recent-posts-heading mt-5 mb-4">Recent Posts</h2> -->
  <div id="card-grid-3-col" class="card-deck">
    <?php

      // The Query
      $next_args = array(
        'post_type' => 'forms',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'order'=>'DESC',
        'orderby'=>'date',
        'post__not_in'=> [get_the_ID()]
      );

      $the_query = new WP_Query( $next_args );

      // The Loop
      if ( $the_query->have_posts() ) {

          while ( $the_query->have_posts() ) : $the_query->the_post();

          get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format());

          endwhile;

      }

      /* Restore original Post Data */
      wp_reset_postdata();

    ?>
  </div>
</div>


<style> 
.card-img-top img {
  height: 60%;
  width: auto;
  left: 0;
  right: 0;
  margin: auto;
  margin-top: 25px;
}

</style>