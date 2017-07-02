<div id="gamewrapper">
    <?php
    $_SESSION['hearts'] = $_POST['hearts'];
    $_SESSION['score'] = $_POST['score'];
    $clickedOn = $_POST['clicked'];
    $_SESSION['gameQuestionCounter'] += 1;

    if ($_SESSION['hearts'] < 0) {
        include('php/getGameQuestions.php');
    } else if ($_SESSION['gameQuestionCounter'] >= 6) {
        include('php/getGameQuestions.php');
    } else {
        header("refresh:5;url=index.php?page=Game");
    }
    $arrayPos = $_SESSION['playedCountries'][count($_SESSION['playedCountries']) - 1];
    $_SESSION['playedCountriesAnswered'][] = $arrayPos;
    ?>
    <div id="aktuellerKontinent"> aktueller Kontinent:
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
            ?></div>
    </div>
    <div id="gameResponse">
        <div id="gameResponseMessage">
            <?php
            $richtig = $_POST['correct'];
            if ($richtig === "ja") {
                echo "<p id='gameCorrectAnswer'>Das war richtig!</p>";
            }
            if ($richtig == "nein") {

                echo "<p id='gameWrongAnswer'>Das war leider falsch!</p>";
                echo "<p id='gameWrongAnswer'>Du hast auf " . $clickedOn . " geklickt!</p>";
            }
            ?>
        </div>
        <div id="gameQuestionCountMessage">
            <?php
            echo "Du hast " . $_SESSION['gameQuestionCounter'] . " Frage(n) gespielt";
            ?>
        </div>
    </div>
</div>