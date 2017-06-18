<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>knoWhere</title>
    <link href="styles.css" rel="stylesheet">
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
            require("register.php"); //einbinden der Registrierung
            break;
        case "menue":
            require("menue.php"); //einbinden der Registrierung
            break;
        case "login":
        default: //falls keine passende datei gefunden wurde
            require("login.php"); //einbinden der Loginseite
            break;
    }

    ?>
</div>

</body>
</html>
