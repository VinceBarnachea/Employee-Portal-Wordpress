<?php
session_start();
if(isset($_SESSION['user_id']))
    {
        unset($_SESSION['user_id']);
    }
else{

}

header("Location: ".$_SESSION['home_url']);
die;
    ?>
    