<?php

/**
 * Block Name: Banner Block
 *
 * This is the template that displays the banner block.
 */




/**
 * Responsive Image Helper Function
 *
 * @param string $image_id the id of the image (from ACF or similar)
 * @param string $image_size the size of the thumbnail image or custom image size
 * @param string $max_width the max width this image will be shown to build the sizes attribute 
 */

$image_id = get_field('image_test');

function awesome_acf_responsive_image($image_id,$image_size,$max_width){

	// check the image ID is not blank
	if($image_id != '') {

		// set the default src image size
		$image_src = wp_get_attachment_image_url( $image_id, $image_size );

		// set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );

		// generate the markup for the responsive image
		echo 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';

	}
}








$image = get_field('banner_image');
$image2 = get_field('banner_image2');
$text = get_field('title');
?>
<div class="container-fluid banner-block">
<div class="container">
    <div class="row">
        <?php if (is_page( 'Home' )) { 
            echo '<div class="col-md-6 bntxt" style="margin-top: 5%;display:flex;justify-content:center;"><div><img src="/app/uploads/2022/07/Logo-icon.svg" alt="logo" class="logo"><h1 class="wel">WELCOME TO</h1><h1 class="bheading">' . $text .'</h1></div></div>';
            } else { echo'<div class="col-md-6 bntxt text-center"><img src="/app/uploads/2022/07/Logo-icon.svg" alt="logo" class="logo"><h1 class="bheading">' . $text . '</h1></div>';
            }?>
        <div class="col-md-6 bg-img">

        <!-- <img class="my_class" <?php //awesome_acf_responsive_image(get_field( 'image_test' ),'','550px'); ?>  alt="text" />  -->
            
            <img src="<?php echo $image?>" alt="banner">
            <img src="<?php echo $image2?>" alt="banner" class="bg-image2">
        </div>
    </div>
</div>
</div>


<style>

h1.wel {
font-weight:600;
font-size:2em;
}

.banner-block {
    min-height: 500px;
    padding-top: 50px;
    padding-bottom: 50px;
}

img.bg-image2 {
    position: absolute;
    top: 70%;
    left: -20%;
    filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.5));
}
img.logo {
    max-width: 50px;
    margin-right:30px;
}
.bheading {
    font-weight: 200;
    font-size: 4em;
    vertical-align: middle;
    display: inline;
    text-transform: capitalize;
}
.bntxt {
    margin-top: 10%; 
    margin-bottom:10%;
   
}

.banner-block {
   background-image: url('/app/uploads/2022/06/Footer.svg');
   background-repeat: no-repeat;
   background-position: 0 350px;
   background-size: cover;
}

.bntxt h1 {
    margin-bottom:0;
}

@media screen and (max-width:767px){ 
    .bg-img img {
        margin-left: auto;
        display: block;
        padding-right: 15%;

}
img.bg-image2 {
    right: -10%;
}

.bg-img {
    max-width: 80%;
    margin: auto;
}

.bheading {
    font-weight: 200;
    font-size: 3em;
    vertical-align: middle;
}
.bntxt {
text-align: center;
margin-bottom: 100px;
padding:0;
}

img.logo {
    max-width: 30px;
    margin-right:20px;
}




}

    
</style>