<div id="currentScoreWrapper">

    <h1>Glückwunsch! du hast das Quiz abgeschlossen</h1>
    <div id="heartsScore">Gesamelte Herzen: <?php
        echo '<span class="filledhearts">';
        echo str_repeat('&#x2764;', $_SESSION['hearts']);
        echo '</span>';
        ?></div>
    <div id="scoredScore">aktueller Score: <?php
        echo $_SESSION['score'];
        ?></div>


    <a class="button" href="index.php?page=Game">weiter zum Spiel</a>


</div>