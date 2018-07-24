<?php

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/WBMV/db/dbConnection.php";
    include($path);

    if(!strcmp(null,$_POST['namewithinitials']) || !strcmp(null,$_POST['fullname']) || !strcmp(null,$_POST['birthday'])
        || !strcmp(null,$_POST['category']) || !strcmp(null,$_POST['address']) || !strcmp(null,$_POST['mobile'])
        || !strcmp(null,$_POST['home'])){


        header("Location: /../WBMV/admin/pages/staff_Information.php");
        exit();

    }


    $fullname = $_POST['fullname'];
    $namewithinitial = $_POST['namewithinitials'];
    $birthday  = $_POST['birthday'];
    $category = $_POST['category'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $home = $_POST['home'];

    if(isset($_POST['image'])){
        $image = $_POST['image'];
    }
    $categoryID = 0;

    if(strcmp("Academic Staff",$category)){
        $categoryID = 2;
    }
    if(strcmp('Non-Academic Staff',$category)){
        $categoryID = 1;
    }


    $sql = "INSERT INTO academic_staff (staff_full_name,staff_name_with_initial,staff_address,staff_birthday,category_id,
              staff_mobile,staff_home,staff_image) VALUES ('$fullname','$namewithinitial','$address','$birthday','$categoryID',
              '$mobile','$home','$image')";

    if ($conn->query($sql) === TRUE) {
        $message = "Recorded Sucessfully !!!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.location.replace('/../WBMV/admin/pages/staff_Information.php');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }















?>