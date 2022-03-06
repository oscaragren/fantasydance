<!DOCTYPE html>
<html lang="en">
<head>
<title>Fantasy Dans</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
</head>
<body>


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>FANTASY<br>DANS</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="table.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Tabell</a>
    <a href="pick_team.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Välj dansare</a>
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Ranking</a>
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Information</a>
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Kontakt</a>
    <?php
        if (isset($_SESSION["userid"]))
        {
    ?>
    <a href="signup.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><?php echo $_SESSION["useruid"]; ?></a>
    <a href="includes/logout.inc.php" class="something">LOGGA UT</a>
    <?php
        }
        else {
    ?>
    <a href="signup.php">REGISTRERA</a>
    <a href="signup.php">LOGIN</a>
    <?php
        }
    ?>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>FANTASY DANS</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
