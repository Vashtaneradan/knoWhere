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
    <!--Stylesheet zum festlegen von standard Einstellungen/CSS um gleiches aussehen in verschiedenen Browsern zu ermöglichen-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css" />
    <link href="styles/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,700" rel="stylesheet">
</head>
<body>

<div id="logo"><a href="index.php"><img src="graphics/logo/knoWhere_Logo@4x.png"></a></div> <!-- logo einbinden -->
<div id="gamebody">
    <?php
    if (!isset($_GET["page"])) {
        $_GET['page'] = 'login'; //parameter standardmäßig auf login setzten
    }
    //verhindert das ansprechen von seiten ohne login
    if (!isset($_SESSION['username']) || !$_SESSION['username']) {
        switch ($_GET["page"]) {
            case "RegisterPHP":
                require("php/RegisterPHP.php"); //einbinden des erfolgreichen Logins
                break;
            case "register":
                require("Templates/register.php"); //einbinden der Registrierung
                break;
            case "LoginPHP":
                require("php/LoginPHP.php"); //einbinden des erfolgreichen Logins
                break;
            case "login":
            default: //falls keine passende datei gefunden wurde
                require("Templates/login.php"); //einbinden der Loginseite
                break;
        }
    }
    if (isset($_SESSION['username']) && $_SESSION['username']) {
        //herausfinden über parameter page welde Datei geladen werden soll
        switch ($_GET["page"]) {
            case "registrierungErfolgreich":
                require("Templates/registrierungErfolgreich.php"); //einbinden der erfolgreichen Registrierung
                break;
            case "LoginErfolgreich":
                require("Templates/loginErfolgreich.php"); //einbinden des erfolgreichen Logins
                break;
            case "LogoutPHP":
                require("php/LogoutPHP.php"); //einbinden des erfolgreichen Logins
                break;
            case "SelectContinent":
                require("Templates/SelectContinent.php");
                break;
            case "HighScore":
                require("php/getHighScore.php");
                require("Templates/HighScore.php");
                break;
            case "QuizScore":
                require("Templates/QuizScore.php");
                break;
            case "Quiz":
                require("php/getQuestion.php");
                require("Templates/Quiz.php");
                break;
            case "QuizAnswer":
                require("php/QuizAnswer.php");
                require("Templates/QuizAnswered.php");
                break;
            case "menue":
            default: //falls keine passende datei gefunden wurde
                require("Templates/menue.php"); //einbinden der Registrierung
                break;
        }
    }
    ?>
</div>

</body>
</html>
