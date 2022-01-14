<?php
session_start();

 $username = $_SESSION["username"];
 $id=$_SESSION["id"];

 if(isset($id)&& isset($username)){
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profil korisnika</title>
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <?php include("header.php");?>

    <div class="container">
        <div class="main">
            <div class="row">
                <div class="col-md-4 mt-1">
                    <div class="card text-center sidebar">
                        <div class="card-body">
                            <img src="image/user.png" class="rounded-circle" width="150">
                            <<div class="mt-3">
                            <h1>Welcome <?php echo $_SESSION['username']; ?>!</h1>
                            <h1>This is your user page.</h1>
                            <a href="index.php">Home page</a>
                            <a href="pure-php/logout.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-1">
                    <div class="card mb-3 content">
                        <h1 class="m-3 pt-3">About you: </h1>
                        <div class="card">
                            <div class="row">
                                <div class="col-md-3">
                                        <h3>Full Name</h3>
                                </div>
                                <div class="col-md-9 text-dark">
                                    <?php echo $_SESSION['name']; ?>  <?php echo $_SESSION['surname']; ?>
                                </div>                                              
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h3>Email</h3>
                                </div>
                                <div class="col-md-9 text-dark">
                                    <?php echo $_SESSION['email']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <nav class="bottom-navbar">
        <a href="index.php" class="fas fa-home"></a>
        <a href="index.php#featured" class="fas fa-list"></a>
        <a href="index.php#arrivals" class="fas fa-tags"></a>
        <a href="index.php#reviews" class="fas fa-comments"></a>
        </nav>
        
    <?php include("footer.php");?>  
    <?php
 }
 else{
     header("Location: index.php");
     exit();
 }?>





