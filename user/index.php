<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- Boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/08886830b2.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <?php
    include 'header.php';

    ?>
</head>
<body>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">

    <h1 class="text-body fw-bold font-monospace text-center my-3"> HOME</h1>
    <?php
    include 'Config.php';
    $Record = mysqli_query($con, "SELECT * FROM products");
       while($row=mysqli_fetch_array($Record)){
           $check_page = $row['PCategory'];
           if($check_page ==='Home'){


        echo"
        <div class='col-md-6 col-lg-4 m-auto mb-3'>
        <form action='Insertcart.php' method = 'POST'>

    <div class='card m-auto' style='width:18rem;'>
  <img class='card-img-top' src='../admin/product/$row[PImage]'>
  <div class='card-body text-center'>
    <h5 class='card-title text-info fs-4 fw-bold'>$row[PName]</h5>
    <p class='card-text text-dark fs-6 fw-bold'>";?>₱<?php echo number_format($row['PPrice'],2) ?><?php echo"</p>
    <input type='hidden' name = 'PName' value = '$row[PName]'>
    <input type='hidden' name = 'PPrice' value = '$row[PPrice]'>
    <input type='number' name = 'PQuantity' value = ' min='1' max = '20'' placeholder='Quantity'><br><br>
    <input type='submit' name = 'addCart' class='btn btn-warning text-dark w-100' value='Add to Cart'>


  </div>
</div>
</form>
</div>

";
}
}
?>
</div>
</div>
</div>

<?php
include 'footer.php';
?>
    
</body>
</html>