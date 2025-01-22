<?php
include_once(get_template_directory() . '/controllers/connection.php');
    if(isset($_SESSION['user_id'])){
        // echo $_SESSION['user_id'];
    }
    $urlLogout = get_template_directory_uri().'/controllers/logout.php/';

    $fetch_curr_user = "SELECT * FROM tbl_employee WHERE user_id = '{$_SESSION['user_id']}'";
    $fetch_curr_user_result = mysqli_query($con, $fetch_curr_user);

    if($fetch_curr_user_result && mysqli_num_rows($fetch_curr_user_result) > 0){
        $user_data = mysqli_fetch_assoc($fetch_curr_user_result);
        $user_level = $user_data['user_level'];
    }else{

    }
?>



<main class="w-full h-full">
    <div class="grid grid-cols-12 h-full">
        <div class="md:col-span-3 2xl:col-span-2 border-r-[1px] flex flex-col justify-between min-h-[100vh] px-6 py-8">
            <div class="w-full flex flex-col items-start justify-center">
                <!-- Company Section -->
                <div class="company-section flex items-center gap-3">
                    <img class = "object-cover aspect-[1/1] w-10 h-10" src="<?= get_template_directory_uri()?>/assets/images/img-wireframe.png" alt="" srcset="">
                    <h2 class="text-blue text-xl">Company Name</h2>
                </div>

                <!-- Current User -->
                


                <!-- Menus -->
                 <div class="mt-12 w-full">
                    <span class="text-xs text-black">Menu</span>
                    <div class="mt-6 flex flex-col gap-8">
                        <div class="flex flex-row items-center gap-4 tab-menu hover:cursor-pointer transition-all duration-[300ms] ease-in-out active-tab">
                            <i class="bi bi-house text-black text-2xl flex items-center  transition-all duration-[300ms] ease-in-out"></i>
                            <h2 class="text-base text-black">Dashboard</h2>
                        </div>


                        <?php
                            if($user_level == 'admin'){ ?>
                                <div class="w-full flex flex-col tab-menu hover:cursor-pointer transition-all duration-[300ms] ease-in-out">
                                    <div class="flex flex-row justify-between items-center">
                                        <div class="w-fit flex item-center gap-4">
                                            <i class="bi bi-people text-black text-2xl flex items-center  transition-all duration-[300ms] ease-in-out"></i>
                                            <h2 class="text-base text-black">Employees</h2>
                                        </div>
                                        <i class="bi bi-chevron-down text-black text-lg flex items-center relative right-2 vertical transition-all duration-[300ms] ease-in-out"></i>
                                    </div>

                                    <div class="dropdown-body pt-4 hidden">
                                        <div class="w-full flex flex-col gap-2">
                                            <div class="sub-tab-menu w-fit flex item-center gap-4">
                                                <i class="bi bi-people text-black text-2xl flex items-center invisible"></i>
                                                <span class="text-sm text-black">Active Employees</span>
                                            </div>
                                            <div class="sub-tab-menu w-fit flex item-center gap-4">
                                                <i class="bi bi-people text-black text-2xl flex items-center invisible"></i>
                                                <span class="text-sm text-black">Manage Employees</span>
                                            </div>
                                            <div class="sub-tab-menu w-fit flex item-center gap-4">
                                                <i class="bi bi-people text-black text-2xl flex items-center invisible"></i>
                                                <span class="text-sm text-black">All Employees</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-row items-center gap-4 tab-menu hover:cursor-pointer transition-all duration-[300ms] ease-in-out">
                                    <i class="bi bi-wallet2 text-black text-2xl flex items-center  transition-all duration-[300ms] ease-in-out"></i>
                                    <h2 class="text-base text-black">Payroll</h2>
                                </div>   
                        <?php    }else{ ?>
                            <div class="flex flex-row items-center gap-4 tab-menu hover:cursor-pointer transition-all duration-[300ms] ease-in-out">
                                <i class="bi bi-file-earmark-spreadsheet text-black text-2xl flex items-center  transition-all duration-[300ms] ease-in-out"></i>
                                <h2 class="text-base text-black">Payslip</h2>
                            </div>
                        <?php }
                        ?>
                        

                        
                    </div>
                 </div>


                 <div class="mt-28 w-full">
                    <span class="text-xs text-black">Account</span>
                    <div class="flex gap-3 justify-start items-center mt-4 px-3 py-2 border w-full">
                        <img class = "object-cover aspect-[1/1] w-12 h-12" src="<?= get_template_directory_uri()?>/assets/images/img-wireframe.png" alt="" srcset="">
                        <div class="flex flex-col items-start justify-center">
                            <h2 class="text-base font-medium text-black"><?= "{$user_data['first_name']} {$user_data['last_name']}"?></h2>
                            <span class="text-xs text-black"><?= $user_level === 'admin' ? 'Admin' : $user_data['position'];?></span>
                        </div>
                    </div>
                 </div>
            </div> <!-- End of Menu -->
            <button onclick="redirectTo('<?php echo $urlLogout; ?>');" class = "text-black flex items-center gap-3 justify-center w-fit">
                <i class="bi bi-box-arrow-right text-black text-xl flex items-center"></i>
                <h2 class="text-base">Log out</h2>
            </button>
        </div>

        <div class="md:col-span-9 2xl:col-span-10">
            
        </div>
    </div>
</main>