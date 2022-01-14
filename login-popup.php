<div class="login-form-container">

    <div id="close-btn-login" class="fas fa-times"></div>

    <form action="pure-php/login.php" method="post">
        <h3>Log in</h3>
        <?php if(isset($_GET['error'])){ ?>
            <p class="error"> <?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label for='uname'></label>
        <input type="text" name="uname" class="box" placeholder="Enter your username" required><br>
        <label for='passwrd'></label>
        <input type="password" name="passwrd" class="box" placeholder="Enter your password" required><br>
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> Remember me</labesl>
        </div>
        <input type="submit" value="Log In" class="btn">
        <div class="new-account">
            <p>Don't have an account?  <a href="#">Create one</a></p>
        </div>
    </form>

</div>