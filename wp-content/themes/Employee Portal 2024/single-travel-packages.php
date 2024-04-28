<?php

get_header('main')?>
  <script>
     $(document).ready(function(){
        if ($(window).width() > 900) {
            $('.header-menu a').css({
                        'color': '#fff',
            });
        }
        else{
            $('.main-header .icon-burger .line').css({
                'background': '#fff'
            });
            $('#nav-toggle').change(function() {
                    if ($(this).is(':checked')) {
                        $('.main-header .icon-burger .line').css({
                            'background': '#0A2844'
                        });
                    } else {
                        $('.main-header .icon-burger .line').css({
                            'background': '#0A2844'
                        });
                    }
                });
        }
    });
</script>
<?php
    if(have_posts()):while(have_posts()):the_post();   
?>

<div class="single-header">
    <img src="<?php echo the_post_thumbnail_url()?>" alt="" class="single-banner">
    <h2 class="single-package-title"><?php the_title();?></h2>
    <!--<div class = "single-package-datepicker-container">
        <div class="row single-package-datepicker-row">
            <div class="col-lg-4 single-date-picker-location-container">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/contact-loc.png" alt="" srcset="">
                <h2 class="single-package-datepicker-location"><?php the_title();?></h2>
                <span class="single-package-breaker"></span>
            </div>
            <div class="col-lg-3 single-date-picker-date-container">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/single-date.png" alt="" srcset="">
                <input type="date">
                <span class="single-package-breaker"></span>
            </div>
            <div class="col-lg-3 single-date-picker-guest-container">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/single-guest.png" alt="" srcset="">
                <input type="number" name="" id="" max="20" min="1">
                <span>Guest</span>
            </div>
            <div class="col-lg-2 single-date-picker-button-container">
                <button class = "single-date-picker-button">Search</button>
            </div>
        </div>
    </div>--->
</div>





<section class="single-available-section">
	<h6 class="single-available-header">Packages </h6>
	<div class="row single-available-hotels-row">
		<div class="col-xs-12 single-hotel-package"> 
			<div class="row ">
                <?php
                    $current_post_id = get_the_ID();
                    $_SESSION['current_package_id'] = $current_post_id;
                    if (isset($_SESSION['current_package_id'])) {
                    } else {
                        // The session variable is not set
                        echo "User ID not set in session.";
                    }
                ?>
				<?php
                    $args = new WP_Query([
                        'post_type' =>  'hotels',
                        'posts_per_page' => -1,
                        'meta_key'       => 'hotel_location',
                    ]);

                    if ( $args->have_posts() ) {
                        while ( $args->have_posts() ) {
                            $args->the_post();
                ?>
                        <?php
                            $selectedPostID = "";
                     
                            $terms = get_field('hotel_location');
                                if( $terms ): ?>
                                    <?php foreach($terms as $term ): ?>
                                        <span>
                                            <?php $selectedPostID = $term->ID; ?>
                                        </span>
                                    <?php endforeach; ?>
                                <?php endif;         
                            if($current_post_id == $selectedPostID){
                        ?>
                            
					<div class="col-sm-6 col-lg-3 single-available-hotel-container"> 
						<!--- REPEATER ACF --->
							<div class="single-available-hotel-image-container">
								 <img class="travel-photo" src="<?php echo the_post_thumbnail_url(); ?>">
							</div>
							<div class="single-available-hotel-contents">
								
								<h6 class="single-available-hotel-name"><?php
								$destination_name = get_field('name_of_destination');
								echo $destination_name;
								?></h6>
								<!--<span class="single-available-rating"> 
									<div class="rating">
										<input type="radio" name="rating" id="star5">
										<label for="star5"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" id="mainIconPathAttribute" fill="#f6b502"></path> </svg></label>
										<input type="radio" name="rating" id="star4">
										<label for="star4"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" id="mainIconPathAttribute" fill="#f6b502"></path> </svg></label>
										<input type="radio" name="rating" id="star3">
										<label for="star3"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" id="mainIconPathAttribute" fill="#f6b502"></path> </svg></label>
										<input type="radio" name="rating" id="star2">
										<label for="star2"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" id="mainIconPathAttribute" fill="#f6b502"></path> </svg></label>
										<input type="radio" name="rating" id="star1">
										<label for="star1"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" id="mainIconPathAttribute" fill="#f6b502"></path> </svg></label>
									</div>
									<span class="rating-text"> 5.0 Ratings </span>
								</span>-->
								<div class="single-available-location-container">
									<img src="" alt="" srcset="">
									
									<h6 class="single-available-location"><?php the_field('package_description'); ?></h6>
								</div>
								<a style = "width: 100%;" href="<?php echo the_permalink();?>"><button class="single-available-hotel-button py-3 px-12 text-white items-center">View Deal <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/> </svg></button></a>
							</div>		
						<!--- REPEATER ACF END --->
					</div>	
				<?php }
                else{
                    echo '';
                }
            
            }}
           ?>
					<?php wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</section>

<section class="single-commercial-section" style = "background:url('https://soledestinations.com/wp-content/themes/astra/assets/images/single.png');background-position:center; background-repeat:no-repeat;background-size:cover;">
    <h2 class="single-commercial-header">Can't find the perfect package?</h2>
    <p class="single-commercial-paragraph">Discover other options ready for your custom quote!</p>
    <button class = "single-commercial-btn">Find Your Custom Quote</button>
</section>

<?php 
    require(get_template_directory() . '/page-parts/travel-partners.php');
?>

<!-- 
<?php the_post_thumbnail();

the_content();
echo get_field('package_price');?>

<div class="packages-include-content">
        <ul>
            <?php
                // Check rows existexists.
                if( have_rows('package_includes_repeater') ):

                    // Loop through rows.
                    while( have_rows('package_includes_repeater') ) : the_row();

                        // Load sub field value.
                        $package_list = get_sub_field('package_includes_list');
                        ?>
                        <li style = "color:black;"><?php echo $package_list?></li>
                        <?php
                        // Do something...

                    // End loop.
                    endwhile;

                // No value.
                else :
                    $nopackage = 'No Package Included';
                    echo '<span class ="no-package-span">'.$nopackage.'</span>';
                endif;
            ?>
        </ul>
    </div> -->
	
<?php
    endwhile;
endif;

?>
<?php get_footer('main');?>
