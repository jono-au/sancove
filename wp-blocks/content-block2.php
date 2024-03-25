<?php

/**
 * Block Name: Content Block2
 *
 * This is the template that displays version 2 Content block.
 * Copy left Images right
 */


$id = 'niche-map-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
    $id = $block['anchor'];
}

$image = get_field('image_back');
$image2 = get_field('image_front');
$heading = get_field('heading');
$button = get_field('button_text');
$link = get_field('link');




?>

<div class="container-fluid content2" id="<?php echo esc_attr( $id ); ?>">
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

        <div class="col-md-6 imgrcn">
            <div class="home-images">
                <img src="<?php echo $image ?>" alt="sanctuary cove" class="image_back">
                <img src="<?php echo $image2 ?>" alt="sanctuary cove" class="image_front">
            </div>
        </div>
            
        </div>
    </div>
</div>


<style>

img.image_back {
    /* position: relative;
    top: 0;
    left: auto;
    display: inherit;
    object-fit: cover;
    width: auto;
    min-height: 700px;
    max-width: 80%;
    max-height: 80%;
    margin-left: auto;
    margin-right: auto;
    height: 100%; */
    margin-top: -100px;
}

.cntxt {
    width: 70%;
    height: 100%;
    display: flex;
    align-items: center;
    margin: auto;
}


.image_front {
    position: absolute;
    left: -10%;
    max-width: 80%;
    bottom: -25%;
    filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.5));

}

.container-fluid.content2 {
    margin-bottom:20%;
}






@media screen and (max-width:767px) {
    img.image_back {
        /* min-height: 350px;
        max-width: 90%;
        float: right;
         */
         margin-top:0;
    }
    .content2 {
        padding: 150px 0;
    }

    .image_front {
    /* left: 15%;
    bottom: -30%; */
    left:30%;
}

.home-images {
  
    max-width: 75%;
    margin-left: auto;
    margin-right: 10%;

}
.imgrcn {
    width: 80%;
}

.cntxt {
    width: 80%;
}


    
}


#niche-map-block_62b3e319676c7 {
    margin-bottom: 100px;
}

@media screen and (max-width: 767px ) {
        #niche-map-block_62b3e319676c7 {
        margin-bottom: 70px;
        padding-bottom: 0;
    }
}

@media screen and (max-width: 991px ) {
    #niche-map-block_62b3e319676c7 img.image_back {
        margin-top: 50px;
        
    }

    #niche-map-block_62b3e319676c7 {
        margin-top: 100px;
    }
}

</style>


<?php if (is_page( 'living-here' )) { 
 echo "<style>
 @media screen and (min-width:768px) and (max-width: 1100px ){
    .col-md-6.imgrcn {
    position: absolute!important;
    right: 0!important; 
    } 
    img.image_back {
        padding-top:100px!important;
    }
    .container-fluid.content2 {
        padding-top:100px;
    }

}}</style>";
}

?>