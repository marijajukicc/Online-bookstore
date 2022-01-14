<?php

$host="localhost";
$user="JukicM";
$pass="PZI_JukicM1";
$name="JukicM";

$con=new mysqli($host,$user,$pass,$name);

if ($con->connect_errno) {
    echo "Failed to connect to MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
}


if(!isset($_POST['username'],$_POST['name'],$_POST['surname'], $_POST['password'], $_POST['email'])){
    exit('Empty Field(s)');
}

if(empty($_POST['username']) || empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['password']) || empty($_POST['email'])) {
    exit('Values Empty');
}

if($stmt= $con->prepare('SELECT id, password FROM users WHERE username = ?')){
    $stmt->bind_param('s',$_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows>0){
        echo 'Username already exists. Try again.';
    }else{
        if($stmt=$con->prepare("INSERT INTO users(username,password,email,name,surname) VALUES (?, ?, ?,?,?)")){
            $password=$_POST['password'];
            $password=password_hash($password, PASSWORD_DEFAULT);
            $username=$_POST['username'];
            $name=$_POST['name'];
            $surname=$_POST['surname'];
            $email=$_POST['email'];
            $stmt->bind_param("sssss",$username,$password,$email,$name,$surname);
            $stmt->execute();
            echo 'Succesful sign up!';
            header("Location: ../index.php");
        }
        else{
            echo 'Failed signing up!';
        }  
    }
    $stmt->close();
}
else{
    echo 'Error occured';
}
$con->close();
?>