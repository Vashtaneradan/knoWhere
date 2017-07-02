<div id="gamewrapper">

    <?php


    $_SESSION['hearts'] = $_POST['hearts'];
    $_SESSION['score'] = $_POST['score'];
    $_SESSION['gameQuestionCounter'] += 1;

    if ($_SESSION['hearts'] < 0) {
        include('php/getGameQuestions.php');
    } else if ($_SESSION['gameQuestionCounter'] >= 6) {
        include('php/getGameQuestions.php');
    } else {
        header("refresh:5;url=index.php?page=Game");
        echo "Du hast " . $_SESSION['gameQuestionCounter'] . " Frage(n) gespielt!";
        echo "Du hast " . $_SESSION['hearts'] . "Herzen!";
    }


    $richtig = $_POST['correct'];
    if ($richtig === "ja") {
        echo "DAS WAR RICHTIG!";
    }
    if ($richtig == "nein") {

        echo "DAS WAR FALSCH!";
    }

    ?>

</div>