<?php
session_start();
if(isset($_SESSION['user_id']))
    {
        unset($_SESSION['user_id']);
        echo 'Session Unset';
    }
else{
    echo 'No Session';
}

header("Location: ".$_SESSION['home_url']);
die;
    ?>
    