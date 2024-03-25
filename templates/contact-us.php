<?php
/**
 * Template Name: Contact Page
 */
?>

<div class="container-fluid fuck">
    <?php the_content(); ?>
</div>


<div class="container sc-contact">
    <div class="row">
        <div class="col-md-7 col-lg-8">
            <?php gravity_form( 1, false, false, false, '', false ); ?>
        </div>
        <div class="col-md-5 col-lg-4 contacttxt">
            <p>Sanctuary Cove<br>Body Corporate Services</p>
            <p>Shop 1A, Building 1 Masthead Way Sanctuary Cove QLD 4212</p>
            <ul>
                <li><img src="/app/uploads/2022/06/icons.png" alt=""><p><a href="tel:0755003333">(07) 5500 3333</a></p></li>
                <li><img src="/app/uploads/2022/06/icons-1.png" alt=""><p>7.30am - 4.00pm, weekdays</p></li>
                <li><img src="/app/uploads/2022/06/icons-2.png" alt=""><a href="https://www.google.com/maps/place/Sanctuary+Cove+Body+Corporate+Services/@-27.8533688,153.3529139,16z/data=!4m8!1m2!2m1!1sBuilding+1+Masthead+Way+Sanctuary+Cove!3m4!1s0x6b91124404a5deab:0xedf2bf5283e9d950!8m2!3d-27.8533659!4d153.3616674"><p>Directions</p></a>></li>
            </ul>
            <ul>
            <p>Sanctuary Cove<br>Security Services</p>
            <p>Security Roundhouse, The Parkway Sanctuary Cove QLD 4212</p>
                <li><img src="/app/uploads/2022/06/icons.png" alt=""><p><a href="tel:0755003355">(07) 5500 3355</a></p></li>
                <li><img src="/app/uploads/2022/06/icons-1.png" alt=""><p>9.00am - 5.00pm, weekdays</p></li>
                <li><img src="/app/uploads/2022/06/icons-2.png" alt=""><a href="https://www.google.com/maps/place/Sanctuary+Cove+Body+Corporate+Services/@-27.8533688,153.3529139,16z/data=!4m8!1m2!2m1!1sBuilding+1+Masthead+Way+Sanctuary+Cove!3m4!1s0x6b91124404a5deab:0xedf2bf5283e9d950!8m2!3d-27.8533659!4d153.3616674"><p>Directions</p></a></li>
            </ul>
        </div>
    </div>
</div>

<style>
.contacttxt p:nth-of-type(1) {
    font-weight: 600;
    color: #005673;
}

.contacttxt ul li p {
    display: inline-block;
}

.contacttxt ul {
    list-style: none;
    padding-inline-start: 0;
}

.contacttxt ul li img {
    padding-right: 20px;
    
}

ul li a {
    color: #005673;
}

.contacttxt {
    padding-left: 2em;
}

.gform_wrapper.gravity-theme .gfield_label {
    font-weight: 600!important;
    color: #005673;
}
.sc-contact {
    margin-top:5%;
    margin-bottom:5%;
}
input#gform_submit_button_1 {
    background: #005673;
    padding: 15px 40px;
    text-transform: uppercase;
    color: white;
    border:none;
}
.gform_wrapper .gform_validation_errors {
    border: none!important;
}

.gform_wrapper .gfield_validation_message, .gform_wrapper .validation_message {
    border: none!important;
}

.gform_wrapper.gravity-theme .gform_fields {
    grid-row-gap: 21px!important;
}
input#gform_submit_button_1:hover {
    background-color: #113A53;
}

@media screen and (max-width:991px) {
.gform_wrapper.gravity-theme .gfield.gfield--width-half {
    -ms-grid-column-span: 12!important;
    grid-column: span 12!important;
}
}

@media screen and (max-width:767px) {
    .contacttxt {
    padding: 0 30px;
}

form#gform_1 {
    max-width: 90%;
    margin: auto;
    margin-bottom: 40px;
}

.sc-contact {
    margin-top: 15%;
    margin-bottom: 10%;
}

input#gform_submit_button_1 { 
    padding: 5px 40px;
}

}





</style>