<div id="currentScoreWrapper">

    <h1>Glückwunsch! du hast das Quiz abgeschlossen</h1>
    <div id="heartsScore">Gesamelte Herzen: <?php
        echo $_SESSION['hearts'];
        ?></div>
    <div id="scoredScore">aktueller Score: <?php
        echo $_SESSION['score'];
        ?></div>

    <a class="button" href="index.php?page=">weiter zum Spiel</a>

</div>