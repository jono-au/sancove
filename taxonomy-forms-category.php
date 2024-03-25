<?php get_template_part('templates/page', 'header'); 
$queried_object = get_queried_object();
$parent = $queried_object->parent;
if($parent !== 0) {
  $top = get_top_term($queried_object);
    $title = $top->name;
        $taxonomy = $top->taxonomy;
        $term_id = $top->term_id;  
        $content = get_field('content', $taxonomy . '_' . $term_id);

} else {
   $title = $queried_object->name;
        $taxonomy = $queried_object->taxonomy;
        $term_id = $queried_object->term_id;  
        $content = get_field('content', $taxonomy . '_' . $term_id);
}
     
?>

<div class="container-fluid">

    <div class="row">

        

        <div class="col-md-3 sc-categories">

        <button class="cat navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main-categories" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span>Select form category</span>
      </button>
      <div id="main-categories" class="navbar-collapse collapse" style="">  

        <?php 
        wp_nav_menu( [
            'depth' => 4,
            'container_class' => '',
            'container_id' => '',
            'menu_class' => 'navbar-nav ml-auto',
            'menu_class' => 'nav navbar-nav',
            'items_wrap' => '<ul id="%1$s" class="%2$s" >%3$s</ul>',
            'container' => false,
            'walker' => new WP_Bootstrap_Navwalker(),
            'menu' => (object) [
              'slug' => 'term-nav-0', // Required. Name of the menu.
              'term_id' => (object) [
                'term_id' => 0, // Required to trick WordPress into rendering this as a menu. Don't change this.
                'terms_as_nav' => true, // Required for custom hook

                // Put your category args here. See WP_Term_Query::__construct()
                'args' => [
                  'child_of' => 0,
                  'taxonomy' => 'forms-category',
                  'hide_empty' => false,
                  'exclude' => array(17,18,20,22),
                ],

              ],
            ],
          ] );
        ?>
        </div>
        </div>

        <div class="col-md-9 pdfres">

          
        <div class="container-fluid cban">
                <div class="fcb">
                <div><img src="/app/uploads/2022/07/Logo-icon.svg" alt="logo" class="logo"></div>
                    <h1><?= $title; ?></h1>
                </div>
            
                <div class="cbtxt">
                    <?= $content; ?>
                </div>
           </div>

        
        <div class="container facets">
                <?= do_shortcode('[facetwp facet="form_categories"]'); ?>

            <div class="ordres">
                <?= do_shortcode('[facetwp facet="orderby"]'); ?>
                <?= do_shortcode('[facetwp facet="post_count"]'); ?>
            </div>
        </div>
                  

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

</div>
 

<!-- <style>



.sc-categories .dropdown-menu {
    background-color: transparent;
    border: none;
}

.sc-categories li a {
    color: white;
}

.facetwp-facet.facetwp-facet-orderby.facetwp-type-sort select {
    border: none;
    color: #005673;
}
.facetwp-facet.facetwp-facet-orderby.facetwp-type-sort select:focus-visible {
    outline: none;
}

.facetwp-facet input.facetwp-search {
    border: 1px solid #005673;
    border-radius: 0;
}

.facetwp-type-search input {
    padding-left: 0.75rem;
}

.facetwp-input-wrap {
    width: 50%;
}

.facetwp-type-search {
    padding: 50px 50px 0;
}

.ordres {
    display: flex;
    justify-content: space-between;
    padding: 0 50px;
}


.fcb {
    width: 70%;
    margin: auto;
}

.cbtxt {
    max-width: 70%;
    margin: auto;
    padding: 30px 0 ;
    }

.cbanner {
    background-image: url(/app/uploads/2022/06/Footer.svg);
    background-size: cover;
    background-position: center;
    padding-top: 60px;
    padding-bottom: 40px;
}

.cban {
    background-image: url(/app/uploads/2022/06/Footer.svg);
    background-size: cover;
    background-position: center;
    padding: 50px 0;
}

.fcb h1 {
    font-size: 3em;
    font-weight: 200;
    margin: auto;

}
.logo {
    max-width: 50px;
    position: absolute;
    margin-left: -70px;
}

#card-grid {
    margin: 0;
    padding:35px;
}

.card {
    border:none;
    box-shadow: 0 0 10px rgb(0 0 0 / 18%);
}

.card:hover {
    box-shadow: 0 0 10px rgb(0 0 0 / 18%);
}

.sc-categories {
    background: #005673;
    padding: 25px;
}

.facetwp-link {
    color: white;
    padding: 10px 0; 
}
span.facetwp-counter {
    display: none;
}


.pdfres {
    min-height: 1800px;
    padding:0;
}
.card-img-top img {
    position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    top: 30%;
    height: 70px;
    width: auto;
  }
  h3.h4.card-title {
    font-size: 18px;
    margin-top: 0;
}

.card-img-top {
    min-height: 150px;
}
.page-item.active .page-link {
    background-color: #005673;
    border-color: #005673;
}

.page-link {
    color: #005673; 
    border: none;
   
}

nav.page-nav {
    padding-top: 50px;
    bottom: 0;
    margin: auto;
    left: 50%;
    right: 50%;
}

.facets.mob {
        display: none;
}


.top-footer .logo {
    position: relative;
    left: 0;
    top: 0;
    margin-left: 0!important;
    margin-bottom: 20px;
}

.card-body {
    padding: 1em;
}

.cban img {
        top:38px;
    }

@media screen and (max-width: 767px) {
    .facets.mob {
        display: block;
    }
 
    .facets.mob div.fs-wrap {
        width: 100%;
    }

    .facets.mob div.facetwp-facet {
        margin: 0;

    }

    .facets.mob .fs-label-wrap .fs-label {
        padding: 15px 22px 15px 8px;
        background: #005673;
    }

    .facets.mob div.fs-dropdown {
        top: 42px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    .facets.mob .fs-option, .facets.mob .fs-search, .fs-optgroup-label {
    padding: 10px 8px;
    }

    .facets.mob .fs-wrap.single .fs-option.selected {
    background-color: #005673;
    color: white;
    }

    .facets.mob .fs-option:hover {
    background-color: #005673;
    color: white;
}

.fcb .logo {
    max-width: 40px;
    position: absolute;
    margin-left: -60px;
    margin-top: 5px;
}

.top-footer .logo {
    position: relative;
    left: 0;
    top: 0;
    margin-left: 0!important;
    margin-bottom: 20px;
}

.fcb {
    width: 80%;
    margin-right: auto;
    margin-left: 60px; 
}

.cbtxt {
    max-width: 90%;
    }
    
    .fs-dropdown .fs-options {
    max-height: 200px;
    overflow: auto;
    background: #113A53;
    color: white;
}
    .fs-label {
        color: #B4BCBE;
    }
    .fs-arrow {
        border-top: 5px solid #fff!important;
    }
    .fs-search {
        display:none;
    }

    .cban img {
        display:none;
    }
    .cban .fcb {
        margin: auto;
    }

    .fcb h1 {
    font-size: 2em;
  

}


}






</style> -->



<style>


.sc-categories li a {
    color: white;
    white-space: inherit;

}

.sc-categories li a:hover {
    color: #16181b;
    text-decoration: none;
    background-color: #f8f9fa;
}
.sc-categories .dropdown-menu {
    background-color: transparent;
    border: none;
}

.sc-categories .dropdown-item {
    width: 100%;
}

.dropdown {
    width: 100%;
}

a.bg-light:hover,a.bg-light:focus {
    background-color: white !important;
}


.facetwp-facet.facetwp-facet-orderby.facetwp-type-sort select {
    border: none;
    color: #005673;
}

.facetwp-facet input.facetwp-search {
    border: 1px solid #005673;
    border-radius: 0;
}

.facetwp-type-search input {
    padding-left: 0.75rem;
}

.facetwp-input-wrap {
    width: 50%;
}

.facetwp-type-search {
    padding: 50px 50px 20px 50px;
}

.ordres {
    display: flex;
    justify-content: space-between;
    padding: 0 50px;
}


.facetwp-facet {
    margin-bottom: 0!important;
}

.navbar-nav .nav-link {
    padding-left: 10px;
}

.cbtxt {
    max-width: 70%;
    margin: auto;
    padding: 30px 0 ;
    }

.cbanner {
    display:none;
    background-image: url(/app/uploads/2022/06/Footer.svg);
    background-size: cover;
    background-position: center;
    min-height: 500px;
    padding-top: 60px;
    padding-bottom: 40px;
}

.cban {
    background-image: url(/app/uploads/2022/06/Footer.svg);
    background-size: cover;
    background-position: center;
    padding: 50px 0;
}

.fcb h1 {
    font-size: 3em;
    font-weight: 200;
    margin: auto;

}
.logo {
    max-width: 50px;
    position: absolute;
    margin-left: -70px;
}

#card-grid {
    margin: 0;
    padding: 35px;
}

.card {
    border:none;
    box-shadow: 0 0 10px rgb(0 0 0 / 18%);
}

.card:hover {
    box-shadow: 0 0 10px rgb(0 0 0 / 18%);
}

.sc-categories {
    background: #005673;
    padding: 25px;
}

.facetwp-link {
    color: white;
    padding: 10px 0; 
}
span.facetwp-counter {
    display: none;
}


.pdfres {
    min-height: 1800px;
    padding:0;
}
.card-img-top img {
    position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    top: 30%;
    height: 70px;
    width: auto;
  }
  h3.h4.card-title {
    font-size: 18px;
    margin-top: 0;
}

.card-img-top {
    min-height: 150px;
}
.page-item.active .page-link {
    background-color: #005673;
    border-color: #005673;
}

.page-link {
    color: #005673; 
    border: none;
   
}

nav.page-nav {
    padding-top: 50px;
    bottom: 0;
    margin: auto;
    left: 50%;
    right: 50%;
}

.facets.mob {
        display: none;
}

.facets.lrg {
        display: block;
}

.top-footer .logo {
    position: relative;
    left: 0;
    top: 0;
    margin-left: 0!important;
    margin-bottom: 20px;
}

.card-body {
    padding: 1em;
}

.cban img {
        top:38px;
    }

.fcb {
    width: 70%;
    margin: auto;
}


@media screen and (min-width: 768px) {
        div#main-categories {
    display: block;
}
.cat.navbar-toggler {
    display: none;
}
    }
@media screen and (max-width: 767px) {
    .facetwp-type-search {
    padding: 50px 20px 20px 20px;
}
.ordres {
    padding: 0 20px;
}

    .cat.navbar-toggler {
    display: block;
}
    div#main-categories {
    background: #113A53;
    padding-left: 10px;
    padding-right: 10px;
}

button.cat.navbar-toggler {
    width: 100%!important;
    color: white;
    border: solid 1px white;
    padding: 10px;
    font-size: 16px;
    text-align: left;
    border-radius: 0;
}


.facetwp-input-wrap {
    width: 100%;
}




    .facets.mob {
        display: block;
    }
    .facets.lrg {
        display: none;
    }

    .facets.mob div.fs-wrap {
        width: 100%;
    }

    .facets.mob div.facetwp-facet {
        margin: 0;

    }

    .facets.mob .fs-label-wrap .fs-label {
        padding: 15px 22px 15px 8px;
        background: #005673;
    }

    .facets.mob div.fs-dropdown {
        top: 42px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    .facets.mob .fs-option, .facets.mob .fs-search, .fs-optgroup-label {
    padding: 10px 8px;
    }

    .facets.mob .fs-wrap.single .fs-option.selected {
    background-color: #005673;
    color: white;
    }

    .facets.mob .fs-option:hover {
    background-color: #005673;
    color: white;
}

.fcb .logo {
    max-width: 40px;
    position: absolute;
    margin-left: -60px;
    margin-top: 5px;
    display:none;
}

.top-footer .logo {
    position: relative;
    left: 0;
    top: 0;
    margin-left: 0!important;
    margin-bottom: 20px;
}

.fcb {
    width: 90%;
    margin-right: auto;
    /* margin-left: 70px;  */
}

.cbtxt {
    max-width: 90%;
    }
    
    .fs-dropdown .fs-options {
    max-height: 200px;
    overflow: auto;
    background: #113A53;
    color: white;
}
    .fs-label {
        color: #B4BCBE;
    }
    .fs-arrow {
        border-top: 5px solid #fff!important;
    }
    .fs-search {
        display:none;
    }

    .fcb h1 {
    font-size: 2em;
  

}


}






</style>