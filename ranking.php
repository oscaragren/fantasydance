<h1>RANKING</h1>


<!-- (A) ADD NEW SCORE -->
<form id="scoreForm" method="post" target="_self">
  <label for="username">Username:</label>
  <input type="text" name="username" required/>
  <label for="score">Score:</label>
  <input type="number" name="score" required/>
  <input type="submit" value="Save"/>
</form>

<div id="scoreWrap">
<?php

// INIT
require "score.classes.php";
$gameID = 1;
$_SCORE = new Score();

if (isset($_POST["username"])) {
    if ($_SCORE->add($gameID, $_POST["username"], $_POST["score"], date("Y-m-d H:i:s"))) {
        echo "<div>SCORE ADDED</div>";
    } else {
        echo "<div>ERROR!</div>";
    }
}

// GET + DISPLAY
$score = $_SCORE->get($gameID);
if (count($score)>0) { foreach ($score as $s) { ?>

<div class="scoreRow">
    <div class="scoreTime"><?=$s["comp_time"]?></div>
    <div class="scorePoints">
        <span class="scoreUser">USER: <?=$s["username"]?></span>
        <span class="scoreScore">SCORE: <?=$s["score"]?></span>
    </div>
</div>
<?php
    }
}
?>
</div>
