<div id="quizwrapper">

    <div id="kontinent"> aktueller Kontinent:
        <h3><?php
            echo $_SESSION['Continent'];
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

    <form id="quiz" class="quiz" method="post"
          action="index.php?page=QuizAnswer">
        <div id="question" class="question"><?php
            echo $randomQuestion["question"];
            ?>
        </div>


        <label class="answer answer-a" for="a"><?php
            echo $randomAnswers[0];
            ?></label>
        <label class="answer answer-b" for="b"><?php
            echo $randomAnswers[1];
            ?></label>
        <label class="answer answer-c" for="c"><?php
            echo $randomAnswers[2];
            ?></label>
        <label class="answer answer-d" for="d"><?php
            echo $randomAnswers[3];
            ?></label>

        <input type="hidden" value="<?php echo $questionID; ?>" name="questionID">

        <input type="submit" value="<?php echo $randomAnswers[0]; ?>" name="answer" id="a">
        <input type="submit" value="<?php echo $randomAnswers[1]; ?>" name="answer" id="b">
        <input type="submit" value="<?php echo $randomAnswers[2]; ?>" name="answer" id="c">
        <input type="submit" value="<?php echo $randomAnswers[3]; ?>" name="answer" id="d">

    </form>


</div>