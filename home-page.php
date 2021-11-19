<?php
    session_start();
    if (!isset($_SESSION['fname']))
    {
      echo "<script>window.location.href = 'login-page.html';</script>";
      exit();
    }
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title><?php echo $_SESSION["fname"]." ".$_SESSION["lname"]; ?></title>
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat|Sacramento" rel="stylesheet">
  <link rel="icon" href="favicons/<?php echo $_SESSION["favicon"]; ?>.ico">
</head>

<body>
  <div class="top-container">
    <img class="top-cloud" src="images/cloud.png" alt="cloud">
    <div class="title-text">
      <h1>I'm <?php echo $_SESSION["fname"]; ?></h1>
      <h2>a <span class="pro"><?php echo $_SESSION["profession"]; ?></span></h2>
    </div>
    <img class="bottom-cloud" src="images/cloud.png" alt="cloud">
    <img class="mountain" src="images/mountain.png" alt="mountain-img">
  </div>

  <div class="middle-container">
    <div class="profile">
      <img src="images/<?php echo $_SESSION["profile_pic"]; ?>" class="profile-pic" alt="profile-img">
      <h2>Hello.</h2>
      <p class="intro"><?php echo $_SESSION["introduction"]; ?></p>
    </div>
    <hr>
    <div class="skills">
      <h2>My Skills.</h2>
      <div class="skill-row">
        <img class="code-img" src="images/coding.gif" alt="code-img">

        <h3><?php echo $_SESSION["skill_a"]; ?></h3>
        <p><?php echo $_SESSION["desc_a"]; ?></p>
      
      </div>

      <div class="skill-row">
        <img class="chilli-img" src="images/chillies.png" alt="chillies-img">

        <h3><?php echo $_SESSION["skill_b"]; ?></h3>
        <p><?php echo $_SESSION["desc_b"]; ?></p>

      </div>
    </div>
    <hr>
    <div class="contact-me">
      <h2>Get In Touch</h2>
      <h3 class="contact-bottom">If you love <?php echo $_SESSION["skill_b"]; ?> as much as I do.</h3>
      <a class="btn" href="mailto:<?php echo $_SESSION["email"]; ?>">CONTACT ME</a>
    </div>
  </div>


  <div class="bottom-container">
    <a class="footer-link" href="<?php echo $_SESSION["linkdin"]; ?>">LinkedIn</a>
    <a class="footer-link" href="<?php echo $_SESSION["twitter"]; ?>">Twitter</a>
    <a class="footer-link" href="<?php echo $_SESSION["website"]; ?>">Website</a>
    <p> </p>
  </div>
</body>
</html>
<?php
   session_destroy();
?>
