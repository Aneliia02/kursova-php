<h3 class="text-center text-success">All Products</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
    <tr>
        <th>Product ID</th>
        <th>Product Title</th>
        <th>Product Image</th>
        <th>Product Price</th>
       
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody class="bg-secondry text-light">
        <?php
        $get_products="select * from `products`";
        $result=mysqli_query($con,$get_products);
       // $status=$row['product_status'];
        $number=0; 
        while($row=mysqli_fetch_assoc($result)){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_image1=$row['product_image1'];
            $product_price=$row['product_price'];
            $product_status=$row['product_status'];
            $number++; ?>
            <tr class='text-center'>
            <td> <?php echo $number;?></td>
            <td><?php echo $product_title; ?></td>
            <td><img src='product_images/<?php echo $product_image1;?>' alt='<?php $product_image1; ?>' style='width: 50px; height: 50px;'></td>
            <td><?php $product_price?></td>
            <td><a href='index.php?edit_product=$product_id' class='text-dark'><i class='fa-solid fa-pen-to-square'></i></a></td>
            <td><a href='index.php?delete_product=$product_id' class='text-dark'><i class='fa-solid fa-trash'></i></a></td>
            </tr>
        <?php } ?>
        
        
    
    </tbody>
</table>