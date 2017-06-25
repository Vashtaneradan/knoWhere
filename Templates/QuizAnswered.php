<div id="quizwrapper">
    <?php
    header("refresh:3;url=index.php?page=Quiz&Continent=" . $_POST["Continent"]);
    ?>
    <div id="kontinent"><?php
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
        <div id="question"><?php
            echo $actualQuestion["question"];
            ?>
        </div>


        <div>
            <?php
            $text = $thisTimeRight ? 'Richtig' : 'Leider Falsch';
            echo $text . '<br> Die Anwtort lautet: ' . $actualQuestion['solution'];
            ?></div>

    </div>


</div>