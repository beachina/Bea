<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Homepage</title>

    <!-- Boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/08886830b2.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<?php
session_start();
if(!$_SESSION['admin']){
    header("location:form/login.php");
}


?>


<body>

    <nav class="navbar navbar-light bg-dark shadow">
    <div class="container-fluid text-white">
        <a class="navbar-brand text-white"><h1>BCS</h1></a>
        <span>
            <i class="fa-solid fa-user-shield"></i>
                Hello, <?php echo $_SESSION['admin']; ?> |
            <i class="fa-solid fa-right-from-bracket"></i>
            <a href="form/login.php
            " class="text-decoration-none text-white">Logout</a> |
            <a href="../user/form/login.php
            " class="text-decoration-none text-white">User Panel</a>

        </span>
    </div>
    </nav>

    <div class="">
        <h2 class="text-center">Dashboard</h2>
    </div>
    
    <!-- Basic Card -->
    <div class="col-md-8 bg-primary text-center m-auto">
        <a href="product/index.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Add Post</a>
        <a href="user.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Users</a>
    </div>


    
</body>
</html>
