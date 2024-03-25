<?php

/**
 * Block Name: Content Block
 *
 * This is the template that displays the Content block.
 * Image left Copy right
 */

$image = get_field('image1');
$image2 = get_field('image2');
$heading = get_field('heading');
$button = get_field('button_text');
$link = get_field('link');
?>

<div class="container-fluid content" style="background:#f6f9fa">
    <div class="container">
    <div class="row">
        <div class="col-md-6 order-2 order-md-1">
            <div class="home-images mr-auto ml-auto float-md-right">
                <img src="<?php echo $image ?>" alt="sanctuary cove" class="image1">
                <img src="<?php echo $image2 ?>" alt="sanctuary cove" class="image2">
            </div>
        </div>
            
        <div class="col-md-6 order-1 order-md-2">
            <div class="home-content cntxt">
                <div>
                <h1 class="bheading"><?php echo $heading ?></h1>
                <?php the_field('text'); ?>
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
img.image2 {
    /* position: relative;
    top: 70%;
    left: auto;
    display: inherit;
    object-fit: cover;
    width: auto;
    min-height: 200px;
    max-height: 400px;
    max-width: 80%;
    margin-left: auto;
    margin-right: auto; */
    margin-top: -70px;
    max-width: 80%;
    margin-left:5%;
    filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.5));
}

.home-images {
    max-width: 80%;
    margin: auto;
}

.content {
    padding: 250px 0;
}

.cntxt {
    width: 70%;
    height: 100%;
    display: flex;
    align-items: center;
    margin: auto;
}

.cntxt p {
    margin-top:20px;
    margin-bottom:40px;
}
@media screen and (max-width:991px) {
    .cntxt {
    width: 80%;
    height: 100%;
    display: flex;
    align-items: center;
    margin: auto;
    padding-bottom:20%;
}
.home-images {
    max-width: 80%;
}
.content {
    padding: 150px 0 50px 0;
}
}
</style>