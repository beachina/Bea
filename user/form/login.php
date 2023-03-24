<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace border border-info">
                
            <p class="text-info text-center fs-3 fw-bold my-3">User Login</p>
                <form action="login1.php" method="POST">
                    <div class="mb-3">
                        <label for="">User Name:</label>
                        <input type="text" name="name" placeholder="Enter Name" class="form-control" name="" id="">
                    </div>
                    <div class="mb-3">
                        <label for="">Password:</label>
                        <input type="password" name="password" placeholder="Enter Password" class="form-control" name="" id="">
                    </div>
                    <div class="mb-3">
                        <button class="w-100 bg-danger fs-4 text-white">LOGIN</button>
                    </div>
                    <div class="mb-3">
                        <button name="submit" class="w-100 bg-warning fs-4 text-white"><a href="register.php" class="text-decoration-none text-white">REGISTER</a> </button>
                    </div>
                </form>
            </div>
        </div>
    </div>















    
</body>
</html>