<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php?action=login");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="/css/w3.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; background-color: transparent; }
    </style>
</head>
<body>
  <div class="page-header">
        <h5>Welcome,<br> <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</h5>
  </div>
    <p>
        <a href="reset-password.php" class="w3-btn w3-yellow">Reset Your Password</a>
        <a href="logout.php" class="w3-btn w3-blue">Sign Out of Your Account</a>
    </p>
    <hr />
<script>
function openPage(evt, pageName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("page");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-green", "");
  }
  document.getElementById(pageName).style.display = "block";
  evt.currentTarget.className += " w3-green";
}
</script>

</body>
</html>
