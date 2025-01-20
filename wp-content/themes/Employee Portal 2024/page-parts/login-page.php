<?php
    include_once(get_template_directory() . '/controllers/connection.php');
    $_SESSION['home_url'] = home_url();
    $urlAdmin = home_url().'/dashboard/';
    if(isset($_SESSION['user_id']))
    {
        echo 'SESSION START';
        $session_user_name = $_SESSION['user_id'];
   
        $query = "SELECT * FROM tbl_emp WHERE user_id = '$session_user_name';";
        $result = mysqli_query($con,$query);

        if($result && mysqli_num_rows($result) > 0 )
            {
                $intro_user = mysqli_fetch_assoc($result);
                if($intro_user['user_level']  === "admin")
                {
                    if(isset($_SESSION['user_id']))
                    {
            
                        echo '<script>
                                                redirectTo("'.$urlAdmin.'");
                                            </script>';
                     
                    }
                    
                }
                else
                    {
                        echo '<script>
                                                redirectTo("'.$urlAdmin.'");
                                            </script>';
                                     
                    }
            }
            else{
                echo 'NO RESULT FOUND';
            }
    }
    else{
        // NO SESSION
    }


    
?>


<section class="login-page w-full h-screen flex justify-center items-center">
    <div class="login-form-container px-8 py-8 bg-white shadow-lg flex flex-col items-center justify-center w-[90%] md:max-w-[27rem] md:w-full">
        <div class="w-full login-header flex flex-col items-center justify-center">
            <h1 class="text-3xl font-semibold text-black pb-2">Login</h1>
            <div class="text-md text-grray text-center">Welcome Back! Login to your account.</div>
        </div>

        <div class="w-full login-form flex flex-col items-center justify-center pt-4">
            <form class = "mb-0 w-full h-full flex flex-col justify-center items-center" action="" method="POST" autocomplete = "off">
                <div class="input-field-container relative w-full mt-6">
                    <label for="user_id" class="text-gray-500 text-sm md:text-base absolute top-[50%] translate-y-[-50%] left-[1rem] transition-all durattion-300 ease-in-out">User Name</label>
                    <input type="text" name="user_id" id="" class = "relative bg-transparent form-inputs w-full py-2 px-4 text-sm md:text-base border-[1px]">
                </div>
                <div class="input-field-container relative w-full mt-6">
                    <i class="bi bi-eye absolute top-[50%] translate-y-[-50%] right-[1rem] z-[2] hover:cursor-pointer"></i>
                    <i class="bi bi-eye-slash hidden absolute top-[50%] translate-y-[-50%] right-[1rem] z-[2] hover:cursor-pointer"></i>
                    <label for="user_pass" class="text-gray-500 text-sm md:text-base absolute top-[50%] translate-y-[-50%] left-[1rem] transition-all durattion-300 ease-in-out">Password</label>
                    <input type="password" name="user_pass" id="" class = "login-pass-input relative bg-transparent form-inputs w-full py-2 px-4 text-sm md:text-base border-[1px]">
                </div>
                
                <div class="error-container hidden relative w-full mt-2">
                        <h6 class="text-sm text-red font-semibold login-error-txt"></h6>
                </div>
                    
                <div class="login-cta-btn relative w-full mt-8">
                    <input class="login-btn w-full bg-blue text-white py-2" name ="btnLogin" type="submit" value = "Login"></input>
                    <button class="forgot-btn w-full bg-transparent text-blue py-2 underline hover:bg-transparent hover:text-blue mt-4">Forgot Password?</button>
                </div>
            </form>

            <?php
                if(array_key_exists('btnLogin', $_POST)) 
				{
                    if(isset($_POST['btnLogin'])){
                        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            // Fetch from the Form
                            $user_name = $_POST['user_id'];
                            $user_pass = $_POST['user_pass'];
                            $btnLogin = $_POST['btnLogin'];
                            if(!empty($user_name) && !empty($user_pass)){
                                $fetchUser = "SELECT * FROM tbl_emp WHERE user_id = '$user_name';";
                                $fetchUserResult = mysqli_query($con,$fetchUser);
                                if($fetchUserResult && mysqli_num_rows($fetchUserResult) > 0){
                                    $user_data = mysqli_fetch_assoc($fetchUserResult);
                                    if($user_data['user_pass'] === $user_pass){
                                        $_SESSION['user_id'] = $user_name;
                                        if($user_data['user_level'] === 'admin'){
                                            echo '<script>
                                                redirectTo("'.$urlAdmin.'");
                                            </script>';
                                            exit; // Ensure that no further code is executed after the redirect
                                        }
                                        else{
                    
                                           
                                            echo '<script>
                                                redirectTo("'.$urlAdmin.'");
                                            </script>';
                                            exit; // Ensure that no further code is executed after the redirect
                                        }
                                    } //If password is correct
                                    else{
                                        echo "<script>wrongPass();</script>";
                                    }
                                } //If it has a result
                                else{
                                    echo '<script>wrongPass();</script>';
                                } //IF there is no result found
                            } //If Not Empty
                            else{
                                echo "<script>noInput();</script>";
                            }
                        } //If the Request Method is POST
                    } //If login btn is set

                } //If btnLogin Exist
            
            ?>
        </div>
    </div>
</section>


