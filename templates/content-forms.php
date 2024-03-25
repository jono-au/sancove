<article <?php post_class('card'); ?>>
  <?php 
    $link = get_field('form_link');
    $upload = get_field('form_upload');
  ?>
  <a href="<?php echo ($link !== "")? $link : $upload; ?>" target="_blank">
  <div class="card-img-top" style="background: #005673"><img src="/app/uploads/2022/07/icons.png" alt="pdf"></div>
  <div class="card-body">
    <!-- <div class="post-categories"><?php //echo get_the_category_list(', '); ?></div> -->
    <h3 class="h4 card-title"><?php the_title(); ?></h3>
  </div>
  </a>
</article>
