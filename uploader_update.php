<?php

@include 'config.php';

$name = $_GET['edit'];

if(isset($_POST['update_product'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_price = $_POST['product_price'];
   $product_type = $_POST['product_type'];
   $product_description = $_POST['product_description'];
   $product_image = $_FILES['product_image']['name'];
   $product_id = $_POST['product_id'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_type) || empty($product_description)){
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE products SET name='$product_name', price='$product_price', type='$product_type', description='$product_description', image='$product_image'  WHERE name = '$product_name'";
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         header('location:uploader.php');
      }else{
         $$message[] = 'please fill out all!'; 
      }

   }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="uploader.css">
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-product-form-container centered">

   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM products WHERE name = '$name'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   <div class="tot">
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the product</h3>
      <input type="text" class="box" name="product_name" value="<?php echo $row['name']; ?>" placeholder="enter the product name">
      <input type="number" min="0" class="box" name="product_price" value="<?php echo $row['price']; ?>" placeholder="enter the product price">
      <input type="text" class="box" name="product_type" value="<?php echo $row['type']; ?>" placeholder="enter the product type">
      <input type="text" class="box" name="product_description" value="<?php echo $row['description']; ?>" placeholder="enter the product description">
      <input type="file" class="box" name="product_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="number" class="box" name="product_id" value="<?php echo $row['id']; ?>" placeholder="enter the product id">
      <input type="submit" value="update product" name="update_product" class="btn">
      <a href="uploader.php" class="btn">go back!</a>
   </form>
   <div>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>