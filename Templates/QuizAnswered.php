<div id="quizwrapper">
    <?php
    header("refresh:3;url=index.php?page=Quiz&Continent=" . $_POST["Continent"]);
    ?>
    <div id="kontinent"><p>aktueller Kontinent:</p><?php
        echo $_POST['Continent'];
        ?></div>

    <div id="highscore">
        <div id="hearts">Herzen: <?php
            echo $_SESSION['hearts'];
            ?></div>
        <div id="score">Score: <?php
            echo $_SESSION['score'];
            ?></div>
    </div>

    <div id="quiz" class="<?php echo $thisTimeRight ? 'green' : 'red';?>">
        <div id="questionAnswerd"><?php
            echo $actualQuestion["question"];
            ?>
        </div>


        <div>
            <?php
            $text = $thisTimeRight ? 'Richtig' : 'Leider Falsch';
            echo $text . '<br><br> Die Anwtort lautet: <br>' . $actualQuestion['solution'];
            ?></div>

    </div>


</div>