<?php
require_once('../includes/connect.php');
require_once('../functions/common_function.php');
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <!-- Bootstrap 5.3 CSS JS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <!-- font awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
</head>
<style>
        body{
            overflow-x: hidden;
        }
        </style>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">
            User Login
        </h2>
        <div class="row d-flex align-items-center justify-content-center mt-5">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post">
                    <div class="form-outline mb-4">
                        <label for="user_name" class="form-label">Username</label>
                        <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Eneter your username" required="required">
                    </div>

                  

                    <div class="form-outline mb-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Eneter your password" required="required">
                    </div>

                    

                   


                    <div class="mt-4 pt-2">
                        <input type="submit" value="Login" class="bg-info py-2 px-3 border-0" name="user_login">
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="user_registration.php" class="text-danger"> Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['user_login'])){
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    
    $query = "select * from `user_table` where username = '$user_name'";
    $result = mysqli_query($con, $query);
    $row_count = mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);
    $user_ip = getIPAddress();
    //cart item
    $query_cart = "select * from `cart_detials` where ip_address = '$user_ip'";
    $select_query = mysqli_query($con,$query_cart);
    $row_count_cart = mysqli_num_rows($select_query);

    if($row_count>0){
        $_SESSION['user_name'] = $user_name;
        
        if(password_verify($user_password,$row_data['user_password'])){
           
            //echo "<script>alert('Login successful')</script>";
            if($row_count==1 and $row_count_cart==0){
                $_SESSION['user_name'] = $user_name;
                echo "<script>alert('Login successful')</script>";
                echo "<script>window.open('profile.php','_self')</script>";
    
        }else{
            $_SESSION['user_name'] = $user_name;
            echo "<script>alert('Login successful')</script>";
            echo "<script>window.open('payment.php','_self')</script>";
           
        }
    } else {
        echo "<script>alert('Invalid username or password')</script>";
    }
} else {
    echo "<script>alert('Invalid username or password')</script>";
}
} 
?>
