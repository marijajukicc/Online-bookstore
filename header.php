

<body>

<header class="header">
<div class="header-1">

    <a href="#" class="logo"> <i class="fas fa-book"></i> Knjige </a>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="Pretraga..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="icons">
        <div id="search-btn" class="fas fa-search"></div>
        <div id="login-btn" class="fas fa-user"></div>
        <a href="home.php"><?php if(!isset($_SESSION)){ 
            session_start(); 
        } 
        if(isset($_SESSION['username'])){
        echo "user:  ";
        echo  $_SESSION['username'];
        }else{
            echo "";
        }
        ?></a>
    </div>

</div>

<div class="header-2">
    <nav class="navbar">
        <a href="index.php#home">početna</a>
        <a href="index.php#featured">izabrani proizvodi</a>
        <a href="index.php#arrivals">novo</a>
        <a href="index.php#reviews">recenzije</a>
        
    </nav>
</div>

</header>