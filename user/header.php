<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/08886830b2.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>

<?php
session_start();
$count = 0;
if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']); 

}





?>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid font-monospace">
            <a class="navbar-brand pb-2">
                <img src="logo.png" alt="">
            </a>
         
            <div class="d-flex">
                <a href="index.php" class="text-body text-decoration-none pe-2"><i class="fas fa-home"></i> Home</a>
                <a href="viewCart.php" class="text-body text-decoration-none pe-2"><i class="fas fa-shopping-cart"></i> Cart (<?php echo $count ?>) |</a>
                <span class="text-body pe-2">
                    <i class="fas fa-user-shield"></i> Hello, 
                    <?php
                    if(isset($_SESSION['user'])){
                        echo $_SESSION['user'];
                        echo"
                        | <a href='form/logout.php' class='text-body text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i> Logout</a> |
                        ";
                    }
                    else{
                        echo"
                        | <a href='form/login.php' class='text-body text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i> Login</a> |
                        ";

                    }




                    ?> 
                  <a href="../admin/BeaClothingShop.php" class="text-body text-decoration-none pe-2">Admin</a>

                </span>
    </nav>
            </div>

            <div class="bg-primary sticky-top font-monospace">
                <ul class="list-unstyled d-flex justify-content-center">
                    <li><a href="Accessories.php" class="text-decoration-none text-white fw-bold fs-4 px-5">ACCESSORIES</a></li>
                    <li><a href="Men.php" class="text-decoration-none text-white fw-bold fs-4 px-5">MEN</a></li>
                    <li><a href="Women.php" class="text-decoration-none text-white fw-bold fs-4 px-5">WOMEN</a></li> 
                </ul>
            </div>





    
</body>
</html>