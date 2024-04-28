<?php get_header('main');?>



<section class="inquiry-section">
	<div class="inquiry-sub-header">
		<div class="flex-selection"> <span class="bcg-circle"> 1 </span> Your Selection </div>
		<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16" id="IconChangeColor"> <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" id="mainIconPathAttribute"></path> </svg>
		<div class="flex-done"> <span class="bcg-circle"> 2 </span> Done </div>
		<div class="flex-end-back"> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16" id="IconChangeColor"> <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" id="mainIconPathAttribute" stroke-width="1.1" stroke="#000000"></path> </svg> Go Back </div>
	</div>
	<div class="row" id="inquiry-row">
		<div class="col-xs-12 col-sm-12 col-lg-7 inquiry-forms-section"> 
			<div class="flex-inquiry-section">
				<?php
					if ($_SERVER["REQUEST_METHOD"] === "POST") {
						$imageUrl = $_POST["image-url"]; // Retrieve the image URL from the hidden input field

						// Display the image using the retrieved URL
						echo '<img class="inquiry-thumbnail" src="' . esc_url($imageUrl) . '" alt="" srcset=""><br>';
					}
					
				?>
				
				<div class="inquiry-details">
					<h5 class="flex-end-back" id= "inquiry-package-name">
						<?php
							if ($_SERVER["REQUEST_METHOD"] === "POST") {
								$name_of_destination = $_POST["name_of_destination"];

								// Split the string based on the delimiter "for as low as"
								$name_parts = explode("for as low as", $name_of_destination);

								// Get the first part of the split string (before "for as low as")
								$desired_text = trim($name_parts[0]);

								// Debugging - print the modified value
								echo $desired_text;
							}
						?>
						
					</h5>
					<div class="package-description-inquiry">
						<?php
						if ($_SERVER["REQUEST_METHOD"] === "POST") {
							// Retrieve the value of the hidden field
							$package_description = isset($_POST["package_description"]) ? $_POST["package_description"] : "";

							// Display the value (for debugging purposes)
							echo "" . $package_description;
						}
						?>
					</div>
					<div class="inquiry-rooms"> 
						<div class="pax-inquiry"> 
							<svg xmlns="http://www.w3.org/2000/svg" width="11.582" height="24.534" viewBox="0 0 11.582 24.534">
							  <g id="Group_1837" data-name="Group 1837" transform="translate(-678.305 326.135)">
								<path id="Path_1682" data-name="Path 1682" d="M689.234-282.637c0,.851.01,1.7,0,2.553a2.576,2.576,0,0,1-1.34,2.207,1.3,1.3,0,0,0-.528.794c-.25,1.733-.43,3.476-.657,5.213-.132,1.008-.579,1.378-1.6,1.389-.7.007-1.393.011-2.089,0a1.33,1.33,0,0,1-1.511-1.313c-.235-1.709-.451-3.422-.633-5.138a1.078,1.078,0,0,0-.621-1.02,2.245,2.245,0,0,1-1.28-2.062c-.017-1.805-.021-3.611,0-5.416a2.39,2.39,0,0,1,1.507-2.24,2.1,2.1,0,0,1,2.418.43c1.044.864,1.592.87,2.582-.012a1.848,1.848,0,0,1,2.176-.446,2.345,2.345,0,0,1,1.547,2.044c.063,1,.014,2.01.014,3.016Z" transform="translate(0 -31.777)" fill="none" stroke="#000" stroke-width="1.3"/>
								<path id="Path_1683" data-name="Path 1683" d="M701.248-322.9a2.54,2.54,0,0,1-2.621,2.551,2.49,2.49,0,0,1-2.51-2.563,2.531,2.531,0,0,1,2.523-2.57A2.584,2.584,0,0,1,701.248-322.9Z" transform="translate(-14.504)" fill="none" stroke="#000" stroke-width="1.3"/>
							  </g>
							</svg>
							<div class="inquiry-number-pax"> 
							
								<?php
									if ($_SERVER["REQUEST_METHOD"] === "POST") {
										$numberOfGuests = $_POST["number-guest"];

										// Debugging - print the "number-guest" value
										 echo $numberOfGuests . " Guests <br>";
									}
								?>
							</div>
						</div>
						<div class="calendar-fixed-inquiry"> 
							<svg xmlns="http://www.w3.org/2000/svg" width="18.519" height="18.519" viewBox="0 0 18.519 18.519">
							  <g id="Group_2221" data-name="Group 2221" transform="translate(0.15 0.15)">
								<path id="Path_1637" data-name="Path 1637" d="M2.652.5H15.567a2.152,2.152,0,0,1,2.152,2.152V15.567a2.152,2.152,0,0,1-2.152,2.152H2.652A2.152,2.152,0,0,1,.5,15.567V2.652A2.152,2.152,0,0,1,2.652.5Z" fill="none" stroke="#06102a" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" fill-rule="evenodd"/>
								<path id="Path_1638" data-name="Path 1638" d="M.5,4.5H17.719" transform="translate(0 0.305)" fill="none" stroke="#06102a" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" fill-rule="evenodd"/>
							  </g>
							</svg>
							<div class="inquiry-calendar-fixed"> <!--Tue, Nov. 28 - Thu, Nov 30 (Fixed Date)-->
								<?php
									if ($_SERVER["REQUEST_METHOD"] === "POST") {
										// Check if the date inputs are set in the POST data
										if (isset($_POST["trip-start"]) && isset($_POST["trip-end"])) {
											$tripStart = $_POST["trip-start"];
											$tripEnd = $_POST["trip-end"];
											$numberOfGuests = $_POST["number-guest"];

											// Check if the date inputs are not empty
											if (!empty($tripStart) && !empty($tripEnd)) {
												// Convert date strings to DateTime objects
												$startDateTime = new DateTime($tripStart);
												$endDateTime = new DateTime($tripEnd);

												// Format the dates as required
												$formattedStartDate = $startDateTime->format("D, M. j");
												$formattedEndDate = $endDateTime->format("D, M. j");

												// Set a flag to indicate that formatted dates are available
												$formattedDatesAvailable = true;

												// Display the formatted dates
												echo $formattedStartDate . " - " . $formattedEndDate;
											} else {
												// Set the flag to indicate that formatted dates are not available
												$formattedDatesAvailable = false;
											}
										} else {
											// Set the flag to indicate that formatted dates are not available
											$formattedDatesAvailable = false;
										}
									}

									// Retrieve the start and end dates from the form submission
									$start_date = isset($_POST['start_date']) ? sanitize_text_field($_POST['start_date']) : '';
									$end_date = isset($_POST['end_date']) ? sanitize_text_field($_POST['end_date']) : '';

									// Display the appropriate content based on the flag
									if (!$formattedDatesAvailable) {
										echo $start_date . " - " . $end_date;
									}
									?>

								
								<!---- 
								<?php
									if ($_SERVER["REQUEST_METHOD"] === "POST") {
										$tripStart = $_POST["trip-start"];
										$tripEnd = $_POST["trip-end"];
										$numberOfGuests = $_POST["number-guest"];

										// Convert date strings to DateTime objects
										$startDateTime = new DateTime($tripStart);
										$endDateTime = new DateTime($tripEnd);

										// Format the dates as required
										$formattedStartDate = $startDateTime->format("D, M. j");
										$formattedEndDate = $endDateTime->format("D, M. j");

										// Display the formatted dates
										echo "" . $formattedStartDate . " - ";
										echo "" . $formattedEndDate . "<br>";
									}
								?>
								
								----->
								<!--<?php
								if ($_SERVER["REQUEST_METHOD"] === "POST") {
									// Assuming you're working within a WordPress context or have access to the post ID
									$post_id = get_the_ID();

									// Check if fixed_date data is present in the POST request
									if (isset($_POST['fixed_date'][$post_id])) {
										// Retrieve fixed_start and fixed_end values
										$selectedFixedStartDate = isset($_POST['fixed_date'][$post_id]['fixed_start'][0]) ? $_POST['fixed_date'][$post_id]['fixed_start'][0] : null;
										$selectedFixedEndDate = isset($_POST['fixed_date'][$post_id]['fixed_end'][0]) ? $_POST['fixed_date'][$post_id]['fixed_end'][0] : null;

										// Check if the values are not empty
										if (!empty($selectedFixedStartDate) && !empty($selectedFixedEndDate)) {
											// Display fixed date information
											echo '<div id="selected-dates-info">';
											echo "<p>Selected Fixed Date: " . date('M j', strtotime($selectedFixedStartDate)) . ' - ' . date('M j Y', strtotime($selectedFixedEndDate)) . "</p>";
											echo '</div>';
										} else {
											echo 'No fixed dates selected.';
										}
									} else {
										echo 'No fixed date data received.';
									}
								}
								?>

								<?php
								if ($_SERVER["REQUEST_METHOD"] === "POST") {
									// Check if a fixed date is selected
									$selectedFixedStartDate = isset($_POST["selected-fixed-start"]) ? $_POST["selected-fixed-start"] : null;
									$selectedFixedEndDate = isset($_POST["selected-fixed-end"]) ? $_POST["selected-fixed-end"] : null;

									if (!empty($selectedFixedStartDate) && !empty($selectedFixedEndDate)) {
										// Display fixed date information
										echo '<div id="selected-dates-info">';
										echo "<p>Selected Fixed Date: " . date('M j', strtotime($selectedFixedStartDate)) . ' - ' . date('M j Y', strtotime($selectedFixedEndDate)) . "</p>";
										echo '</div>';
									} else {
										// Display date inputs information
										$tripStart = $_POST["trip-start"];
										$tripEnd = $_POST["trip-end"];

										// Convert date strings to DateTime objects
										$startDateTime = new DateTime($tripStart);
										$endDateTime = new DateTime($tripEnd);

										// Format the dates as required
										$formattedStartDate = $startDateTime->format("D, M. j");
										$formattedEndDate = $endDateTime->format("D, M. j");

										// Display the formatted dates
										echo '<div id="selected-dates-info">';
										echo "" . $formattedStartDate . " - " . $formattedEndDate . "";
										echo '</div>';
									}
								}
								?>--->
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="my-contact-form-container">
			<?php echo do_shortcode('[contact-form-7 id="567" title="Inquiry Details"]') ?>
			
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-lg-5 inquiry-price-policy-section"> 
			<div class="inquiry-price-policy"> 
				<h5> Price Package </h5>
				<div class="price-summary-section">
					<div class="bed-days-price-summary">
						<div class="bed-summary"> Package Price </div>
						<div class="price-summary"> PHP
							<?php
							// Retrieve the 'sub_total' value from the form submission
							$subTotalFromForm = isset($_POST['sub_total']) ? $_POST['sub_total'] : '';

							// Display the 'sub_total' value with commas and remove trailing .00
							$formattedSubTotal = rtrim(number_format($subTotalFromForm, 2, '.', ','), '.00');

							// Display the formatted 'sub_total' value
							echo $formattedSubTotal;
							?>
						</div>
					</div>
					<div class="main-tax-fee-name-price">
						<div class="taxes-fees"> Pax </div>
						<div class="taxes-fee-price">
							<?php
							if ($_SERVER["REQUEST_METHOD"] === "POST") {
								$numberOfGuests = $_POST["number-guest"];

								// Debugging - print the "number-guest" value
								echo $numberOfGuests;
							}
							?>
						</div>
					</div>
				</div>
				
				<div class="dash-total"> 
					<hr>
				</div>
				
				<div class="total-amount-section"> 
					<div class="amount-name"> ESTIMATED AMOUNT </div>
					<div class="amount-price"> PHP  
						<?php
						// Perform multiplication
						$multiplicationResult = $subTotalFromForm * $numberOfGuests;

						// Format the multiplication result with commas and remove trailing .00
						$formattedResult = rtrim(number_format($multiplicationResult, 2, '.', ','), '.00');

						// Display the formatted result
						echo $formattedResult;
						?>  
					</div>
				</div>
			</div>
			
			<div class="terms-condition-section">
				<div class="tc-con"> 
					<p>Sole Travel take data seriously. Please read our  <span class="policy-anchor">privacy policy</span> for information on how we handle your data and what your rights are. </p>
						<div class="">
						<div class="sub-tc-con">
							 <input type="checkbox" id="checkbox-tc" name="checkbox-tc"/> 
							 <label for="checkboc-tc">By ticking this box I agree that I have read the <span class="piracy-link">privacy policy</span> and consent to the given information being used by Sole Travel to contact me about inquiry.</label>
						</div>
						<div class="sub-tc-con">
							 <input type="checkbox" id="checkbox-tc" name="checkbox-tc"/> 
							 <label for="checkboc-tc"> By ticking this box I agree to receive news, updates, promotions and offers from Sole Travel. </label>
						</div>
						<div class="inq-btn">
							<button id="custom-submit-btn" class="btn-inq-submit">Submit</button>
						</div>
				</div> 
			</div>
		</div>
		
		
	</div>
</section>

<!--<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $tripStart = $_POST["trip-start"];
    $tripEnd = $_POST["trip-end"];
    $numberOfGuests = $_POST["number-guest"];

    // Display the submitted data
    echo "Trip Start Date: " . $tripStart . "<br>";
    echo "Trip End Date: " . $tripEnd . "<br>";
    
    // Debugging - print the "number-guest" value
    echo "Number of Guests: " .($numberOfGuests) . "<br>";
}
?>--->

<script>
    jQuery(document).ready(function(){
        var packageName = jQuery('#inquiry-package-name').text();
        var numberOfGuest = jQuery('.inquiry-number-pax').text().replace(/\D/g, '');
        var dateStart = jQuery('.inquiry-calendar-fixed').text();

        // Extract only digits from the text
        var packagePrice = jQuery('.price-summary').text().replace(/\D/g, '');
        var totalAmount = jQuery('.amount-price').text().replace(/\D/g, '');

        // Format numbers with commas
        var formattedPackagePrice = parseInt(packagePrice).toLocaleString();
        var formattedTotalAmount = parseInt(totalAmount).toLocaleString();

        // Concatenate "PHP" prefix with a space and the formatted numeric values
        var packagePriceAmount = 'PHP ' + formattedPackagePrice;
        var totalAmountPrice = 'PHP ' + formattedTotalAmount;

        jQuery('#package-name').val(packageName);
        jQuery('#number-guest').val(numberOfGuest);
        jQuery('#date-start-end').val(dateStart);

        // Set the concatenated value to package-price
        jQuery('#package-price').val(packagePriceAmount);

        // Set the concatenated value to total-amount
        jQuery('#total-amount').val(totalAmountPrice);
    });
</script>



<?php get_footer('main');?>

