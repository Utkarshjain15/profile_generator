<?php
    $conn = mysqli_connect("localhost", "root", "mysql13@dmin", "project");


    $email= $_POST["email"];
    $password= $_POST["password"];
    $fname= $_POST["fname"];
    $lname= $_POST["lname"];
    $profession= $_POST["profession"];
    $profile_pic= $_POST["profile_pic"];
    $introduction = htmlentities($_POST['introduction']);
    $skill_a= $_POST["skill_a"];
    $desc_a = htmlentities($_POST['description_a']);
    $skill_b= $_POST["skill_b"];
    $desc_b = htmlentities($_POST['description_b']);
    $linkdin = $_POST["linkdin"];
    $website = $_POST["website"];
    $twitter = $_POST["twitter"];

    echo $email.", ".$password.", ".$fname.", ".$lname.", ".$profession.", ".$profile_pic.", ".$introduction.", ".$skill_a.", ".$desc_a.", ".$skill_b.", ".$desc_b.", ".$linkdin.", ".$twitter.", ".$website;

    $result = mysqli_query($conn, "insert into details values('$email', '$password', '$fname', '$lname', '$profession', '$profile_pic', '$introduction', '$skill_a', '$desc_a', '$skill_b', '$desc_b', '$linkdin', '$twitter', '$website');");
    $close = mysqli_close($conn);
    echo "<script>alert('Registered Successfully')</script>";
    echo "<script>window.location.href = 'login-page.html';</script>";
    exit();
?>