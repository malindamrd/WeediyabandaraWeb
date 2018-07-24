<?php

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/WBMV/db/dbConnection.php";
    include($path);

    if(!isset($_POST['username']) && !isset($_POST['password'])){
        header("Location: /../WBMV/admin/login.php");
        exit();
    }

    $user_name = $_POST['username'];
    $password = $_POST['password'];

    $sql ="SELECT * FROM admin WHERE admin_username='$user_name' AND admin_password='$password'";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0){
        session_start();
        $_SESSION["username"] = $user_name;
        header("Location: /../WBMV/admin/index.php");
        exit();
    }
    else{
        header("Location: /../WBMV/admin/login.php");
        exit();
    }































?>