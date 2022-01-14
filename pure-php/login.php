<?php

session_start(); 
$host="localhost";
$user="JukicM";
$pasrd="PZI_JukicM1";
$name="JukicM";

$con=new mysqli($host,$user,$pasrd,$name);

if ($con->connect_errno) {
    echo "Failed to connect to MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
}

if (isset($_POST['uname']) && isset($_POST['passwrd'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
}
$uname=validate($_POST['uname']);
$pass=validate($_POST['passwrd']);

if(empty($uname)){
    header("Location: ../index.php?error=Username is required");
    exit();
}
else if(empty($pass)){
    header("Location: ../index.php?error=Password is required");
    exit();
}

$sql="SELECT * FROM users WHERE username='$uname'";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)==1){
    $row=mysqli_fetch_assoc($result);
    $passDB= $row['password'];
    if($row['username']===$uname && (password_verify($pass,$passDB)== "true")){
        echo "Logged in!";
        $_SESSION['username']=$row['username'];
        $_SESSION['name']=$row['name'];
        $_SESSION['surname']=$row['surname'];
        $_SESSION['email']=$row['email'];
        $_SESSION['id']=$row['id'];
        header("Location: ../index.php");
        exit();
    }else{
        header("Location: ../index.php?error=Incorrect username or password");
        exit();
    }
}else{
    header("Location: ../index.php?error=Incorrect username or password2");
    exit();
}


?>


