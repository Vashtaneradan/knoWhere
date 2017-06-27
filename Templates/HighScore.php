<div id="HighScoreWrapper">
    <div id="info">
        <h1>High Score</h1>

        <?php
        echo "<h2>" . $_SESSION['username'] . "</h2>"
        ?>
    </div>
    <div id="scoreWrapper">
        <?php
        foreach ($scoreList as $scoreLine) {
            echo "<h3>" . $scoreLine['username'] . "</h3>";
        }
        ?>

    </div>

    <a class="button" href="index.php?page=menue">zurück zum Menü</a>

</div>