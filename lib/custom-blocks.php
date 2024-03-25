<?php

namespace Roots\Sage\BrandsBlock;
//REGISTER BLOCK
add_action('acf/init', __NAMESPACE__ . '\acf_blocks_init');
function acf_blocks_init() {

  // check function exists
  if (function_exists('acf_register_block')) {

   // register a banner block
    acf_register_block(array(
      'name'        => 'banner_block',
      'title'        => __('Niche Bannner'),
      'description'    => __('Hero Banner'),
      'render_template' => 'wp-blocks/banner-block.php',
      'category'      => 'niche',
      'icon'        => 'admin-site-alt2',

    ));
    // register a banner block version 2
    acf_register_block(array(
      'name'        => 'banner_block_alt',
      'title'        => __('Niche Bannner Alt 2'),
      'description'    => __('Hero Banner 2'),
      'render_template' => 'wp-blocks/banner-block-alt.php',
      'category'      => 'niche',
      'icon'        => 'admin-site-alt2',

    ));
     //register a content block
     acf_register_block(array(
      'name'        => 'content_block',
      'title'        => __('Niche Content1'),
      'description'    => __('Content block Images left Copy right'),
      'render_template' => 'wp-blocks/content-block.php',
      'category'      => 'niche',
      'icon'        => 'admin-site-alt2',
  
    ));
         //register a content block2
         acf_register_block(array(
          'name'        => 'content_block2',
          'title'        => __('Niche Content Block2'),
          'description'    => __('Alt version copy left images right'),
          'render_template' => 'wp-blocks/content-block2.php',
          'category'      => 'niche',
          'icon'        => 'admin-site-alt2',

        ));
        //register accordion
        acf_register_block(array(
          'name'              => 'accordion',
          'title'             => __('Niche Accordion'),
          'category'          => 'niche',
          'render_template'   => 'wp-blocks/accordion.php',
          'icon'        => 'admin-site-alt2',
      ));
        //register teams
        acf_register_block(array(
          'name'              => 'teams',
          'title'             => __('Niche Teams'),
          'category'          => 'niche',
          'render_template'   => 'wp-blocks/teams.php',
          'icon'        => 'admin-site-alt2',
      ));
      //register teams
      acf_register_block(array(
        'name'              => 'map',
        'title'             => __('Niche Maps'),
        'category'          => 'niche',
        'render_template'   => 'wp-blocks/map-block.php',
        'icon'        => 'admin-site-alt2',
    ));
  }
}

//CALLBACK FOR CUSTOM BLOCK
function acf_block_render_callback($block)
{

  $slug = str_replace('acf/', '', $block['name']);

  // include a template part from within the "template-parts/block" folder
  if (file_exists(get_theme_file_path("/wp-blocks/{$slug}.php"))) {
    include(get_theme_file_path("/wp-blocks/{$slug}.php"));
  }
}
