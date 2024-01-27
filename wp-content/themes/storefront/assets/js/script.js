jQuery(document).ready(function(){

    console.log('Initialize');

})

function wrongPass(){
    $('.error-container').show();
    $('.login-cta-btn').removeClass('mt-4');
    $('.login-error-txt').text('Wrong Email or Password');
}

function noInput(){
    $('.error-container').show();
    $('.login-cta-btn').removeClass('mt-4');
    $('.login-error-txt').text('Enter Username and Password');
}

function redirectTo(location){
    window.location.href = location;
}