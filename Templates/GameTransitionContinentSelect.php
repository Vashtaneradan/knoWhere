<div id="GameTransitionContinentSelectWrapper">

    <h1>Glückwunsch! Das Länderraten ist vorbei!</h1>
    <div id="heartsScore">übrige Herzen: <?php
        echo '<span class="filledhearts">';
        echo str_repeat('&#x2764;', $_SESSION['hearts']);
        echo '</span>';
        ?></div>
    <div id="scoredScore">aktueller Score: <?php
        echo $_SESSION['score'];
        ?></div>

    <?php 
    resetGame();
    ?>
    <a class="button" href="index.php?page=SelectContinent">weiter zur Kontinentauswahl</a>


</div>
