<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "mysql13@dmin", "project");
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["password"] = $_POST["password"];
    $email = $_POST["email"];
    $password =  $_POST["password"];

    $result = mysqli_query($conn, "select * from details;" );
    while($row=mysqli_fetch_row($result))
    {
        if($row[0] == $email && $row[1] == $password)
        {
            $bol = true;
            break;
        }
            else {
            $bol = false;
        }
    }
    if ($bol){
        echo "<script>window.location.href = 'assign-val.php';</script>";
        exit();
    }
    else{
        echo "<script>alert('Enter correct Email and Password')</script>";
        echo "<script>window.location.href = 'login-page.html';</script>";
        exit();
    }
    $close = mysqli_close($conn);
?>