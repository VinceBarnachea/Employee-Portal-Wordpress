<?php
    include_once(get_template_directory() . '/controllers/connection.php');
    // if(isset($_SESSION['user_Id'])){
    //     $user_id = $_SESSION['user_Id'];

    // }
    
?>


<section class="login-page w-full h-screen flex justify-center items-center">
    <div class="login-form-container px-8 py-8 bg-white shadow-lg flex flex-col items-center justify-center">
        <div class="login-header flex flex-col items-center justify-center">
            <h1 class="text-3xl font-semibold text-black pb-2">Login</h1>
            <div class="text-md text-grray text-center">Welcome Back! Login to your account.</div>
        </div>

        <div class="login-form flex flex-col items-center justify-center pt-4">
            <form class = "w-full h-full flex flex-col justify-center items-center gap-4" action="" method="POST" autocomplete = "off">
                <div class="user-name-container relative w-full">
                    <label for="user_id" class="text-gray font-md">User Name:</label>
                    <input type="text" name="user_id" id="" class = "w-full py-2 px-4 bg-white">
                </div>
                <div class="user-name-container relative w-full">
                    <label for="user_pass" class="text-gray font-md">Password:</label>
                    <input type="password" name="user_pass" id="" class = "w-full py-2 px-4 bg-white">
                </div>
                <div id = "errorContainer">
					<label id = 'lblWrongCredentials'>.</label>
				</div>
                <div class="login-cta-btn relative w-full">
                    <input class="login-btn w-full bg-blue text-white py-2 mt-4" name ="btnLogin" type="submit" value = "Login"></input>
                    <button class="forgot-btn w-full bg-transparent text-blue py-2 underline">Forgot Password?</button>
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
                                $fetchUser = "SELECT * FROM tbl_user WHERE user_id = '$user_name';";
                                $fetchUserResult = mysqli_query($con,$fetchUser);
                                if($fetchUserResult && mysqli_num_rows($fetchUserResult) > 0){
                                    $user_data = mysqli_fetch_assoc($fetchUserResult);
                                    if($user_data['user_pass'] === $user_pass){
                                        echo '<script type = "text/javascript">
                                            window.location.href = "http://localhost/employee-portal/user-dashboard/";
                                            </script>	';
                                    } //If password is correct
                                    else{
                                        echo 'WRONG PASSWORD';
                                    }
                                } //If it has a result
                                else{
                                    echo 'WRONG EMAIL OR PASSWORD';
                                } //IF there is no result found
                            } //If Not Empty
                            else{
                                echo 'Enter username and Password';
                            }
                        } //If the Request Method is POST
                    } //If login btn is set

                } //If btnLogin Exist
            
            ?>
        </div>
    </div>
</section>

<script>
    function showError(){
  document.getElementById("lblWrongCredentials").style.color = "red";
   document.getElementById("lblWrongCredentials").innerHTML = "These credentials do not match our records.";
}

</script>