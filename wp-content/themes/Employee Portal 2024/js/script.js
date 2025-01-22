jQuery(document).ready(function(){

    console.log('Initialize');

    jQuery(".form-inputs").focus(function() {
        // Add has-value class to the label
        jQuery(this).siblings('label').addClass('has-value');
    })
    // blur input fields on unfocus + if has no value
    .blur(function() {
        // Set input current value
        var text_val = jQuery(this).val();
        // Check if input has value
        if (text_val === "") {
            // If current value is none, then remove has-value
            jQuery(this).siblings('label').removeClass('has-value');
        }
    });

    jQuery('.bi-eye').click(function(){
        jQuery(this).hide();
        jQuery('.bi-eye-slash').show();
        jQuery('.login-pass-input').attr('type', 'text');
    });

    jQuery('.bi-eye-slash').click(function(){
        jQuery(this).hide();
        jQuery('.bi-eye').show();
        jQuery('.login-pass-input').attr('type', 'password');
    });

    jQuery('.tab-menu').click(function (e) {
        jQuery('.tab-menu').not(this).removeClass('active-tab').find('.dropdown-body').slideUp(); // Collapse other dropdowns
        jQuery(this).toggleClass('active-tab'); // Toggle current tab active state
        jQuery(this).find('.dropdown-body').slideToggle(); // 
        // Show/hide dropdown
        $(this).toggleClass('dropdown-expand');
    });
    
    jQuery('.dropdown-body').click(function (e) {
        e.stopPropagation(); // Prevent bubbling to the parent `.tab-menu`
    });

    jQuery('.sub-tab-menu').click(function (e){
        jQuery('.sub-tab-menu').not(this).removeClass('sub-active-tab');
        jQuery(this).toggleClass('sub-active-tab');
    });
}); //End of Ready function

function wrongPass(){
    jQuery('.error-container').show();
    jQuery('.login-cta-btn').removeClass('mt-4');
    jQuery('.login-error-txt').text('Username or Password are incorrect. Please Try Again.');
    setTimeout(function(){
        jQuery('.error-container').hide();
    },6000);
}

function noInput(){
    jQuery('.error-container').show();
    jQuery('.login-cta-btn').removeClass('mt-4');
    jQuery('.login-error-txt').text('Enter Username and Password');
    setTimeout(function(){
        jQuery('.error-container').hide();
    },6000);
}

function redirectTo(location){
    window.location.href = location;
}