<!-- 
    Template Name: Single Hotel
 -->

 <?php
  get_header('main');?>
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

<!--- Sub Banner --->
<div class="single-header">
    <div class="single-header-black-opacity"></div>
    <img class = "single-banner" src="<?php echo the_post_thumbnail_url();?>" alt="" srcset="">
	<h2 class="single-package-title-2"><?= the_field('package_name'); ?> Package</h2>
    <img class= "single-hotel-graphics" src="<?php echo get_template_directory_uri()?>/assets/images/single-hotel-bg-graphics.png" alt="" srcset="">
	<div class = "single-gallery-view">
		<a class="more-gallery" href="#" id="showGallery"><svg version="1.1" id="IconChangeColor" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15"> <path d="M10.71,4L7.85,1.15C7.6555,0.9539,7.339,0.9526,7.1429,1.1471C7.1419,1.1481,7.141,1.149,7.14,1.15L4.29,4H1.5 C1.2239,4,1,4.2239,1,4.5v9C1,13.7761,1.2239,14,1.5,14h12c0.2761,0,0.5-0.2239,0.5-0.5v-9C14,4.2239,13.7761,4,13.5,4H10.71z M7.5,2.21L9.29,4H5.71L7.5,2.21z M13,13H2V5h11V13z M5,8C4.4477,8,4,7.5523,4,7s0.4477-1,1-1s1,0.4477,1,1S5.5523,8,5,8z M12,12 H4.5L6,9l1.25,2.5L9.5,7L12,12z" id="mainIconPathAttribute"></path> </svg><p> Show More Photos </p></a>
	</div>
</div>

<!-- Gallery Popup --->
<div id="popup-gallery" class="gallery-modal"> 
    <div class="gallery-content">
		<span class="close" onclick="closeModal('popup-gallery')">Close <span>&times;</span></span>
        <div class="hotel-slider">
			<?php
			$gallery_urls = get_field('hotel_gallery');
			if ($gallery_urls) {
				echo '<div class="hotel-main-image">';
				echo '<img src="' . $gallery_urls[0] . '" alt="" />';
				echo '<div class="slider-controls">
						<button class="prev-slide" onclick="changeSlide(-1)"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16" id="IconChangeColor"> <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" id="mainIconPathAttribute" stroke="#ffffff" stroke-width="0"></path> </svg></button>
						<button class="next-slide" onclick="changeSlide(1)"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16" id="IconChangeColor"> <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" id="mainIconPathAttribute" stroke-width="0" stroke="#ffffff" fill="#ffffff"></path> </svg></button>
					  </div>';
				echo '</div>';

				echo '<div class="hotel-thumbnail-gallery">';
				echo '<div class="hotel-thumbnail-gallery-background">';
				foreach ($gallery_urls as $url) {
					echo '<div class="thumbnail-wrapper">';
					echo '<img src="' . $url . '" alt="" class="thumbnail" onclick="changeImage(\'' . $url . '\')" />';
					echo '</div>';
				}
				echo '</div>';
				echo '</div>';
			}
			?>
		</div>
    </div>
	<script>
		// JavaScript/jQuery to handle slider functionality for the main image
		let currentSlide = 0;
		const slides = document.getElementsByClassName("thumbnail");
		const mainImage = document.querySelector(".hotel-main-image img");

		function changeSlide(n) {
			currentSlide += n;

			if (currentSlide < 0) {
				currentSlide = slides.length - 1;
			} else if (currentSlide >= slides.length) {
				currentSlide = 0;
			}

			mainImage.src = slides[currentSlide].src;
			updateThumbnailOpacity();
		}

		// Function to change the main image and update thumbnail opacity
		function changeImage(imageUrl) {
			mainImage.src = imageUrl;
			updateThumbnailOpacity();
		}

		// Function to update thumbnail opacity based on the active image
		function updateThumbnailOpacity() {
			for (let i = 0; i < slides.length; i++) {
				if (slides[i].src === mainImage.src) {
					slides[i].style.opacity = 0.7;
				} else {
					slides[i].style.opacity = 1; // Adjust the opacity as needed
				}
			}


		}
	</script>
</div>

<!--- Single Package Post ---->
<section class="single-hotel-section">
    <div class="row single-hotel-row">
        <div class="col-lg-7 single-hotel-left">
			  <?php
				// Check the post type
				$post_type = get_post_type();
				if ($post_type == 'hotels') {
					// Retrieve ACF fields
					$name_of_destination = get_field('name_of_destination');
					$package_description = get_field('package_description');
					// Display the ACF fields
					echo '<h3 class="header-text font-semibold text-3xl">' . $name_of_destination . '</h3>';
					echo '<p>' . $package_description . '</p>';
				} ?>
				<div class="nav-single-hotel"> 
					<ul class="tabs mb-8">
						<li data-tab="overview" class="active"><span>Overview</span></li>
						<li data-tab="included"><span>What's Included</span></li>
						<!--<li data-tab="rooms"><span>Rooms</span></li>--->
						<li data-tab="reviews"><span>Landmarks</span></li>
					</ul>
					<script>
					$(document).ready(function() {
						// Add a click event handler to the tab items
						$('li[data-tab]').click(function() {
							// Remove the "active" class from all tabs
							$('li[data-tab]').removeClass('active');
							// Add the "active" class to the clicked tab
							$(this).addClass('active');
						});
					});
					</script>
				</div>
				
				<div class="tab-content active" id="overview">
					<!-- Overview content goes here -->
					<h5 class="overview-options"> Inclusions </h5>
					<div class="amenities-list mb-8">
						<?php
							if (have_rows('place_offers')) {
								echo '<ul>'; // Start the unordered list outside the loop
								while (have_rows('place_offers')) {
									the_row(); // This sets up the current repeater item
									$logo = get_sub_field('logo'); // Get the 'logo' field within the repeater
									$amenities = get_sub_field('amenities'); // Get the 'amenities' field within the repeater

									echo '<li>';
									echo '<img src="' . $logo . '" alt="Logo">';
									echo '<span>' . $amenities . '</span>';
									echo '</li>';
								}

								echo '<li class="sub-list-more">';
								echo '<a class="amenities-link" href="#" id="showAmenities">';
								echo '<span> Show All Amenities ';
								echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">';
								echo '<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>';
								echo '</svg>';
								echo '</span>';
								echo '</a>';
								echo '</li>';
								
								echo '</ul>'; // Close the unordered list outside the loop
							}
						?>
					</div>
					
					<div class="itinerary">
						<h5 class="overview-options"> Itinerary </h5>
						<?php if (have_rows('itinerary')) : ?>
							<ul>
								<?php while (have_rows('itinerary')) : the_row(); ?>
									<?php if (have_rows('daily_schedule')) : ?>
										<?php while (have_rows('daily_schedule')) : the_row(); ?>
											<?php
											$day_plan = get_sub_field('day_plan');
											$itinerary_list = get_sub_field('itinerary_list');
											$background_container = get_sub_field('background_container');
											?>
											<li <?php if (!empty($background_container)) echo 'style="background-color: ' . esc_attr($background_container) . ';"'; ?>>
												<?php if ($day_plan) : ?>
													<h6 class="day-plan">Day <?php echo $day_plan; ?></h6>
												<?php endif; ?>
												<?php if ($itinerary_list) : ?>
													<span><?php echo $itinerary_list; ?></span>
												<?php endif; ?>
											</li>
										<?php endwhile; ?>
									<?php endif; ?>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
					
					<a class="show-more-link" href="#" id="showOverview"> 
						Show More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/> </svg>
					</a>
					
					<div id="popup-amenities" class="amenities-modal"> 
						<div class="amenities-content "> 
							<span class="close" onclick="closeModal('popup-amenities')">&times;</span>
							<h5> Popular Amenities </h5>
							<div class="amenities-list full-view"> 
								<?php if (have_rows('place_offers')) : ?>
									<ul>
										<?php while (have_rows('place_offers')) : the_row(); ?>
											<?php
											$logo = get_sub_field('logo');
											$amenities = get_sub_field('amenities');
											?>
											<li>
												<img src="<?php echo $logo; ?>" alt="Logo">
												<span><?php echo $amenities; ?></span>
											</li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>
							</div>
							
							<h5> Other Amenities </h5>
							<div class="other-amenities"> 
								<?php if (have_rows('other_amenities')) : ?>
									<ul>
										<?php while (have_rows('other_amenities')) : the_row(); ?>
											<?php
											$other_amenities = get_sub_field('other_amenities_list');
											?>
											<li>
												<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" id="mainIconPathAttribute" fill="green" stroke="#5ac55a" stroke-width="0"></path> </svg> 
												<span><?php echo $other_amenities; ?></span>
											</li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>
							</div>
						</div>
					</div>
					
					<!-- The modal -->
					<div id="popup-overview" class="overview-modal">
						<div class="overview-content">
						<!-- Close button -->
							<span class="close" onclick="closeModal('popup-overview')">&times;</span>
							<h5><?php the_title();?></h5>
							 <?php the_content(); ?>
								
							<h5> What's Nearby </h5>
							<div class="sub-overview-near-location">
								<?php if (have_rows('whats_nearby')) : ?>
									<?php while (have_rows('whats_nearby')) : the_row(); ?>
										<?php
											$nearby_location = get_sub_field('nearby_location');
											$nearby_kilometers = get_sub_field('nearby_kilometers');
										?>
										<div class="overview-near-location">
											<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512" id="IconChangeColor"><title>ionicons-v5-n</title><path d="M256,48c-79.5,0-144,61.39-144,137,0,87,96,224.87,131.25,272.49a15.77,15.77,0,0,0,25.5,0C304,409.89,400,272.07,400,185,400,109.39,335.5,48,256,48Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" id="mainIconPathAttribute"></path><circle cx="256" cy="192" r="48" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></circle></svg>
												<div class="near-location">
													<p><?php echo $nearby_location; ?></p>
													<p><?php echo $nearby_kilometers; ?> km</p>
												</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>	
							 </div>
							 
						  </div>
					</div>
				</div>

				<div class="tab-content" id="included">
					<!-- What's Included content goes here -->
					<h5 class="font-semibold"> Inclusions: </h5>
					<div class="inclusion "> 
							<?php if (have_rows('included')) : ?>
								<ul>
									<?php while (have_rows('included')) : the_row(); ?>
										<?php
											$inclusions_list = get_sub_field('inclusions_list');
										?>
										<li>
											<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16" id="InclusionStar"> <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" id="mainIconPathAttribute" fill="green" stroke="#5ac55a" stroke-width="0"></path> </svg> 
											<span><?php echo $inclusions_list; ?></span>
										</li>
									<?php endwhile; ?>
								</ul>
							<?php endif; ?>
					</div>
					
					<h5 class="font-semibold"> Exclusions: </h5>
					<div class="exclusion "> 
						<?php if (have_rows('exclusions')) : ?>
							<ul>
								<?php while (have_rows('exclusions')) : the_row(); ?>
									<?php
										$exclusions_list = get_sub_field('exclusion_list');
									?>
									<li>
										<svg xmlns="http://www.w3.org/2000/svg" width="10.71" height="10.71" viewBox="0 0 10.71 10.71">
											 <g id="Group_2291" data-name="Group 2291" transform="translate(0 -0.135)">
												<path id="Path_1752" data-name="Path 1752" d="M.694,10.845A.694.694,0,0,1,.2,9.66L9.525.338a.694.694,0,0,1,.981.981L1.185,10.641a.691.691,0,0,1-.491.2Zm0,0" transform="translate(0 0)" fill="#f44336"/>
												<path id="Path_1753" data-name="Path 1753" d="M10.016,10.845a.692.692,0,0,1-.491-.2L.2,1.32A.694.694,0,1,1,1.185.338L10.506,9.66a.694.694,0,0,1-.491,1.184Zm0,0" transform="translate(0)" fill="#f44336"/>
											 </g>
										</svg>
										<span><?php echo $exclusions_list; ?></span>
									</li>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>

				<div class="tab-content" id="rooms">
					<!-- Rooms content goes here -->
					<div class="hotel-list-package">
						<?php if( have_rows('bedroom_properties') ): ?>
							<?php while( have_rows('bedroom_properties') ): the_row(); ?>
								<ul>
									<li>
										<div class="sub-hotel-list"> 
											<div class="hotel-room-list"> <?php the_sub_field('types_of_rooms'); ?>  </div>
											<div class="hotel-bed-list"> <img src="https://soledestinations.com/wp-content/uploads/2023/08/Path-1681.png"> <span> <?php the_sub_field('types_of_beds'); ?>  </span> </div>
											<div class="hotel-pax-list"> <span> Pax:</span> <span>  <?php the_sub_field('sleep_capacity'); ?> x <img src="https://soledestinations.com/wp-content/uploads/2023/08/Group-1833.png"> </span> </div>
										</div>
									</li>
								</ul>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>

				<div class="tab-content" id="reviews">
						<?php
							$post_id = get_the_ID();
							$gallery_images = get_field('hotel_gallery', $post_id);
							$gallery_post = get_field('hotel_gallery', $post_id);
							if ($gallery_images) {
								echo '<div class="landmark-gallery">';
								foreach ($gallery_images as $image_url) {
									echo '<img src="' . esc_url($image_url) . '" alt="" />';
								}
								echo '</div>';
							} else {
								echo 'No images found in the gallery.';
							}
						?>
					<div class="show-all-comment-tab"> 
						<a href="#" id="showReviews">Show All 120 Reviews <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16" id="IconChangeColor"> <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" id="mainIconPathAttribute" stroke-width="1" stroke="#000000"></path> </svg></a>
					</div>
					
					<!-- The modal -->
					<div id="popup-review" class="review-modal">
						<div class="review-content">
								<!-- Close button -->
								 <span class="close" onclick="closeModal('popup-review')">&times;</span>
								<!-- Content of the modal -->
								<?php if( have_rows('review_section') ): ?>
									<?php while( have_rows('review_section') ): the_row(); ?>
										<div class="review-section">
											<div class="sub-review-testimonial">
												<div class="pfp-sub-review">
													<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" id="mainIconPathAttribute"></path> <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" id="mainIconPathAttribute"></path> </svg>
												</div>
												<div class="sub-review-infos"> 
													<p> <?php the_sub_field('review_profile_name'); ?> </p>
													<p class="review-date"> landmark_gallery </p>
												</div>
												<div class="sub-review-ratings">
													<div class="rating-review">
														<input type="radio" name="rating" id="star5">
														<label for="star5"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16" id="ratings-width"> <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" id="mainIconPathAttribute" fill="#f6b502"></path> </svg></label>
														<input type="radio" name="rating" id="star4">
														<label for="star4"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16" id="ratings-width"> <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" id="mainIconPathAttribute" fill="#f6b502"></path> </svg></label>
														<input type="radio" name="rating" id="star3">
														<label for="star3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16" id="ratings-width"> <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" id="mainIconPathAttribute" fill="#f6b502"></path> </svg></label>
														<input type="radio" name="rating" id="star2">
														<label for="star2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16" id="ratings-width"> <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" id="mainIconPathAttribute" fill="#f6b502"></path> </svg></label>
														<input type="radio" name="rating" id="star1">
														<label for="star1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16" id="ratings-width"> <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" id="mainIconPathAttribute" fill="#f6b502"></path> </svg></label>
													</div>
												</div>
											</div>	
											<div class="review-testimonial">
												<p> <?php the_sub_field('review_comment'); ?> </p>
											</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
						</div>						
					</div>
					<script>
					  // Function to open a modal
					  function openModal(modalId) {
						var modal = document.getElementById(modalId);
						modal.classList.add("open");
					  }

					  // Function to close a modal
					  function closeModal(modalId) {
						var modal = document.getElementById(modalId);
						modal.classList.remove("open");
					  }

					  // Attach click event handlers for opening modals
					  document.getElementById("showOverview").onclick = function(event) {
						event.preventDefault(); // Prevent the default behavior
						openModal("popup-overview");
					  };

					  document.getElementById("showReviews").onclick = function(event) {
						event.preventDefault(); // Prevent the default behavior
						openModal("popup-review");
					  };

					  document.getElementById("showAmenities").onclick = function(event) {
						event.preventDefault(); // Prevent the default behavior
						openModal("popup-amenities");
					  };
					  
					  document.getElementById("showGallery").onclick = function(event) {
						event.preventDefault(); // Prevent the default behavior
						openModal("popup-gallery");
					  };
					</script>
				</div>
				<script>
					$(document).ready(function() {
						$(".tabs li").click(function() {
							// Get the tab name from data attribute
							var tabName = $(this).data("tab");
							
							// Hide all tab content
							$(".tab-content").removeClass("active");
							
							// Show the selected tab content
							$("#" + tabName).addClass("active");
						});
					});					
				</script>
		</div>
		

        <div class="col-lg-5 single-hotel-right">
			<div class="calendar-reservator-single-hotel">
				<div class="sub-section-single-hotel">
						<h4>Summary</h4>
						<form action="<?php echo esc_url( home_url( '/inquiry' ) ); ?>" method="post" id="inquiryForm">
							<input type="hidden" name="image-url" value="<?php echo esc_url(the_post_thumbnail_url()); ?>">
							<input type="hidden" name="name_of_destination" value="<?php echo esc_attr(wp_strip_all_tags($name_of_destination)); ?>">
							<input type="hidden" id="selected-fixed-date" name="selected-fixed-date" value="" />
							<input type="hidden" name="package_description" value="<?php the_field('package_description'); ?>">
							<input type="hidden" name="start_date" id="start_date" value="">
							<input type="hidden" name="end_date" id="end_date" value="">

							<div class="guest-section">
								<div class="guest-title"> 
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="20.087" viewBox="0 0 24 20.087">
										 <g id="Group_1781" data-name="Group 1781" transform="translate(0 -1.913)">
											<path id="Path_1665" data-name="Path 1665" d="M17,21V19a4,4,0,0,0-4-4H5a4,4,0,0,0-4,4v2" fill="none" stroke="#fd6614" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
											<circle id="Ellipse_184" data-name="Ellipse 184" cx="4" cy="4" r="4" transform="translate(5 3)" fill="none" stroke="#fd6614" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
											<path id="Path_1666" data-name="Path 1666" d="M23,21V19a4,4,0,0,0-3-3.87" fill="none" stroke="#fd6614" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
											<path id="Path_1667" data-name="Path 1667" d="M16,3.13a4,4,0,0,1,0,7.75" fill="none" stroke="#fd6614" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
										 </g>
									</svg>
									<span> Guests </span>
								</div>
								<div class="number-guest">
									<button id="minus" class="circular-button" type="button"> <!-- Use JavaScript to decrement guest count -->
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16" id="IconChangeColor">
											<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" id="mainIconPathAttribute" fill="#fd6614"></path>
											<path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" id="mainIconPathAttribute" fill="#fd6614"></path>
										</svg>
									</button>
									<input type="number" id="numberInput" name="number-guest" value="1">
									<button id="plus" class="circular-button" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16" id="IconChangeColor">
											<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" id="mainIconPathAttribute" fill="#fd6614"></path>
											<path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" id="mainIconPathAttribute" fill="#fd6614"></path>
										</svg>
									</button>
								</div>
							</div>
								
							<div class="hotel-single-fixed-dates">
								<a class="destination-book-btn" href="#" id="show-calendar-fixed" class="destination-book-btn">
									<span id="selected-dates-placeholder">Find your date</span>
								</a>
								<div id="popup" class="popup">
									<div class="popup-content-fixed-calendar">
										<span class="close-fixed-date" id="closePopup">x</span>
											<!---<div class="fixed-month-section">
												<p class="fixed-month-prev"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16" id="IconChangeColor"> <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" id="mainIconPathAttribute"></path> </svg>October 2023 </p>
												<p class="fixed-month">November 2023 </p>
												<p class="fixed-month-next">December 2023 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16" id="IconChangeColor"> <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" id="mainIconPathAttribute"></path> </svg> </p>
											</div>--->
											<p class="selected-fixed-date"> Please select a fixed date  </p>
											<div class="choose-fixed-calendar">
												<div class="slider-container">
													<div class="slider-wrapper">
														<?php if (have_rows('fixed_date_month')): ?>
															<?php while (have_rows('fixed_date_month')): the_row(); ?>
																<div class="slider-item">
																	 <p class="fixed-month"><?php the_sub_field('month'); ?></p>
																	<div class="choose-fixed-calendar">
																		<?php if (have_rows('choose_fixed_date')): ?>
																			<?php while (have_rows('choose_fixed_date')): the_row(); ?>
																				<div class="fixed-date-calendar">
																					<p class="fixed-date">
																						<?php 
																							// Get the start and end dates
																							$start_date = get_sub_field('fixed_start');
																							$end_date = get_sub_field('fixed_end');
																							// Display the start date with month and day
																							echo date('M j', strtotime($start_date)); 
																							// Add a "-" separator
																							echo ' - ';		
																							// Display the end date with full date (month, day, and year)
																							echo date('M j Y', strtotime($end_date));
																						?>
																					</p>
																					<p class="fixed-days-night">
																						<p class="fixed-days-night">
																							<?php 
																								// Get the start and end dates
																								$days = get_sub_field('no_of_days');
																								$night = get_sub_field('no_of_night');	
																								// Display the number of days and nights with parentheses
																								echo '(' . $days . ' Days ' . $night . ' Nights)';
																							?>
																						</p>
																					</p>
																					<script>
																						// Add this JavaScript to toggle the 'selected' class
																						document.querySelectorAll('.fixed-date-calendar').forEach(function(element) {
																							element.addEventListener('click', function() {
																							// Remove 'selected' class from all elements
																							document.querySelectorAll('.fixed-date-calendar').forEach(function(el) {
																								el.classList.remove('selected');
																							});
																							// Add 'selected' class to the clicked element
																							this.classList.add('selected');	
																							});
																						});	
																					</script>
																				</div>	
																			<?php endwhile; ?>
																		<?php endif; ?>
																	</div>
																</div>
															<?php endwhile; ?>
														<?php endif; ?>
													</div>
													<div class="slider-button prev-button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16" id="IconChangeColor"> <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" id="mainIconPathAttribute"></path> </svg></div>
													<div class="slider-button next-button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16" id="IconChangeColor"> <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" id="mainIconPathAttribute"></path> </svg></div>

													<script>
														 $(document).ready(function () {
														var currentIndex = 0;
														var totalItems = $(".slider-item").length;

														$(".next-button").click(function () {
															currentIndex = (currentIndex + 1) % totalItems;
															updateSlider();
														});

														$(".prev-button").click(function () {
															currentIndex = (currentIndex - 1 + totalItems) % totalItems;
															updateSlider();
														});

														function updateSlider() {
															var translateValue = currentIndex * -100 + "%";
															$(".slider-wrapper").css("transform", "translateX(" + translateValue + ")");
														}
													});
													</script>

												</div>
												<script>
													// Check if the element with the ID 'closePopup' exists before executing the script
													if (document.getElementById('closePopup')) {
														// Add this JavaScript to toggle the 'selected' class, update the selected-dates-placeholder content, and close the popup
														document.querySelectorAll('.fixed-date-calendar').forEach(function(element) {
															element.addEventListener('click', function() {
																// Remove 'selected' class from all elements
																document.querySelectorAll('.fixed-date-calendar').forEach(function(el) {
																	el.classList.remove('selected');
																});

																// Add 'selected' class to the clicked element
																this.classList.add('selected');

																// Update the content of the selected-dates-placeholder element with the clicked date
																var selectedDate = this.querySelector('.fixed-date').innerText;
																document.getElementById('selected-dates-placeholder').innerText = '' + selectedDate;

																// Set the values of the hidden input fields for start_date and end_date
																var dateRangeText = this.querySelector('.fixed-date').innerText.trim();
																var dateRangeParts = dateRangeText.split(' - ');

																if (dateRangeParts.length === 2) {
																	var start_date = dateRangeParts[0];
																	var end_date = dateRangeParts[1];

																	document.getElementById('start_date').value = start_date;
																	document.getElementById('end_date').value = end_date;
																}

																// Close the popup (you can replace this with your own close logic)
																document.getElementById('closePopup').click();
															});
														});
													}
												</script>

											</div>
											<div class="fixed-date-message">
												<p> <span> Save Big with Fixed Dates! </span> Enjoy exclusive discounts and special offers when you select fixed travel dates. </p>
											</div>
									</div> 
								</div>
								<script>
									document.getElementById("show-calendar-fixed").addEventListener("click", function(event) {
										event.preventDefault(); // Prevent the default behavior of the link
										document.getElementById("popup").style.display = "block";
									});

									document.getElementById("closePopup").addEventListener("click", function() {
										document.getElementById("popup").style.display = "none";
									});
								</script>
							</div>
							<div class="collapsible-date">
								<div class="date-reservation">
									<input type="date" id="start" name="trip-start" />
									<input type="date" id="end" name="trip-end" />
										<script>
											// Function to set the value of the date input to the current date
											function setCurrentDate(inputId) {
												const now = new Date();
												const year = now.getFullYear();
												const month = (now.getMonth() + 1).toString().padStart(2, '0');
												const day = now.getDate().toString().padStart(2, '0');
												const currentDate = `${year}-${month}-${day}`;
												
												document.getElementById(inputId).value = currentDate;
											}

											// Set the initial value of the date inputs to blank
											document.getElementById('start').value = '';
											document.getElementById('end').value = '';

											// Set the value of the date inputs to the current date when the user manually chooses a date
											document.getElementById('start').addEventListener('input', function () {
												if (this.value === '') {
													setCurrentDate('start');
												}
											});

											document.getElementById('end').addEventListener('input', function () {
												if (this.value === '') {
													setCurrentDate('end');
												}
											});
											
											
										</script>
								</div>
							</div>

							<div class="collapsible">Request Custom date? </div>
								
							<div class="amount-price-hotel"> 
								<div class="price-hotel-stay"> <p> Subtotal </p> </div>
								<div class="total-hotel-price font-semibold">
									<h6 id="totalPrice"> ₱ <span id="subTotal"><?= number_format(get_field('sub_total'), 0, '.', ','); ?></span> </h6>
									<input type="hidden" name="sub_total" value="<?= get_field('sub_total'); ?>">
								</div>
							</div>
								<div class="hotel-single-inquire">
									<button href="#popup1"  type="submit" class="destination-book-btn py-3 px-12" id="inquireButton">
										Inquire Now
									</button>
									<script>
										document.getElementById("inquireButton").addEventListener("click", function(event) {
											// Handle the button click event, e.g., show a confirmation or perform some action

											// Add validation logic to check if a date is selected
											var selectedDate = document.getElementById('selected-dates-placeholder').innerText.trim();
											var startDate = document.getElementById('start').value.trim();
											var endDate = document.getElementById('end').value.trim();

											if (selectedDate === 'Find your date' && (startDate === '' || endDate === '')) {
												// If no date is selected, prevent the form from submitting
												alert('Please select a date before inquiring.');
												event.preventDefault();
											} else {
												// Proceed with form submission
												document.getElementById("inquiryForm").submit();
											}
										});
									</script>
								</div>
						</form>
						<script>
							function incrementGuestCount() {
								var numberInput = document.getElementById("numberInput");
								var currentCount = parseInt(numberInput.value);
								numberInput.value = currentCount + 1;
							}

							function decrementGuestCount() {
								var numberInput = document.getElementById("numberInput");
								var currentCount = parseInt(numberInput.value);
								if (currentCount > 0) {
									numberInput.value = currentCount - 1;
									}
								}
						</script>
				</div>
			</div>
		</div>		
    </div>
</div>
</section>


<?php
    endwhile;
endif;
?>

<section class="like-travel">
    <div class="header-section-like">
        <h5 class="font-semibold">You May Also Like</h5>
        <a href="<?php the_field('see_more'); ?>">See All</a>
    </div>
	
	<div class="like-flex">
	<!--<?php
session_start();

$current_post_ids = isset($_SESSION['current_package_id']) ? $_SESSION['current_package_id'] : '';
?>

<?php
$args = new WP_Query([
    'post_type'      => 'hotels',
    'posts_per_page' => -1,
    'meta_key'       => 'hotel_location',
]);

if ($args->have_posts()) {
    $post_counter = 0; // Counter to track the number of posts displayed

    while ($args->have_posts() && $post_counter < 3) {
        $args->the_post();
        $selectedPostID = "";

        $terms = get_field('hotel_location');
        if ($terms) {
            foreach ($terms as $term) {
                $selectedPostID = $term->ID;
            }
        }


        if ($current_post_ids == $selectedPostID) {
            $post_counter++; // Increment the counter
            ?>
            <div class="col-sm-6 col-lg-3 single-available-hotel-container">
     
                <div class="single-available-hotel-image-container">
                    <img class="travel-photo" src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="">
                </div>
                <div class="single-available-hotel-contents">
    
                </div>
 
            </div>
            <?php
        }
    }
}


wp_reset_postdata();
?>--->
   <?php
    $args = new WP_Query([
        'post_type'      => 'hotels',
        'posts_per_page' => 3,
		'meta_key'       => 'hotel_location',
		'orderby'        => 'rand',
        
    ]);
		if ($args->have_posts()) :
			while ($args->have_posts()) : $args->the_post();
			$thumbnail_url = get_the_post_thumbnail_url(get_the_ID());
			$location = get_post_meta(get_the_ID(), 'location', true);
		?>
		
				
			<div class="col-sm-12 col-lg-3 single-available-hotel-container"> 
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
								<a style = "width: 100%;" href="<?php echo the_permalink();?>"><button class="single-available-hotel-button items-center text-white py-3 px-12">View Deal <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/> </svg></button></a>
							</div>		
						<!--- REPEATER ACF END --->
					</div>	
		<?php
			endwhile;
			wp_reset_postdata();
		else :
			echo 'No hotels found.';
		endif;
		?>
		
	</div>
</section>
<section class="single-commercial-section" style = "background:url('https://soledestinations.com/wp-content/themes/astra/assets/images/single.png');background-position:center; background-repeat:no-repeat;background-size:cover;">
    <h2 class="single-commercial-header">Can't find the perfect package?</h2>
    <p class="single-commercial-paragraph">Discover other options ready for your custom quote!</p>
    <a href="https://soledestinations.com/contact-us/"><button class = "single-commercial-btn">Find Your Custom Quote</button></a>
</section>

<?php get_footer('main');?>

<!---<div class="choose-fixed-calendar-2">
    <div class="choose-fixed-calendar-2">
        <?php if (have_rows('fixed_date_month')): ?>
            <?php while (have_rows('fixed_date_month')): the_row(); ?>
                <p><?php the_sub_field('month'); ?></p>
                <?php if (have_rows('choose_fixed_date')): ?>
                    <?php while (have_rows('choose_fixed_date')): the_row(); ?>
                        <div>
                             <p><?php echo get_sub_field('fixed_start'); ?></p>
                             <p><?php echo get_sub_field('fixed_end'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>--->





<script>
    jQuery(document).ready(function () {
        var subTotalValue = <?php echo get_field('sub_total'); ?>;

        function updateSubTotal() {
            var guestNum = jQuery('#numberInput').val();
            var currentVal = parseInt(guestNum);

            // Check if subTotalValue is available and is a valid number
            if (!isNaN(subTotalValue) && typeof subTotalValue === 'number') {
                var subTotal = currentVal * subTotalValue;
                jQuery('#subTotal').text(subTotal.toLocaleString());
            } else {
                jQuery('#subTotal').text('Price is unavailable');
            }
        }

        // Check if subTotalValue is available
        if (subTotalValue === undefined || isNaN(subTotalValue) || typeof subTotalValue !== 'number') {
            jQuery('#subTotal').text('Price is unavailable');
        } else {
            updateSubTotal();
        }

        jQuery('#plus').click(function () {
            var guestNum = jQuery('#numberInput').val();
            var currentVal = parseInt(guestNum) + 1;
            jQuery('#numberInput').val(currentVal);

            updateSubTotal();
        });

        jQuery('#minus').click(function () {
            var guestNum = jQuery('#numberInput').val();
            if (guestNum > 1) {
                var currentVal = parseInt(guestNum) - 1;
                jQuery('#numberInput').val(currentVal);

                updateSubTotal();
            }
        });

        jQuery('#numberInput').on('input', function () {
            updateSubTotal();
        });
    });
</script>


