<?php

/**
 * Block Name: Content Block2
 *
 * This is the template that displays version 2 Content block.
 * Copy left Images right
 */

$map = get_field('map');
$heading = get_field('heading');
$text = get_field('text');
$button = get_field('button_text');
$link = get_field('link');

?>

<div class="container-fluid map-block">
    <div class="container-fluid" style="background: url(<?php echo $map ?>)">
     
    </div>

    <div class="container">
        <div class="row">
     
        <div class="col-md-6">
            <div class="home-content cntxt">
                <div>
                <h1 class="bheading"><?php echo $heading ?></h1>
                <?php the_field('text') ?>
                <?php if (!empty($button) && !empty($link)){ 
                echo '<div class="mt-3"><a href=" '. $link .' " class="sc-btn"> ' . $button . '</a></div>';
            }?>
            </div>
            </div>
        </div>
            
        </div>
    </div>
</div>


<style>
    .map-block .container-fluid {
        min-height: 600px;
        background-repeat: no-repeat!important;
        background-size: cover!important;
        background-position: top right!important;
    }

    .map-block .cntxt {
        width: 120%;
    }

    .map-block .cntxt p {
        width: 80%!important
    }

    .map-block .container {
        margin-top: 100px;
        margin-bottom: 150px;
    }


    
@media screen and (max-width: 991px ) {
    .map-block .container-fluid {
        min-height: 500px;
    }

    #niche-map-block_62b3e319676c7 {
        margin-bottom: 70px;
    }
}




</style>