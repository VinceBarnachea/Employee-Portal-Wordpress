<?php
include_once(get_template_directory() . '/controllers/connection.php');
    if(isset($_SESSION['user_id'])){
        // echo $_SESSION['user_id'];
    }
    $urlLogout = get_template_directory_uri().'/controllers/logout.php/';

    $fetch_curr_user = "SELECT * FROM tbl_emp WHERE user_id = '{$_SESSION['user_id']}'";
    $fetch_curr_user_result = mysqli_query($con, $fetch_curr_user);

    if($fetch_curr_user_result && mysqli_num_rows($fetch_curr_user_result) > 0){
        $user_data = mysqli_fetch_assoc($fetch_curr_user_result);
    }else{

    }
?>



<main class="w-full h-full">
    <div class="grid grid-cols-12 h-full">
        <div class="col-span-2 flex flex-col h-full">
            <div class="w-full bg-white flex flex-col items-center justify-center px-4 py-8">
                <img src="<?= get_template_directory_uri()?>/assets/images/img-wireframe.png" alt="" srcset="">
                <h2 class="text-2xl font-medium text-black text-center mt-4"><?= "{$user_data['first_name']} {$user_data['last_name']}"?></h2>
                <span class="text-base text-black"><?= "{$user_data['position']}"?></span>
            </div>
            <div class="bg-blue h-full"></div>
        </div>

        <div class="col-span-10">
            <button onclick="redirectTo('<?php echo $urlLogout; ?>');" class = "bg-red text-white py-2 px-10 text-md">
                Logout
            </button>
        </div>
    </div>
</main>