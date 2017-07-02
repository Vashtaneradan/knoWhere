<div id="gamewrapper">

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
    <div id="gameQuestion">
        <div id="frage">Wähle folgendes Land:</div>
        <div id="countryQuestion"><?php echo $randomCountry['country']; ?></div>
    </div>

    <form name="updateVariables" action="index.php?page=GameEval" method="post">
        <input id="POSTHearts" type="hidden" name="hearts" value=""/>
        <input id="POSTScore" type="hidden" name="score" value=""/>
        <input id="POSTCorrect" type="hidden" name="correct" value=""/>
        <input id="POSTClicked" type="hidden" name="clicked" value=""/>
    </form>

    <div id="countryvariable" style="display: none;">
        <?php

        echo $randomCountry['country'];
        ?>
    </div>
    <div id="heartsvariable" style="display: none;">
        <?php

        echo $_SESSION['hearts'];
        ?>
    </div>
    <div id="scorevariable" style="display: none;">
        <?php

        echo $_SESSION['score'];
        ?>
    </div>
    <div id="countrymap">
        <!-- Raphael JS Map Here -->
    </div>
    <!--<h3 id="kontinentname"></h3>-->
    <script src="js/raphael-min.js"></script>
    <?php

    if ($_SESSION["Continent"] == "Nordamerika") {
        echo '<script src="Maps/ContinentNorthamerica_final_working.js"></script>';
    }
    if ($_SESSION["Continent"] == "Suedamerika") {
        echo '<script src="Maps/ContinentSouthamerica_final_working.js"></script>';
    }
    if ($_SESSION["Continent"] == "Asien") {
        echo '<script src="Maps/ContinentAsia_final_working.js"></script>';
    }
    if ($_SESSION["Continent"] == "Australien_Ozeanien") {
        echo '<script src="Maps/ContinentAustrOz_final_working.js"></script>';
    }
    if ($_SESSION["Continent"] == "Afrika") {
        echo '<script src="Maps/ContinentAfrica_final_working.js"></script>';
    }
    if ($_SESSION["Continent"] == "Europa") {
        echo '<script src="Maps/ContinentEurope_final_working.js"></script>';
    }

    ?>


</div>