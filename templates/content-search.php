<article <?php post_class();?> id="sr">
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php if (get_post_type() === 'post') { get_template_part('templates/entry-meta'); } ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
  <a href="<?php the_field('form_link') ?>">
</article>


<style>
  #sr {
    min-height: 150px;
    border: 1px solid rgb(0 0 0 / 5%);
    margin-bottom: 20px;
    box-shadow: 3px 3px 3px 0px rgb(0 0 0 / 6%)!important;
    padding-left: 30px;
  }
</style>