jQuery(document).ready(function() {

    $('.flex-end-back').hover(
        function() {
          $(this).css('cursor', 'pointer');
        },
        function() {
          // You can reset the cursor when not hovering if needed
          $(this).css('cursor', 'default');
        }
      );
    jQuery('.flex-end-back').click(function() {
        window.history.back(); // Go back one step in the browser's history
    });
    
    // HOME BANNER
    jQuery('.home-new-banner').owlCarousel({
        nav:false,
        dots:true,
        items:1,
        autoplay: true,
        thumbsPrerendered: true,
        loop: true,
        lazyLoad: true,
    });

    jQuery('.home-new-banner-mobile').owlCarousel({
        nav:false,
        dots:true,
        items:1,
        autoplay: true,
        thumbsPrerendered: true,
        loop: true,
        lazyLoad: true,
    });
    
    // HOME POPULAR DESTINATIONS
    jQuery('.popular-destinations-carousel').owlCarousel({
        nav: false,
        autoplay: false,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        thumbs: true,
        center: true,
        dots: false,
        // thumbImage: true,
        thumbsPrerendered: true,
        loop: true,
        lazyLoad: true,
        rewind: true,
        mouseDrag: true,
        touchDrag: true,
        navSpeed: 300,
        // autoplayHoverPause:true,
        margin: 50,

        responsiveClass: true,
        responsive: {
            0: {
                items: 1.3,
                margin: 8,
     
                center: true,
                onInitialized: function(event){
                    jQuery(event.target).find(".owl-item.active .destinations-container").removeClass('first-class');
                    jQuery(event.target).find(".owl-item.active .destinations-container").removeClass('fifth-class');
                },
                onTranslated: function(event) {
                    jQuery(event.target).find(".owl-item.active .destinations-container").removeClass('first-class');
                    jQuery(event.target).find(".owl-item.active .destinations-container").removeClass('fifth-class');
                }
            },
            390: {
                items: 1.3,
                margin: 8,
                
                center: true,
                onInitialized: function(event){
                    jQuery(event.target).find(".owl-item.active .destinations-container").removeClass('first-class');
                    jQuery(event.target).find(".owl-item.active .destinations-container").removeClass('fifth-class');
                },
                onTranslated: function(event) {
                    jQuery(event.target).find(".owl-item.active .destinations-container").removeClass('first-class');
                    jQuery(event.target).find(".owl-item.active .destinations-container").removeClass('fifth-class');
                }
            },
            414: {
                items: 1,
                margin: 8,
                center: true,
                onInitialized: function(event){
                    jQuery(event.target).find(".owl-item.active .destinations-container").removeClass('first-class');
                    jQuery(event.target).find(".owl-item.active .destinations-container").removeClass('fifth-class');
                },
                onTranslated: function(event) {
                    jQuery(event.target).find(".owl-item.active .destinations-container").removeClass('first-class');
                    jQuery(event.target).find(".owl-item.active .destinations-container").removeClass('fifth-class');
                }
            },
            600: {
                items: 2.5,
                margin: 8,
                center: true,
                onInitialized: function(event){
                    jQuery(event.target).find(".owl-item.active .destinations-container").removeClass('first-class');
                    jQuery(event.target).find(".owl-item.active .destinations-container").removeClass('fifth-class');
                },
                onTranslated: function(event) {
                    jQuery(event.target).find(".owl-item.active .destinations-container").removeClass('first-class');
                    jQuery(event.target).find(".owl-item.active .destinations-container").removeClass('fifth-class');
                }
            },
            1000: {
                items: 5,
                margin: 8,

            },
            1400: {
                items: 5,
                margin: 8,
         
            },
            1800: {
                items: 5,
                margin: 8,
       
            }
        },
        onInitialized: function(event){
            jQuery(event.target).find(".owl-item.active .destinations-container").eq(0).addClass('first-class');
            jQuery(event.target).find(".owl-item.active .destinations-container").eq(4).addClass('fifth-class');
        },
        onTranslated: function(event) {
            jQuery(event.target).find(".owl-item.active .destinations-container").removeClass('first-class');
            jQuery(event.target).find(".owl-item.active .destinations-container").removeClass('fifth-class');
            jQuery(event.target).find(".owl-item.active .destinations-container").eq(0).addClass('first-class');
            jQuery(event.target).find(".owl-item.active .destinations-container").eq(4).addClass('fifth-class');
        }
    });


    // HOME USER COMMENT MOBILE
    jQuery('.travellers-experience-content-mobile').owlCarousel({
        nav: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        thumbs: true,
        center: true,
        dots: true,
        // thumbImage: true,
        thumbsPrerendered: true,
        loop: true,
        lazyLoad: true,
        rewind: true,
        mouseDrag: true,
        touchDrag: true,
        // autoplayHoverPause:true,
        margin: 50,
        items: 1,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
                center: false,
                margin: 0,
            },
            1000: {
                items: 5,
            }
        }
    });


    // HOME LOGO PARTNERS
    jQuery('.partner-logo-slide').owlCarousel({
        nav: false,
        // autoplay: true,
        // autoplayTimeout: 3000,
        // autoplayHoverPause: true,
        thumbs: true,
        dots: true,
        // thumbImage: true,
        thumbsPrerendered: true,
        loop: true,
        lazyLoad: true,
        rewind: true,
        mouseDrag: true,
        touchDrag: true,
        // autoplayHoverPause:true,

        slideBy: 3,
        items: 3,
        stagePadding: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
                margin: 8,
            },
            600: {
                items: 3,
                margin: 90,
                stagePadding: 40,
            },
            1000: {
                items: 5,
            }
        }
    });

    jQuery('.new-partners-slide').owlCarousel({
        items: 2,
        margin: 3,
        dots: false,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        slideBy: 3,
    });


    // ABOUT CARDS CONTAINER
    jQuery('.about-cards-container').owlCarousel({
        nav: false,
        thumbs: true,
        dots: false,
        // thumbImage: true,
        thumbsPrerendered: true,
        loop: false,
        lazyLoad: true,
        rewind: true,
        mouseDrag: true,
        touchDrag: true,
        // autoplayHoverPause:true,
        margin: 0,
        responsiveClass: true,
        responsive: {
            0: {
                autoplay: false,
                items: 1,
                center: true,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 4,
            }
        }
    });

    jQuery('.new-banner-section').owlCarousel({
        items: 1,
        margin: 0,
        dots: false,
        loop: false,
        rewind: true,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        nav: false,
        autoplay: true,
        autoplayTimeout:8000,
    });

    jQuery('.news-slider').owlCarousel({
        items: 1.5,
        margin: 8,
        dots: false,
        loop: true,
        rewind: true,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        nav: false,
        autoplay: true,
        autoplayTimeout: 8000,
    });


    // HOME CARDS CONTAINER
    jQuery('.home-cards-container-mobile').owlCarousel({
        nav: false,
        thumbs: true,
        dots: false,
        // thumbImage: true,
        thumbsPrerendered: true,
        loop: false,
        lazyLoad: true,
        rewind: true,
        mouseDrag: true,
        touchDrag: true,
        // autoplayHoverPause:true,
        margin: 0,
        responsiveClass: true,
        responsive: {
            0: {
                autoplay: true,
                autoplayTimeout: 3000,
                items: 1,
                center: true,
            },
            600: {
                items: 2,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
            },
            1000: {
                items: 4,
            }
        }
    });
    jQuery('.popular-destinations-carousel .owl-item').click(function(){
        owlIndex = $(this).index();
        count = document.querySelectorAll(".popular-destinations-carousel .owl-item.active").length;
        $('.popular-destinations-carousel .owl-stage-outer').trigger('to.owl.carousel', owlIndex - count);
    });
    // CUSTOM NAVIGATION FOR POPULAR DESTINATIONS
    jQuery('.destination-button-left').click(function() {
        jQuery('body > section.home-destinations-section > div.popular-destinations-carousel.owl-carousel.owl-theme.owl-loaded.owl-drag > div.owl-nav > button.owl-prev').click()
    });
    jQuery('.destination-button-right').click(function() {
        jQuery('body > section.home-destinations-section > div.popular-destinations-carousel.owl-carousel.owl-theme.owl-loaded.owl-drag > div.owl-nav > button.owl-next').click()
    });


    // CUSTOM NAVIGATION FOR ABOUT CARDS
    jQuery('.cards-btn-left').click(function() {
        jQuery('body > section.about-cards > div.about-cards-container.owl-carousel.owl-theme.owl-loaded.owl-drag > div.owl-nav > button.owl-prev').click()
    });
    jQuery('.cards-btn-right').click(function() {
        jQuery('body > section.about-cards > div.about-cards-container.owl-carousel.owl-theme.owl-loaded.owl-drag > div.owl-nav > button.owl-next').click()
    });

    // CUSTOM NAVIGATION FOR HOME CARDS
    jQuery('.home-cards-left').click(function() {
        jQuery('body > section.home-loyalty-card-section > div.row.home-cards > div.col-xs-12.home-cards-container-mobile.owl-carousel.owl-theme.owl-loaded.owl-drag > div.owl-nav > button.owl-prev').click()
    });
    jQuery('.home-cards-right').click(function() {
        jQuery('body > section.home-loyalty-card-section > div.row.home-cards > div.col-xs-12.home-cards-container-mobile.owl-carousel.owl-theme.owl-loaded.owl-drag > div.owl-nav > button.owl-next').click()
    });

    // TOGGLE FILTER CONTAINER
    jQuery('.filter-icon-container').click(function(e) {
        e.stopPropagation();
        jQuery('.package-filter-ul').toggleClass('show-filter');

    });


    // TOGGLE SORT CONTAINER
    jQuery('.sort-icon-container').click(function(e) {
        e.stopPropagation();
        jQuery('.package-sort-ul').toggleClass('show-sort');


    });


    // CLOSE CONTAINER WHEN IT IS CLICKED
    jQuery(document).click(function() {
        if (jQuery('.package-sort-ul').hasClass('show-sort')) {
            jQuery(".sort-icon-container").trigger("click");
        }
        if (jQuery('.package-filter-ul').hasClass('show-filter')) {
            jQuery(".filter-icon-container").trigger("click");
        }
    });



    // OPEN MODAL
    jQuery('.destination-book-btn').click(function(e) {
        jQuery('.modal-inquire-now').css({
            'display' : 'flex'
        });
    });

    // CLOSE MODAL
    jQuery('.modal-close').click(function(e) {
        jQuery('.modal-inquire-now').css({
            'display' : 'none'
        });
    });

    

    // CLOSE NAV WHEN MENU IS CLICKED IN MOBILE
    jQuery('.header-menu a').click(function() {
        jQuery('#nav-toggle').prop("checked", false);
    });




    // CHANGES MAP LOCATION

    // jQuery('.SM-Marikina').click(function() {   
    //     jQuery('.find-us-map').attr("src", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.528996870083!2d121.08033937593385!3d14.625886576455446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b82619820f7f%3A0xc97308c2daf913d3!2sSole%20Destinations%20Travel%20%26%20Tours%20Marikina!5e0!3m2!1sen!2sph!4v1684289858321!5m2!1sen!2sph");
    // });
    

    // jQuery('.Robinsons-Place-Antipolo').click(function() {   
    //     jQuery('.find-us-map').attr("src", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.1072879611916!2d121.16922277593375!3d14.592961877261985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397bf4d08889c99%3A0x1260a63b20b888cf!2sSole%20Destinations%20Travel%20and%20Tours%20Antipolo!5e0!3m2!1sen!2sph!4v1684291654944!5m2!1sen!2sph");
    // });

    // jQuery('.SM-East-Ortigas').click(function() {   
    //     jQuery('.find-us-map').attr("src", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.1870497495065!2d121.10392837593348!3d14.588414977373134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c78b878c5b7f%3A0x618777426032b578!2sSole%20Destinations%20Travel%20%26%20Tours!5e0!3m2!1sen!2sph!4v1684292170851!5m2!1sen!2sph");
    // });

    // jQuery('.SM-Taytay').click(function() {   
    //     jQuery('.find-us-map').attr("src", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.597022218615!2d121.13604607593327!3d14.565022177945105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c712fdafebf3%3A0xc59b0846bd383be1!2sSole%20Destinations%20SM%20City%20Taytay!5e0!3m2!1sen!2sph!4v1684292286394!5m2!1sen!2sph");
    // });



    jQuery('#select-branch').on("change", function(){
        var selectedBranch = jQuery(this).val();
        window.location.href = selectedBranch;
    });

    jQuery('#branchNameField').val(jQuery('.branch-contact-form-header').text());
    jQuery('#branchEmailField').val(jQuery('.branch-contact-email').text());
    var activeBranch = jQuery('.branch-contact-form-header').text();
    jQuery('#select-branch option').each(function(){
        var optionText = jQuery(this).text();

        if(optionText == activeBranch){
            jQuery(this).prop("selected",true);
        }
    });


    $(".select-branch-container").click(function () {
        $("#select-branch").trigger("mousedown");
    });

    
});//end of ready function 
	
	
	//for inquiry submit
$(document).ready(function() {
            // Attach a click event handler to the custom-submit-btn
            $('#custom-submit-btn').on('click', function() {
                // Trigger the click event on the Contact Form 7 submit button
                $('[id^="submit-inquiry"]').click();

                // Log a message to the console to check if this code is reached
                console.log('Button clicked');
            });

            // Assuming there's a success event from Contact Form 7
            $(document).on('wpcf7mailsent', function(event) {
                // Redirect to the specified URL after successful form submission
                window.location.href = 'https://soletravel.ph/success/';
            });
});


//jQuery(document).ready(function($) {
//  $('.btn-inq-submit').on('click', function(e) {
       // Prevent the default form submission
//       e.preventDefault();

        // Find the form
 //      var form = $('.my-contact-form-container').find('form.wpcf7-form');

//       if (form.length) {
            // Submit the form
//            form.submit();
//        }
//    });
//});
	
	
	
	
	//dropdown
	document.querySelector('.collapsible').addEventListener('click', function() {
  var content = document.querySelector('.collapsible-date'); // Update to match your HTML structure
  var hotelSingleFixedDates = document.querySelector('.hotel-single-fixed-dates');

  // Toggle collapsible content
  if (content.style.maxHeight === '0px' || content.style.maxHeight === '') {
    // Collapsible content is collapsed or not set
    content.style.maxHeight = content.scrollHeight + 'px';
    hotelSingleFixedDates.style.pointerEvents = 'none';
    hotelSingleFixedDates.style.opacity = '0.5'; // Adjust the opacity value as needed
  } else {
    // Collapsible content is expanded
    content.style.maxHeight = '0';
    hotelSingleFixedDates.style.pointerEvents = 'auto';
    hotelSingleFixedDates.style.opacity = '1';
  }
});

// Add smooth transition effect
document.querySelectorAll('.collapsible-date input[type="date"]').forEach(function (input) {
  input.addEventListener('input', function () {
    var content = document.querySelector('.collapsible-date'); // Update to match your HTML structure
    content.style.transition = 'max-height 0.3s ease'; // Adjust the transition duration and easing as needed
  });
});

//math



	




