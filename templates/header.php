<?php get_template_part('templates/search'); ?>

<header class="page-header">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img src="/app/uploads/2022/07/Full-logo.svg" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div id="main-menu" class="navbar-collapse collapse"> <?php // add .width class for flyout menu ?>
        <?php if (has_nav_menu('primary_navigation')) {
          wp_nav_menu( [
            'theme_location'  => 'primary_navigation',
            'depth'           => 3, // 2 = with dropdowns, 1 = no dropdowns.
            'container'       => '',
            'container_class' => '',
            'container_id'    => 'main-menu',
            'menu_class'      => 'navbar-nav mr-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'items_wrap'      => '<ul id="%1$s" class="%2$s" >%3$s</ul>',
            'walker'          => new WP_Bootstrap_Navwalker()
          ] );
        } ?>
          <a type="button" class="link search" data-toggle="modal" data-target="#siteSearch1" href="#">
                            <img src="/app/uploads/2022/07/v6-icon.png" alt="search" style="width:30px">
                        </a>
      <?php if ( class_exists( 'WooCommerce' ) ) {
        get_template_part('templates/mini-cart');
      } ?>
    </div>
   
  </nav>
  
</header>

<style>
  div#main-menu {
    margin-right: 90px;
  }

  .link.search {
    position: absolute;
    right: 0;
    padding: 25px 35px;
    background: #113a53;
  }
  @media (min-width: 1100px) {
.navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 1rem;
    padding-left: 1rem;
}}
</style>


