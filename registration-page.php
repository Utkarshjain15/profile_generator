<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Welcome to profile creator!</title>
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat|Sacramento" rel="stylesheet">
        <link rel="icon" href="favicons/loginpage.ico">
        <script>
            function myFunction() {
            var x = document.getElementById("pass");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
    </head>
    <body class="login-page">
        <div class="registration-container">
            <h2 class="bold">Registration Page</h2>
            <form name="registration-form1" action="http://localhost/proj/registration.php" method="post" id="registration-form">
                <table class="login-form">

                    <!-- General Details -->

                    <tr><td><h3 class="less-padd">Basic info</h3></td></tr>

                    <tr><td><label>Email:</label></td></tr>
                    <tr><td colspan="2"><input class="input-box" name="email" type="email" maxlength="320" value="<?php $em; ?>" required></td></tr>

                    <tr><td><label>Password:</label></td></tr>
                    <tr><td colspan="2"><input class="input-box" name="password" type="password" id = "pass" maxlength="20" required>
                    <div style="font-size: 0.8rem"><input type="checkbox" onclick="myFunction()"> Show Password </div></td></tr>

                    <tr><td><label>First Name:</label></td></tr>
                    <tr><td colspan="2"><input class="input-box" name="fname" type="text" maxlength="40" required></td></tr>
                    
                    <tr><td><label>Last Name:</label></td></tr>
                    <tr><td colspan="2"><input class="input-box" name="lname" type="text" maxlength="40" required></td></tr>
                    
                    <tr><td><label>Profession:</label></td>
                    <tr><td colspan="2"><input class="input-box" name="profession" type="text" maxlength="30" required></td></tr>
                    
                    <tr><td><label>Introduce yourself:</label></td></tr>
                    <tr><td colspan="2"><textarea rows="4" cols="63" id="introduction" name="introduction" maxlength="150"></textarea></td></tr>
                    
                    <tr>
                        <td><label>Profile Picture:</label></td>
                        <td><input multiple class="choose" name="profile_pic" type="file" maxlength="100" style="border: 0px;" required></td>
                    </tr>
                

                    <!-- Skills -->

                    <tr><td><h3 class="less-padd">Your skills</h3></td></tr>

                    <tr><td><label>Skill 1:</label></td></tr>
                    <tr><td  colspan="2"><input class="input-box" name="skill_a" type="text" required></td></tr>

                    <tr><td><label>Description:</label></td></tr>
                    <tr><td colspan="2"><textarea rows="4" cols="63" id="description_a" name="description_a" id ="registration-form" maxlength="250"></textarea></td></tr>
                    
                    <tr><td><label>Skill 2:</label></td></tr>
                    <tr><td colspan="2"><input class="input-box" name="skill_b" type="text" required></td></tr>

                    <tr><td><label>Description:</label></td></tr>
                    <tr><td colspan="2"><textarea rows="4" cols="63" id="description_a" name="description_b" method="post" maxlength="250"></textarea></td></tr>
        

                    <!-- contact details -->

                    <tr><td><h3 class="less-padd">Contact Details</h3></td></tr>
                    
                    <tr><td><label>Linkedin:</label></td></tr>
                    <tr><td colspan="2"><input class="input-box" name="linkdin" type="url" required></td></td>
                    
                    <tr><td><label>Twitter:</label></td>
                    <tr><td colspan="2"><input class="input-box" name="twitter" type="url" required></td></tr>

                    <tr><td><label>Website:</label></td>
                    <tr><td colspan="2"><input class="input-box" name="website" type="url" required></td></tr>
            
                    </table>
                <input type="submit" name="submit" value="Submit" class="login-btn btn">
                <input type="reset" class="login-btn btn">
            </form>
        </div>
    </body>
</html>