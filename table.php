<?php

include_once "sidebar.php";

?>


<table style="margin-left: 500px;">
    <tr>
        <td>Rank</td>
        <td>Användarnamn</td>
        <td>Poäng</td>
    </tr>

    <?php
        $conn = mysqli_connect("127.0.0.1", "root", "", "fantasydans");
        $sql = ("SELECT username, score FROM leaderboard ORDER BY score DESC");
        $result = mysqli_query($conn, $sql);
        $rank = 1;

        if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                          <td>{$rank}</td>
                          <td>{$row['username']}</td>
                          <td>{$row['score']}</td>
                      </tr>";
                $rank++;
            }
        }
    ?>
</table>
