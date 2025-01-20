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
        $user_level = $user_data['user_level'];
    }else{

    }
?>



<main class="w-full h-full">
    <div class="grid grid-cols-12 h-full">
        <div class="col-span-2 border-r-[1px] flex flex-col justify-between min-h-[100vh] px-6 py-8">
            <div class="w-full flex flex-col items-start justify-center">
                <!-- Company Section -->
                <div class="company-section flex items-center gap-3">
                    <img class = "object-cover aspect-[1/1] w-10 h-10" src="<?= get_template_directory_uri()?>/assets/images/img-wireframe.png" alt="" srcset="">
                    <h2 class="text-blue text-xl">Company Name</h2>
                </div>

                <!-- Current User -->
                <div class="flex gap-3 justify-start items-center mt-12 px-3 py-2 border w-full">
                    <img class = "object-cover aspect-[1/1] w-12 h-12" src="<?= get_template_directory_uri()?>/assets/images/img-wireframe.png" alt="" srcset="">
                    <div class="flex flex-col items-start justify-center">
                        <h2 class="text-base font-medium text-black"><?= "{$user_data['first_name']} {$user_data['last_name']}"?></h2>
                        <span class="text-xs text-black"><?= $user_level === 'admin' ? 'Admin' : $user_data['position'];?></span>
                    </div>
                </div>


                <!-- Menus -->
                 <div class="mt-12 w-full">
                    <span class="text-xs text-black">Menu</span>
                    <div class="mt-4 flex flex-col gap-8">
                        <div class="flex flex-row items-center gap-3 tab-menu hover:cursor-pointer transition-all duration-[300ms] ease-in-out active-tab">
                            <img class = "object-cover aspect-[1/1] w-8 h-8" src="<?= get_template_directory_uri()?>/assets/images/img-wireframe.png" alt="" srcset="">
                            <h2 class="text-base text-black">Dashboard</h2>
                        </div>


                        <?php
                            if($user_level == 'admin'){ ?>
                                <div class="flex flex-row items-center gap-3 tab-menu hover:cursor-pointer transition-all duration-[300ms] ease-in-out">
                                    <img class = "object-cover aspect-[1/1] w-8 h-8" src="<?= get_template_directory_uri()?>/assets/images/img-wireframe.png" alt="" srcset="">
                                    <h2 class="text-base text-black">Employees</h2>
                                </div>

                                <div class="flex flex-row items-center gap-3 tab-menu hover:cursor-pointer transition-all duration-[300ms] ease-in-out">
                                    <img class = "object-cover aspect-[1/1] w-8 h-8" src="<?= get_template_directory_uri()?>/assets/images/img-wireframe.png" alt="" srcset="">
                                    <h2 class="text-base text-black">Manage Payroll</h2>
                                </div>   
                        <?php    }else{ ?>
                            <div class="flex flex-row items-center gap-3 tab-menu hover:cursor-pointer transition-all duration-[300ms] ease-in-out">
                                <img class = "object-cover aspect-[1/1] w-8 h-8" src="<?= get_template_directory_uri()?>/assets/images/img-wireframe.png" alt="" srcset="">
                                <h2 class="text-base text-black">Payslip</h2>
                            </div>
                        <?php }
                        ?>
                        

                        
                    </div>
                 </div>


                 <div class="mt-24 w-full">
                    <span class="text-xs text-black">Account</span>
                    <div class="mt-4 flex flex-col gap-8">
                        <div class="flex flex-row items-center gap-3 tab-menu hover:cursor-pointer transition-all duration-[300ms] ease-in-out">
                            <img class = "object-cover aspect-[1/1] w-8 h-8" src="<?= get_template_directory_uri()?>/assets/images/img-wireframe.png" alt="" srcset="">
                            <h2 class="text-base text-black">Profile</h2>
                        </div>
                        
                    </div>
                 </div>
            </div> <!-- End of Menu -->
            <button onclick="redirectTo('<?php echo $urlLogout; ?>');" class = "bg-red text-white py-2 px-6 text-md flex items-center gap-2 justify-center w-fit">
                <img class = "object-cover aspect-[1/1] w-6 h-6 invert filter" src="<?= get_template_directory_uri()?>/assets/images/img-wireframe.png" alt="" srcset="">
                <h2 class="text-base">Logout</h2>
            </button>
        </div>

        <div class="col-span-10">
            
        </div>
    </div>
</main>