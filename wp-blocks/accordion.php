<?php


// *Repeater
// bootstrap_accordion_repeater
// *Sub-Fields
// accordion_header
// accordion_content

// check if the repeater field has rows of data
if( have_rows('accordion_repeater') ):
	$i = 1; // Set the increment variable
	
	echo '<div id="accordion" class="container">';
 	
 	// loop through the rows of data for the tab header
    while ( have_rows('accordion_repeater') ) : the_row();
		
		$header = get_sub_field('accordion_header');
		$content = get_sub_field('accordion_content');

	?>
			<div class="card">
				<div class="card-header" id="heading-<?php echo $i;?>">
				<h5>
					<button class="w-100 text-left d-block btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-<?php echo $i;?>" aria-expanded="false" aria-controls="collapse-<?php echo $i;?>">
					<?php echo $header; ?>
					</button>
				</h5>
				</div>
			
				<div id="collapse-<?php echo $i;?>" class="collapse" aria-labelledby="heading-<?php echo $i;?>" data-parent="#accordion">
				<div class="card-body">
					<?php echo $content; ?>
				</div>
				</div>
			</div>    
		
	<?php $i++; // Increment the increment variable
		
	endwhile; //End the loop 
	
	echo '</div>';

else :

    // no rows found
    echo 'Add something';

endif;

?>
<style>
#accordion button.collapsed:after {
    content: "\2303"!important;
	transform: rotate(180deg);
	top:50%;
}
#accordion button:after {
    content: "\2303";
    font-size: 25px;
	line-height: 0;
	position: absolute;
    right: 20px;
	
}
h5 {
margin: 0;
}

button.text-left.d-block.btn.btn-link {
    max-width: 90%;
}

.btn:focus, .btn.focus {
	box-shadow: none;
}
.card:hover {
    box-shadow: none;
}
.card {
	margin: auto;
    max-width: 70%;
	margin-bottom: 20px;
	border: 1px solid rgb(0 0 0 / 5%);
	border-left: 3px solid #113a53!important;
	box-shadow: 3px 3px 3px 0px rgb(0 0 0 / 6%)!important;
}
div#accordion {
    margin: 10% auto;
}
.card-header {
	background:none;
	border-bottom: none;
}
.btn-link {
    font-weight: 400;
    color: #005673;
    text-decoration: none!important;
}
.btn-link:hover {
    color: #005673;
    text-decoration: none;
}
.btn.btn-link {
	padding-left: 0;
}
.card-body {
    padding-top: 0;
}

@media screen and (max-width:767px){
	.card {
		max-width:85%;

	}

	div#accordion {
    margin: 20% 0;
	}
}
</style>