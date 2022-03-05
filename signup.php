<?php

include_once 'sidebar.php';

?>

<!--- MAIN --->
<div class="w3-main" style="margin-left:340px;margin-right:40px">


    <section class="login">
        <div class="wrapper">
            <div class="login-signup">
                <h4>REGISTRERA DIG</h4>
                <p>Har du inget konto? Registrera dig här!</p>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Användarnamn">
                    <input type="password" name="pwd" placeholder="Lösenord">
                    <input type="password" name="pwdrepeat" placeholder="Upprepa lösenord">
                    <input type="text" name="email" placeholder="Email">
                    <br>
                    <button type="submit" name="submit">REGISTRERA</button>
                </form>
            </div>
            <div class="login-login">
                <h4>LOGGA IN</h4>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Användarnamn">
                    <input type="password" name="pwd" placeholder="Lösenord">
                    <br>
                    <button type="submit" name="submit">LOGGA IN</button>
                </form>
            </div>
        </div>
    </section>


</div>
