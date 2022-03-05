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
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Tabell</a>
    <a href="pick_team.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Välj dansare</a>
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Ranking</a>
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Information</a>
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Kontakt</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Logga in/Registrera</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>FANTASY DANS</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Här väljer du ditt lag.</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Testtävling Karlstad.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>

<?php
$vuxenpar_1 = $vuxenpar_2 = $seniorpar_1 = $seniorpar_2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vuxenpar_1 = test_input($_POST["vuxenpar_1"]);
    $vuxenpar_2 = test_input($_POST["vuxenpar_2"]);
    $seniorpar_1 = test_input($_POST["seniorpar_1"]);
    $seniorpar_2 = test_input($_POST["seniorpar_2"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Välj ditt lag:</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">        
      <select name="vuxenpar_1" id="vuxenpar">
        <option value="null"></option>
        <option value="001">V.Par #1</option>
        <option value="002">V.Par #2</option>
        <option value="003">V.Par #3</option>
        <option value="004">V.Par #4</option>
      </select>
     
      <select name="vuxenpar_2" id="vuxenpar">
        <option value="null"></option>
        <option value="001">V.Par #1</option>
        <option value="002">V.Par #2</option>
        <option value="003">V.Par #3</option>
        <option value="004">V.Par #4</option>
      </select>
       
      <select name="seniorpar_1" id="seniorpar">
        <option value="null"></option>
        <option value="101">S.Par #1</option>
        <option value="102">S.Par #2</option>
        <option value="103">S.Par #3</option>
        <option value="104">S.Par #4</option>
      </select>
     
      <select name="seniorpar_2" id="seniorpar">
        <option value="null"></option>
        <option value="101">S.Par #1</option>
        <option value="102">S.Par #2</option>
        <option value="103">S.Par #3</option>
        <option value="104">S.Par #4</option>
      </select>
    <br><br>
  <input type="submit" value="Lås in">
</form>

<?php

$file = 'picks_Karlstad_2022.txt';
file_put_contents($file, get_current_user() . "\n", FILE_APPEND | LOCK_EX);
file_put_contents($file, $vuxenpar_1 . "\n", FILE_APPEND | LOCK_EX);
file_put_contents($file, $vuxenpar_2 . "\n", FILE_APPEND | LOCK_EX);
file_put_contents($file, $seniorpar_1 . "\n", FILE_APPEND | LOCK_EX);
file_put_contents($file, $seniorpar_2 . "\n\n", FILE_APPEND | LOCK_EX);

echo "<h2>Ditt Lag:</h2>";
echo "Vuxenpar 1: "; echo $vuxenpar_1; echo "<br>";
echo "Vuxenpar 2: "; echo $vuxenpar_2; echo "<br>";
echo "Seniorpar 1: "; echo $seniorpar_1; echo "<br>";
echo "Seniorpar 2: "; echo $seniorpar_2; echo "<br>";
?>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>




  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Do you want us to style your home? Fill out the form and fill me in with the details :) We love meeting new people!</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

<script>


// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
