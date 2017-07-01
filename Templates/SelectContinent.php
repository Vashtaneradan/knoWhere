		<div id="worldmap">
			<!-- Raphael JS Map Here -->
		</div>
		<h3 id="kontinentname"></h3>
		
		<div id="playedAsienVariablePHP" style="display: none;"><?php echo $_SESSION['playedAsien']; ?></div>
		<div id="playedAfrikaVariablePHP" style="display: none;"><?php echo $_SESSION['playedAfrika']; ?></div>	
        <div id="playedAustralien_OzeanienVariablePHP" style="display: none;"><?php echo $_SESSION['playedAustralien_Ozeanien']; ?></div>
        <div id="playedEuropaVariablePHP" style="display: none;"><?php echo $_SESSION['playedEuropa']; ?></div>
        <div id="playedSuedamerikaVariablePHP" style="display: none;"><?php echo $_SESSION['playedSuedamerika']; ?></div>
        <div id="playedNordamerikaVariablePHP" style="display: none;"><?php echo $_SESSION['playedNordamerika']; ?></div>
        
		<script src="js/raphael-min.js"></script>
		<script src="Maps/WorldMap.js"></script>
		<script src="js/WorldMapScript.js"></script>