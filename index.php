<?php
session_start();
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>knoWhere</title>
    <link href="styles/styles.css" rel="stylesheet">
</head>
<body>

<div id="logo"><img src="graphics/logo/knoWhere_Logo@4x.png"></div> <!-- logo einbinden -->
<div id="gamebody">
    <?php
    if (!isset($_GET["page"])) {
        $_GET['page'] = 'login'; //parameter standardmäßig auf login setzten
    }
    //herausfinden über parameter page welde Datei geladen werden soll
    switch ($_GET["page"]) {
        case "register":
            require("Templates/register.php"); //einbinden der Registrierung
            break;
        case "menue":
            require("Templates/menue.php"); //einbinden der Registrierung
            break;
        case "registrierungErfolgreich":
            require("Templates/registrierungErfolgreich.php"); //einbinden der erfolgreichen Registrierung
            break;
        case "LoginErfolhreich":
            require("Templates/loginErfolgreich.php"); //einbinden ders erfolgreichen Login
            break;
        case "RegisterPHP":
            require("php/RegisterPHP.php"); //einbinden ders erfolgreichen Login
            break;
        case "LoginPHP":
            require("php/LoginPHP.php"); //einbinden ders erfolgreichen Login
            break;
        case "Quiz":
            require("php/getQuestion.php");
            require("Templates/Quiz.php");
            break;
        case "QuizAnswer":
            require("php/QuizAnswer.php");
            require("Templates/QuizAnswered.php");
            break;
        case "login":
        default: //falls keine passende datei gefunden wurde
            require("Templates/login.php"); //einbinden der Loginseite
            break;
    }
    ?>
</div>

</body>
</html>
