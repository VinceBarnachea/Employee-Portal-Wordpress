<?php echo 'Admin HAHA';

    if(isset($_SESSION['user_id'])){
        echo $_SESSION['user_id'];
    }
    $urlLogout = get_template_directory_uri().'/controllers/logout.php/';
?>

<button onclick="redirectTo('<?php echo $urlLogout; ?>');" class = "bg-red text-white py-2 px-10 text-md">
    Logout
</button>

