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
$allaVuxenPar = array("Karl&Elizabeth","Jesper&Veronika","Jonas&Cajsa","Oscar&Sofia","Tobias&Hanna","Conrad&Matilda");
$allaSeniorPar = array("Bert&Britt","Roger&Ylva","Tony&Marie","Orvar&Anette","Tomas&Helen","Henric&Joanna");
$vuxenpar[] = $seniorpar[] = [];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vuxenpar[] = test_input($_POST["vuxenpar[]"]);
    $seniorpar[] = test_input($_POST["seniorpar_1"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

  <div class="myform-container">

    <form action="" method="post" class="mb-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <h3>Välj tre vuxenpar och tre 35+par!</h3>
      <select name="vuxenpar[]" multiple class="form-control" style="width:30%;">
        <?php 
          echo "<option value=0 disabled>Välj vuxenpar</option>";
            foreach($allaVuxenPar as $par){
              echo "<option value=" . $par . ">" . $par . "</option>";
            }
        ?> 
      </select>

      <select name="seniorpar[]" multiple class="form-control" style="width:30%;">
        <?php 
          echo "<option value=0 disabled>Välj 35+par</option>";
            foreach($allaSeniorPar as $par){
              echo "<option value=" . $par . ">" . $par . "</option>";
            }
        ?> 
      </select>

      <div>
          <br>
          <input type="submit" name="submit" vlaue="Choose options">
      </div>

    </form>


    <?php
    echo "<br><h3>Ditt lag:</h3>";
    $file = 'picks_Karlstad_2022.txt';
    if (isset($_POST['submit'])) {
        if (sizeof($_POST['vuxenpar']) == 3 && sizeof($_POST['seniorpar']) == 3){
            echo "<br><h4>Dina vuxenpar:</h4>";
            foreach ($_POST['vuxenpar'] as $selected) {
                file_put_contents($file, $selected . "\n", FILE_APPEND | LOCK_EX);
                echo '<p class="select-tag mt-3">' . $selected . '</p>';
            }
            echo "<br><h4>Dina 35+par:</h4>";
            foreach ($_POST['seniorpar'] as $selected) {
                file_put_contents($file, $selected . "\n", FILE_APPEND | LOCK_EX);
                echo '<p class="select-tag mt-3">' . $selected . '</p>';
            }
        } else {
            echo '<p class="error alert alert-danger mt-3">Vänligen välj 3 par i respektive klass.</p>';
        }
    }
    file_put_contents($file, "\n", FILE_APPEND | LOCK_EX);

    ?>

   </div>


  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>




<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

$('option').mousedown(function(e) {
    e.preventDefault();
    $(this).toggleClass('selected');
  
    $(this).prop('selected', !$(this).prop('selected'));
    return false;
});


/*$(document).ready(function(){
  $("#selectboxID").change(function() {
     $("#formID").submit();
  });
});
*/

/* $(document).ready(function() {
        $(".preferenceSelect").change(function() {
            // Get the selected value
            var selected = $("option:selected", $(this)).val();
            // Get the ID of this element
            var thisID = $(this).prop("id");
            // Reset so all values are showing:
            $(".preferenceSelect option").each(function() {
                $(this).prop("disabled", false);
            });
            $(".preferenceSelect").each(function() {
                if ($(this).prop("id") != thisID) {
                    $("option[value='" + selected + "']", $(this)).prop("disabled", true);
                }
            });

        });
    });
*/

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
