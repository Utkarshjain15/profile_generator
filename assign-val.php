<?php
    session_start();
    $email = $_SESSION["email"];
    $password =  $_SESSION["password"];
    $conn = mysqli_connect("localhost", "root", "mysql13@dmin", "project");
    //$email = "email@gmail.com";
    $result = mysqli_query($conn, "select * from details where email = '$email';");
    $row=mysqli_fetch_row($result);

    $name = $row[2];
    $namelow = strtolower($name);
    //echo $namelow[0];
    $_SESSION["favicon"] = $namelow[0];

    $_SESSION["fname"] = $row[2];
    $_SESSION["lname"] = $row[3];
    $_SESSION["profession"] = $row[4];
    $_SESSION["profile_pic"] = $row[5];
    $_SESSION["introduction"] = $row[6];
    $_SESSION["skill_a"] = $row[7];
    $_SESSION["desc_a"] = $row[8];
    $_SESSION["skill_b"] = $row[9];
    $_SESSION["desc_b"] = $row[10];
    $_SESSION["linkdin"] = $row[11];
    $_SESSION["twitter"] = $row[12];
    $_SESSION["website"] = $row[13];

    if (null !== $_SESSION["fname"] && null !== $_SESSION["lname"] && null !== $_SESSION["profession"] && null !== $_SESSION["profile_pic"] && null !== $_SESSION["introduction"] && null !== $_SESSION["skill_a"] && null !== $_SESSION["desc_a"] && null !== $_SESSION["skill_b"] && null !== $_SESSION["desc_b"] && null !== $_SESSION["linkdin"] && null !== $_SESSION["twitter"] && null !== $_SESSION["website"])
    {
        echo "<script>window.location.href = 'home-page.php';</script>";
    }
    else{
        echo "<script>alert('We ran into an error please try again')</script>";
        echo "<script>window.location.href = 'login-page.html';</script>";
    }
?>