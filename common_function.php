<?php

//include connect file
//require_once('./includes/connect.php');

//getting products
function getproducts(){
    global $con;
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
    $select_query="Select * from `products` order by rand() LIMIT 0,3";
  $result_query= mysqli_query($con,$select_query);
  //$row=mysqli_fetch_assoc($result_query);
  //echo $row['product_title'];
  while($row=mysqli_fetch_assoc($result_query)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $product_keywords=$row['product_keywords'];
    $product_image1=$row['product_image1'];
    $product_price=$row['product_price'];
    $brand_id=$row['brand_id'];
    $category_id=$row['category_id'];
    echo "<div class='col-md-4 mb-2'>
            <div class='card'>
            <img src='./admin_area/product_images/$product_image1' class='card-img-top' style ='width:100%;height:200px;object-fit:contain;' alt='$product_title''>
              <div class='card-body'>
              <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <p class='card-text'>Price: $product_price/-</p>
              <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>                        
              </div>
            </div>
          </div>";

  }
}
}
}

//getting unique category
function get_unique_categories(){
    global $con;
    if(isset($_GET['category'])){
        $category_id=$_GET['category'];   
    $select_query="Select * from `products` where category_id=$category_id";
  $result_query= mysqli_query($con,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows==0){
    echo "<h2 class='text-center text-danger'>No stock for this category</h2>";
  }
  //$row=mysqli_fetch_assoc($result_query);
  //echo $row['product_title'];
  while($row=mysqli_fetch_assoc($result_query)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $product_keywords=$row['product_keywords'];
    $product_image1=$row['product_image1'];
    $product_price=$row['product_price'];
    $brand_id=$row['brand_id'];
    $category_id=$row['category_id'];
    echo "<div class='col-md-4 mb-2'>
            <div class='card'>
            <img src='./admin_area/product_images/$product_image1' class='card-img-top' style ='width:100%;height:200px;object-fit:contain;' alt='$product_title''>
              <div class='card-body'>
              <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <p class='card-text'>Price: $product_price/-</p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>       
               
              </div>
            </div>
          </div>";

  }
}
}

//getting unique brands
function get_unique_brands(){
    global $con;
    if(isset($_GET['brand'])){
        $brand_id=$_GET['brand'];   
    $select_query="Select * from `products` where brand_id=$brand_id";
  $result_query= mysqli_query($con,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows==0){
    echo "<h2 class='text-center text-danger'>This brand is not available for service</h2>";
  }
  //$row=mysqli_fetch_assoc($result_query);
  //echo $row['product_title'];
  while($row=mysqli_fetch_assoc($result_query)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $product_keywords=$row['product_keywords'];
    $product_image1=$row['product_image1'];
    $product_price=$row['product_price'];
    $brand_id=$row['brand_id'];
    $category_id=$row['category_id'];
    echo "<div class='col-md-4 mb-2'>
            <div class='card'>
            <img src='./admin_area/product_images/$product_image1' class='card-img-top' style ='width:100%;height:200px;object-fit:contain;' alt='$product_title''>
              <div class='card-body'>
              <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <p class='card-text'>Price: $product_price/-</p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>          
                
              </div>
            </div>
          </div>";

  }
}
}

//display brands 
function getbrands(){
    global $con;
    $select_brands="Select * from `brands`";
                $result_brands=mysqli_query($con,$select_brands);
                //echo $row_data['brand_title'];
                while($row_data=mysqli_fetch_assoc($result_brands)){
                  $brand_title=$row_data['brand_title'];
                  $brand_id=$row_data['brand_id'];
                  echo "<li class='nav-item'>
                <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
                </li>";
                }
}

//display category
function getcategories(){
    global $con;
    $select_categories="Select * from `categories`";
                $result_categories=mysqli_query($con,$select_categories);
                //echo $row_data['brand_title'];
                while($row_data=mysqli_fetch_assoc($result_categories)){
                  $category_title=$row_data['category_title'];
                  $category_id=$row_data['category_id'];
                  echo "<li class='nav-item'>
            <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
           </li>";
                }
}

//display all products
function get_all_products(){
  global $con;
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
    $select_query="Select * from `products`";
  $result_query= mysqli_query($con,$select_query);
  //$row=mysqli_fetch_assoc($result_query);
  //echo $row['product_title'];
  while($row=mysqli_fetch_assoc($result_query)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $product_keywords=$row['product_keywords'];
    $product_image1=$row['product_image1'];
    $product_price=$row['product_price'];
    $brand_id=$row['brand_id'];
    $category_id=$row['category_id'];
    echo "<div class='col-md-4 mb-2'>
            <div class='card'>
            <img src='./admin_area/product_images/$product_image1' class='card-img-top' style ='width:100%;height:200px;object-fit:contain;' alt='$product_title''>
              <div class='card-body'>
              <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <p class='card-text'>Price: $product_price/-</p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                
              </div>
            </div>
          </div>";

  }
}
}
}

//seraching products

function search_product() {
  global $con;
  if(isset($_GET['search_data_product'])){
  $search_data_value = $_GET['search_data'];
  $search_query = "Select * from `products` where product_keywords like '%$search_data_value%' ";
$result_query= mysqli_query($con,$search_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
  echo "<h2 class='text-center text-danger'>No result match. No products found on this category</h2>";
}
while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_keywords=$row['product_keywords'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];
  $brand_id=$row['brand_id'];
  $category_id=$row['category_id'];
  echo "<div class='col-md-4 mb-2'>
          <div class='card'>
          <img src='./admin_area/product_images/$product_image1' class='card-img-top' style ='width:100%;height:200px;object-fit:contain;' alt='$product_title''>
            <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
              <p class='card-text'>$product_description</p>
              <p class='card-text'>Price: $product_price/-</p>
              <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>        
            </div>
          </div>
        </div>";

}
}
}
 
//get ip address function
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  


//cart function 
function cart(){
 if(isset($_GET['add_to_cart'])){
  global $con;
  $ip=getIPAddress();
  $get_product_id=$_GET['add_to_cart'];
  $select_query="Select * from `cart_detials` where ip_address='$ip' AND product_id='$get_product_id'";
  $result_query=mysqli_query($con,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows>0){
    echo "<script>alert('Product already added to cart')</script>";
    echo "<script>window.open('index.php','_self')</script>";
 }
 else {
  $insert_query="Insert into `cart_detials` (product_id,ip_address,quantity) values ('$get_product_id','$ip',0)";
  $result_query=mysqli_query($con,$insert_query);
  echo "<script>alert('Product added to cart')</script>";
  echo "<script>window.open('index.php','_self')</script>";
 }
}
}

//getting total items in cart
function cart_items(){
  if(isset($_GET['add_to_cart'])){
    global $con;
    $ip=getIPAddress();
    $select_query="Select * from `cart_detials` where ip_address='$ip'";
    $result_query=mysqli_query($con,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
  }
  else {
    global $con;
    $ip=getIPAddress();
    $select_query="Select * from `cart_detials` where ip_address='$ip'";
    $result_query=mysqli_query($con,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
   }
   echo $count_cart_items;
  }

//getting total price of cart
function total_cart_price(){
  global $con;  
  $ip=getIPAddress();
  $total_price=0;
  $cart_query="Select * from `cart_detials` where ip_address='$ip'";
  $result_query=mysqli_query($con,$cart_query);
  while($row=mysqli_fetch_array($result_query)){
    $product_id=$row['product_id'];
    $product_query="Select * from `products` where product_id='$product_id'";
    $result_product_query=mysqli_query($con,$product_query);
    while($row_product_price=mysqli_fetch_array($result_product_query)){
      $product_price=array($row_product_price['product_price']);
      $product_values=array_sum($product_price);
      $total_price+=$product_values;
    }
  }
  echo $total_price;
}
?>
