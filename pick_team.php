<?php
    session_start();
    include_once "sidebar.php";

?>


<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Här väljer du dina par!</b></h1>
  </div>

<<<<<<< HEAD
<?php
$vuxenpar_1 = $vuxenpar_2 = $seniorpar_1 = $seniorpar_2 = "";
$allaVuxenPar = array("Karl&Bettan","J&V","J&C","O&S");
$allaSeniorPar = array("Bert_och_Britt","Roger och Ylva","Tony och Marie","Orvar och Anette");

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

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


<select name="vuxenpar_1" id="VuxenSelect" class="preferenceSelect">
<?php
	echo "<option value=0></option>";

	foreach($allaVuxenPar as $par){
   		echo "<option value=" . $par . ">" . $par . "</option>";
	}
?>
</select>

<select name ="vuxenpar_2" id="VuxenSelect2" class="preferenceSelect">
<?php
	echo "<option value=0></option>";

	foreach($allaVuxenPar as $par){
    	echo "<option value=" . $par . ">" . $par . "</option>";
	}
?>
</select>


<select name ="seniorpar_1" id="SeniorSelect" class="preferenceSelect">
<?php
	echo "<option value=0></option>";

	foreach($allaSeniorPar as $par){
    	echo "<option value=" . $par . ">" . $par . "</option>";
	}
?>
</select>

<select name ="seniorpar_2" id="SeniorSelect2" class="preferenceSelect">
<?php
	echo "<option value=0></option>";

	foreach($allaSeniorPar as $par){
    	echo "<option value=" . $par . ">" . $par . "</option>";
	}
?>
</select>

<input type="submit" value="Lås in"/>

=======
>>>>>>> becdec880124e18980a7e9ef1f6b21bb0670ddd4

  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:15px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Välj tävling.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">

  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m6 w3-margin-bottom">
      <div class="w3-light-grey">
        <a href="pick_team_Karlstad_2022.php" style="text-decoration: none;" class="w3-container">
          <h3>Testtävling Karlstad</h3>
          <p class="w3-opacity">20/3-2022</p>
          <p>Välj dina favoritpar i Bugg vuxen och Bugg 35+ på testtävlingen i Karlstad.</p>
        </a>
      </div>
    </div>
    <div class="w3-col m6 w3-margin-bottom">
      <div class="w3-light-grey">
        <a href="index.php" style="text-decoration: none;" class="w3-container">
          <h3>Fler tävlingar kommer...</h3>
          <p class="w3-opacity">TBD</p>
          <p>Vi på fantasydance jobbar på att hitta fler tävlingar att vara med på!</p>
        </a>
      </div>
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
