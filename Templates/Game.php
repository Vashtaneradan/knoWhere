<div id="gamewrapper">

    <div id="aktuellerKontinent"> <p>aktueller Kontinent:</p><?php
        echo $_SESSION['currContinent'];
        ?></div>

    <div id="highscore">
        <div id="hearts">Herzen: <?php
            echo $_SESSION['hearts'];
            ?></div>
        <div id="score">Score: <?php
            echo $_SESSION['score'];
            ?></div>
    </div>
    <div id="gameQuestion">
    	<p>Bitte wählen Sie folgendes Land:</p>
    	<?php 
    			echo $randomCountry['country'];
    	?>    	
    </div>
    
    <form name="updateVariables" action="index.php?page=GameEval" method="post">
 		<input type="hidden" name="hearts" value="" />
 		<input type="hidden" name="score" value="" />
 		<input type="hidden" name="correct" value="" />
	</form>
    
    <div id="countryvariable" style="display: none;">
    <?php 
    
        echo htmlspecialchars($randomCountry['country']);
    ?>
</div>
<div id="heartsvariable" style="display: none;">
    <?php 
    
        echo htmlspecialchars($_SESSION['hearts']);
    ?>
</div>
<div id="scorevariable" style="display: none;">
    <?php 
    
        echo htmlspecialchars($_SESSION['score']);
    ?>
</div>
    		<div id="countrymap">
			<!-- Raphael JS Map Here -->
		</div>
		<!--<h3 id="kontinentname"></h3>-->
		<script src="js/raphael-min.js"></script>
		
		<?php

if ($_SESSION['currContinent'] == "Nordamerika")
{
	echo '<script src="Maps/ContinentNorthamerica_final_working.js"></script>';
}
if ($_SESSION['currContinent'] == "Suedamerika")
{
	echo '<script src="Maps/ContinentSouthamerica_final_working.js"></script>';
}
if ($_SESSION['currContinent'] == "Asien")
{
	echo '<script src="Maps/ContinentAsia_final_working.js"></script>';
}
if ($_SESSION['currContinent'] == "Australien_Ozeanien")
{
	echo '<script src="Maps/ContinentAustrOz_final_working.js"></script>';
}
if ($_SESSION['currContinent'] == "Afrika")
{
	echo '<script src="Maps/ContinentAfrica_final_working.js"></script>';
}
if ($_SESSION['currContinent'] == "Europa")
{
	echo '<script src="Maps/ContinentEurope_final_working.js"></script>';
}

?>


</div>