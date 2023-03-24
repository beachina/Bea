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
  <div class="container">
    <div class="row">
      <div class="col-md-6 m-auto border border-primary mt-3">


  <form action="insert.php" method="POST" enctype="multipart/form-data">
    
  <div class="mb-3">
      <!-- <label class="form-label">Example label</label>
      <input type="text" class="form-control" placeholder="Example input placeholder"> -->
      <p class="text-center fw-bold fs-3 text-info">Product Details</p>
  </div>
  <div class="mb-3">
      <label class="form-label">Product Name: </label>
      <input type="text" name="Pname" class="form-control" placeholder="Enter Product Name">
  </div>
  <div class="mb-3">
      <label class="form-label">Product Price: </label>
      <input type="text" name="Pprice" class="form-control" placeholder="Enter Product Price">
  </div>
  <div class="mb-3">
      <label class="form-label">Add Product Image: </label>
      <input type="file" name="Pimage" class="form-control">
  </div>
  <div class="mb-3">
      <label class="form-label">Select Page Category </label>
      <!-- <input type="text" class="form-control" placeholder="Enter Product Price"> -->
      <select Id="" class="form-select" name="Pages">
        <option value="Home">Home</option>
        <option value="Men">Men</option>
        <option value="Accessories">Accessories</option> 
        <option value="Women">Women</option>
      </select>
  </div>
  <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>
  
  </form>
  </div>
</div>
</div>

  <!-- Fetch Data -->
  <div class="container"> 
    <div class="row">
      <div class="col-md-10 m-auto">

<table class="table border border-primary table-hover border my-5">
<thead class="bg-primary text-white fs-5 font-monospace text-center">
    <th>Id</th>
    <th>Name</th>
    <th>Price</th>
    <th>Image</th>
    <th>Category</th>
    <th>Delete</th>
    <th>Update</th>
</thead>

<tbody class="text-center"> 
  <?php
  include 'Config.php';
  $Record = mysqli_query($con, " SELECT * FROM `products`");

    while($row = mysqli_fetch_array($Record)) 
    echo"

    <tr>
    <td>$row[Id]</td>
    <td>$row[PName]</td>
    <td>$row[PPrice]</td>
    <td><img src='$row[PImage]' height= '90px' width = '200px'> </td>
    <td>$row[PCategory]</td>
    <td><a href='delete.php? ID=$row[Id]' class='btn btn-danger'>Delete</a></td>
    <td><a href='update.php? ID=$row[Id]' class='btn btn-warning'>Update</a></td>
   

    
    </tr>
    ";

  ?>
</tbody>

</table>

</div>
</div>
</div>
  
</body>
</html>