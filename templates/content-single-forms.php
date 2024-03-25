<article <?php post_class(); ?>>

  <div class="post-header">
    <div class="post-header-wrap">
      <div class="post-thumbnail-wrap"><?php the_post_thumbnail( 'medium' ); ?></div>
    </div>
  </div>

  <div class="container main-column">
    <header>
      <div class="post-categories"><?php echo get_the_category_list(', '); ?></div>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <div class="meta">
        <?php get_template_part('templates/entry-meta'); ?>
      </div>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <?php //comments_template('/templates/comments.php'); ?>
  </div>
</article>
