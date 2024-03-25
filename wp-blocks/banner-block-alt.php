<?php
/**
 * Block Name: Banner Block Alt
 *
 * This is the template that displays the banner block alt 2.
 */

$image = get_field('image_back');
$image2 = get_field('image_front');
$heading = get_field('heading');
$text = get_field('text');
$button = get_field('button_text');
$link = get_field('link');

?>

<div class="container-fluid sc-contact-banner">
    <div class="container">
    <div class="row">
     
        <div class="col-md-6 bal">
            <div class="cntxt">
                <img src="/app/uploads/2022/07/Logo-icon.svg" alt="logo" class="logo">
                <div class="sc-cp">
                <h1 class="bheading"><?php echo $heading ?></h1>
                <p class="contentxt"><?php echo $text ?></p>
                </div>
                <?php if (!empty($button) && !empty($link)){ 
                echo '<div class="mt-3"><a href=" '. $link .' " class="sc-btn"> ' . $button . '</a></div>';
            }?>
            </div>
        </div>

        <div class="col-md-6">
            <div class="home-images mr-auto ml-auto">
                <img src="<?php echo $image ?>" alt="sanctuary cove" class="image_back">
                <img src="<?php echo $image2 ?>" alt="sanctuary cove" class="image_front">
            </div>
        </div>
            
    </div>
    </div>
</div>

<style>

img.image_back {
    display: block;
    margin-left: auto;
}

.container-fluid.sc-contact-banner {
    margin-top: 50px;
    margin-bottom: 50px;
    padding-bottom: 150px;
}

.sc-cp {
    display: inline-block;
    margin-bottom: 20px;
}
.cntxt {
    display: flex;
    top: 20%;
    position: relative;
    flex-wrap: wrap;
}

.image_front {
    position: absolute;
    left: -2%;
    max-width: 60%;
    bottom:-5%;
    filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.5));
}

.container-fluid.content2 {
    height: 1100px;
}
img.logo {
    max-width: 50px;
    position: absolute;
    left: -15%;
    top: 0;
}
.bheading {
    font-weight: 200;
    font-size: 4em;
    vertical-align: middle;
    display: inline;
    text-transform: capitalize;
}
.bntxt {
    max-width: 450px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10%;
}

.sc-contact-banner {
   background-image: url('/app/uploads/2022/06/Footer.svg');
   background-repeat: no-repeat;
   background-position: 0 300px;
   background-size: cover;
}

.container-fluid.fuck {
    padding: 0;
}


@media screen and (max-width:767px){ 

    .container-fluid.sc-contact-banner {
        padding-bottom: 150px;
    }


  

h1.bheading {
    font-weight: 200;
    font-size: 2em!important;
    vertical-align: middle;
}
.bntxt {
text-align: center;
padding:0;
}
.cntxt {
    top: 0;
    margin-bottom: 20%; 
}

.image_front {
    position: absolute;
    right: 0!important;
    margin-left: auto;
    margin-right: 5%;
    max-width: 60%;
    bottom:-5%;
}
img.image_back {
    margin-left:0;
}
.home-images {
    max-width: 90%;
}

.bal {
    max-width: 90%;
    margin: auto;
}
img.logo {
   position: relative;
   left: 0;
   margin-bottom: 20px;
}

}

@media screen and (max-width: 991px){ 
img.logo {
    max-width: 30px;
    position: relative;
    margin-bottom: 20px;
    left: 0;
    top: 0;
}
.cntxt {
    top: 5%;
}

}


</style>