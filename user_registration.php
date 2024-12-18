<?php
require_once('../includes/connect.php');
require_once('../functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- Bootstrap 5.3 CSS JS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <!-- font awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">
            New User Registration
        </h2>
        <div class="row d-flex align-items-center justify-content-center ">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-outline mb-4">
                        <label for="user_name" class="form-label">User Name</label>
                        <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Eneter your username" required="required">
                    </div>

                    <div class="form-outline mb-4">
                        <label for="user_email" class="form-label">Email</label>
                        <input type="text" name="user_email" id="user_email" class="form-control" placeholder="Eneter your email" required="required">
                    </div>

                    <div class="form-outline mb-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Eneter your password" required="required">
                    </div>

                    <div class="form-outline mb-4">
                        <label for="confirm_user_password" class="form-label">Confirm Password</label>
                        <input type="password" name="confirm_user_password" id="user_password" class="form-control" placeholder="Confirm password" required="required">
                    </div>

                    <div class="form-outline mb-4">
                        <label for="user_address" class="form-label">Address</label>
                        <input type="text" name="user_address" id="user_address" class="form-control" placeholder="Eneter your address" required="required">
                    </div>

                    <div class="form-outline mb-4">
                        <label for="user_contact" class="form-label">Contact</label>
                        <input type="text" name="user_contact" id="user_contact" class="form-control" placeholder="Eneter your mobile number" required="required">
                    </div>

                    <div class="mt-4 pt-2">
                        <input type="submit" value="Register" class="bg-info py-2 px-3 border-0" name="user_register">
                        <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="user_login.php" class="text-danger"> Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['user_register'])){
    $username = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $hash_password = password_hash($user_password, PASSWORD_DEFAULT);
    $confirm_user_password = $_POST['confirm_user_password'];
    $user_address = $_POST['user_address'];
    $user_mobile = $_POST['user_contact'];
    $user_ip=getIPAddress();

    //select query
    $select_query = "select * from `user_table` where username='$username' or user_email='$user_email'";
    $result=mysqli_query($con, $select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
        echo "<script>alert('User and Email Already Exist')</script>";
    }
    else if($user_password!=$confirm_user_password){
        echo "<script>alert('Password and Confirm Password Not Match')</script>";
    }
    else{
    //insert query
    $insert_query = "insert into `user_table` (username, user_email, user_password,user_ip, user_address, user_mobile) VALUES ( '$username', '$user_email', '$hash_password','$user_ip', '$user_address', '$user_mobile')";
    $sql_execute = mysqli_query($con, $insert_query);
    }

    //selecting cart items
    $select_cart = "select * from `cart_detials` where ip_address='$user_ip'";
    $result_cart=mysqli_query($con, $select_cart);
    $rows_count_cart=mysqli_num_rows($result_cart);
    if($rows_count_cart>0){
        $_SESSION['username']=$username;
        echo "<script>alert('You have items in your cart')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
    }
    else{
        echo "<script>window.open('../index.php','_self')</script>";

    }
}

?>