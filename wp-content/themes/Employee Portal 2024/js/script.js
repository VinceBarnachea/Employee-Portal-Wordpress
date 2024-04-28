jQuery(document).ready(function(){

    console.log('Initialize');

})

function wrongPass(){
    $('.error-container').show();
    $('.login-cta-btn').removeClass('mt-4');
    $('.login-error-txt').text('Username or Password are incorrect. Please Try Again.');
}

function noInput(){
    $('.error-container').show();
    $('.login-cta-btn').removeClass('mt-4');
    $('.login-error-txt').text('Enter Username and Password');
}

function redirectTo(location){
    window.location.href = location;
}