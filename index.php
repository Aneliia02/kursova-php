<?php
require_once('../includes/connect.php');
require_once('../functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    
       
       
    .footer{
        position: absolute;
        bottom: 0;
    }
    * {
        box-sizing: border-box;
       
    }
     .logo {
        width: 7%;
        height: 7%;
     }
    .admin_image {
        width: 100px;
        object-fit: contain;
    }
    body {
        overflow-x:hidden;
    }
    </style>
</head>
<body>
    <!-- navbar -->
     <div class="container-fluid p-0">
        <!-- first -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
            <i class="fa-brands fa-opencart fa-2xl" class="logo"></i>
            <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="nav-link">Welcome Guest</a>
                </li>    
            </ul>
            </nav>
            </div>
        </nav>
        <!-- second-->
         <div class="bg-light">
            <h3 class="text-center p-2">Manage Derails</h3>
         </div>
         <!--third--> 
         <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex aligh-items-center ">
                <div class="p-3">
                    <a href="#"><img src="../images/pineapplejuice.jpg" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>

                <div class="button text-center">
                    <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                    <button><a href="index.php?view_products" class="nav-link text-light bg-info my-1">View Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                </div>
            </div>
         </div>

         <!-- fourth -->
          <div class="container my-3">
            <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');
            }
            if(isset($_GET['view_products'])){
                include('view_products.php');
            }
            if(isset($_GET['edit_products'])){
                include('edit_products.php');
            }
            ?>
          </div>


            <!-- footer-->
           <!--  <div class="bg-info p-3 text-center footer">
                <p>© 2024 All rights reserved</p>
            </div> -->
     </div>
</body>
</html>