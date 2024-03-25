

<?php

$heading = get_field('heading');

// Check rows exists.
if( have_rows('teams_repeater') ):
    
    if(is_page('about-us')) {
    echo '<div id="teams-block" 
            style="
            background-image: url(\'/app/uploads/2022/06/SC-Ground-12-edit-1.jpg\');
            min-height: 2500px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            padding-top: 50px;
            ">';
    } else {
        echo '<div id="teams-block">';
    }
    echo '<h1 class="teams heading bheading">' . $heading . '</h1>';
    
    // Loop through rows.
    while( have_rows('teams_repeater') ) : the_row();

        // Load sub field value.
        $title = get_sub_field('title');
        $text = get_sub_field('text');
        $logo = get_sub_field('logo');
        ?>


        <div class="teams container">
            <div class="row">
                <div class="col-md-2"><img src="<?php echo $logo?>" alt="logo" class="teams-logo"></div>
            <div class="col-md-10">
                <h3><?php echo $title ?></h3>
                <p><?php echo $text ?></p>
            </div>
           
            </div>
        </div>

        <?php

        // Do something...

    // End loop.
    endwhile;
    echo '</div>';

endif;

?>
<style>

.teams {
    width: 80%;
    max-width: 1100px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 50px;
}

.teams h3 {
    margin-top: 0;
    text-transform: capitalize;
    font-weight: 300;
}
.teams.heading {
    text-transform: capitalize;
}
.teams.heading.bheading {
    display: block;
    margin-bottom: 100px;
}
div#teams-block {
    padding-top: 50px;
    padding-bottom: 50px;
}
.teams.container {
    padding:0;
}

@media screen and (max-width:767px){
    .teams img {
        max-width: 75px;
    }

    img.teams-logo {
    padding: 35px 0!important;
}

  #teams-block {
    min-height: 4250px!important;
    background-position: 80%!important;
  }
  .teams.heading.bheading {
    display: block;
    margin-bottom: 50px;
}

.teams h3 {
    font-size: 1.5em;
}


}

@media screen and (max-width:411px){ 
    #teams-block {
        min-height: 4700px!important;
    }

}


</style>