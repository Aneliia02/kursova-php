<?php 
require_once('../includes/connect.php');
require_once('../functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>

    <!-- Bootstrap 5.3 CSS JS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container">
        <h2 class="text-center text-info">Payment options</h2>
        <div class="row d-flex align-items-center justify-content-center my-5">
            <div class="col-md-6">
             <img class="btn btn-info" src="../images/payment.png" alt="">
            </div>
            <div class="col-md-6">
            <a href="order.php"><h2 class="text-center">Pay offline</h2></a>
            </div>
        </div>
    </div>
</body>
</html>