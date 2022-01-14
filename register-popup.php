<div class="register-container">

    <div id="close-btn-register" class="fas fa-times"></div>
    <form action="pure-php/register.php" method="post">
        <h3>Sign up</h3>
        <label for ="username"></label>
        <input type="text" name="username" class="box" placeholder="Enter your username" id="username" required>
        <label for ="name"></label>
        <input type="text" name="name" class="box" placeholder="Enter your name" id="name" required>
        <label for ="surname"></label>
        <input type="text" name="surname" class="box" placeholder="Enter your surname" id="surname" required>
        <label for ="password"></label>
        <input type="password" name="password" class="box" placeholder="Enter your password" id="password" required>
        <label for ="email"></label>
        <input type="email" name="email" class="box" placeholder="Enter your email" id="email" required>
        <input type="submit" value="Register" class="btn">
        <div class="old-user">
            <p>Already have an account? <a href="#">Log in</a></p>
        </div>
    </form>
</div>