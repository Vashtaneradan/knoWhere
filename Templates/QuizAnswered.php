<div id="quizwrapper">
    <?php
    header("refresh:3;url=index.php?page=Quiz");
    ?>
    <div id="kontinent"> aktueller Kontinent:
        <h3><?php
            echo $_SESSION["Continent"];
            ?>
        </h3>
    </div>

    <div id="highscore">
        <div id="hearts">Herzen: <?php
            echo '<span class="filledhearts">';
            echo str_repeat('&#x2764;', $_SESSION['hearts']);
            echo '</span>';
            echo str_repeat('&#x2661;', 3 - $_SESSION['hearts']);
            ?>
        </div>
        <div id="score">Score: <?php
            echo $_SESSION['score'];
            ?>
        </div>
    </div>

    <div id="quizanswer" class="quiz <?php echo $thisTimeRight ? 'green' : 'red'; ?>">
        <div class="question"><?php
            echo $actualQuestion["question"];
            ?>
        </div>


        <div class="solution">
            <?php
            $text = $thisTimeRight ? 'Richtig' : 'Leider Falsch';
            echo $text . '<br><br> Die Anwtort lautet: <br>' . $actualQuestion['solution'];
            ?>
        </div>

    </div>


</div>