<div id="HighScoreWrapper">
    <div id="info">
        <h1>High Score</h1>

    </div>
    <div id="scoreWrapper">
        <table style="width:100%">
            <tr>
                <th>Username</th>
                <th>Datum</th>
                <th>Score</th>
                <th>Herzen</th>
            </tr>
            <?php
            foreach ($scoreList as $scoreLine) {
                if ($_SESSION['username'] === $scoreLine['username']) {
                    echo '<tr class="currentUser">';
                } else {
                    echo '<tr>';
                }

                echo '<td>' . $scoreLine['username'] . '</td>';
                echo '<td>' . date('j.n.Y', $scoreLine['date']) . '</td>';
                echo '<td>' . $scoreLine['score'] . '</td>';
                echo '<td>' . $scoreLine['hearts'] . '</td>';
                echo '</tr>';
            }
            ?>
        </table>

    </div>

    <a class="button" href="index.php?page=menue">zurück zum Menü</a>

</div>