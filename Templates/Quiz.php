<div id="quizwrapper">

    <div id="kontinent"> <p>aktueller Kontinent:</p><?php
    	$_SESSION['currContinent'] = $_GET['Continent'];
        echo $_GET['Continent'];
        ?></div>

    <div id="highscore">
        <div id="hearts">Herzen: <?php
            echo $_SESSION['hearts'];
            ?></div>
        <div id="score">Score: <?php
            echo $_SESSION['score'];
            ?></div>
    </div>

    <form method="post"
          action="index.php?page=QuizAnswer"
          id="quiz">
        <div id="question"><?php
            echo $randomQuestion["question"];
            ?>
        </div>


        <label class="answer-a" for="a"><?php
            echo $randomAnswers[0];
            ?></label>
        <label class="answer-b" for="b"><?php
            echo $randomAnswers[1];
            ?></label>
        <label class="answer-c" for="c"><?php
            echo $randomAnswers[2];
            ?></label>
        <label class="answer-d" for="d"><?php
            echo $randomAnswers[3];
            ?></label>

        <input type="hidden" value="<?php echo $_GET['Continent']; ?>" name="Continent">
        <input type="hidden" value="<?php echo $questionID; ?>" name="questionID">

        <input type="submit" value="<?php echo $randomAnswers[0]; ?>" name="answer" id="a">
        <input type="submit" value="<?php echo $randomAnswers[1]; ?>" name="answer" id="b">
        <input type="submit" value="<?php echo $randomAnswers[2]; ?>" name="answer" id="c">
        <input type="submit" value="<?php echo $randomAnswers[3]; ?>" name="answer" id="d">

    </form>


</div>