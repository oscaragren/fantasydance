<?php

if (isset($_POST["submit"])) {
    echo "It works";
}
else {
    header("Location: ../signup.php");
}
