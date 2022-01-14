<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online knjižara</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<?php include("header.php");?>

<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
</nav>

<?php if(!isset($_SESSION['username'])){include("login-popup.php");
} ?>
<?php include("register-popup.php"); ?>

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>Do 80% popusta</h3>
            <p>U vrijeme Božića obradujte svoje bližnje s njihovim omiljenim naslovom i upotpunite njihovu kućnu biblioteku!</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide"><img src="image/book-1.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-2.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-3.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-4.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-5.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-6.png" alt=""></a>
            </div>
            <img src="image/stand.png" class="stand" alt="">
        </div>

    </div>

</section>

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <div class="content">
            <h3>besplatna dostava</h3>
            <p>iznad 300 kn</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
            <h3>sigurna kupnja</h3>
            <p>100% garantirano sigurno</p>
        </div>
    </div>  

    <div class="icons">
        <i class="fas fa-gift"></i>
        <div class="content">
            <h3>darovna kartica</h3>
            <p>savršeni poklon za bližnje</p>
        </div>
    </div>

</section>

<?php include("featured.php"); ?>

<?php include("deal.php");?>

<?php include("arrivals.php");?>

<?php include("reviews.php");?>

<?php include("footer.php");?>
