<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>

  <!-- Boostrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- <script src="https://kit.fontawesome.com/08886830b2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>
<body>
    
<?php

$id = $_GET['ID'];

include 'Config.php';
$Record = mysqli_query($con, " SELECT * FROM `products` WHERE Id = '$id' ");
$data = mysqli_fetch_array($Record);


?>



  <div class="container">
    <div class="row">
      <div class="col-md-6 m-auto border border-primary mt-3">


  <form action="update.php" method="POST" enctype="multipart/form-data">
    
  <div class="mb-3">
      <!-- <label class="form-label">Example label</label>
      <input type="text" class="form-control" placeholder="Example input placeholder"> -->
      <p class="text-center fw-bold fs-3 text-info">Product Update</p>
  </div>
  <div class="mb-3">
      <label class="form-label">Product Name: </label>
      <input type="text" value="<?php echo $data['PName'] ?>" name="Pname" class="form-control" placeholder="Enter Product Name">
  </div>
  <div class="mb-3">
      <label class="form-label">Product Price: </label>
      <input type="text" value="<?php echo $data['PPrice'] ?>" name="Pprice" class="form-control" placeholder="Enter Product Price">
  </div>
  <div class="mb-3">
      <label class="form-label">Add Product Image: </label>
      <input type="file" name="Pimage" class="form-control"><br>
      <img src="<?php echo $data['PImage'] ?>" alt="" style="height: 100px;">
  </div>
  <div class="mb-3">
      <label class="form-label">Select Page Category </label>
      <!-- <input type="text" class="form-control" placeholder="Enter Product Price"> -->
      <select id="" class="form-select" name="Pages">
        <option value="Home">Home</option>
        <option value="Men">Men</option>
        <option value="Accessories">Accessories</option> 
        <option value="Women">Women</option>
      </select>
  </div>
  <input type="hidden" name="id" value="<?php echo $data['Id'] ?>">
  <button name="update" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Update</button>
  
  </form>
  </div>
</div>
</div>
    <!-- php update code  -->
    <?php
    if(isset($_POST['update'])){
            $id = $_POST['id'];
        $product_name = $_POST['Pname'];
        $product_price = $_POST['Pprice'];
        $product_image = $_FILES['Pimage'];
        $image_loc = $_FILES['Pimage']['tmp_name'];
        $image_name = $_FILES['Pimage']['name'];
            $img_des = "Uploadimage/".$image_name;
        move_uploaded_file($image_loc, "Uploadimage/" .$image_name);
    
        $product_category = $_POST['Pages'];

        include 'Config.php';
        mysqli_query($con, "UPDATE `products` SET 
        `PName`='$product_name',`PPrice`='$product_price',`PImage`='$img_des',`PCategory`='$product_category' WHERE id = $id");
        header("location:index.php");


         
    }

    ?>






  
</body>
</html>

