<?php
session_start();
?>
<div class="menuewrapper">

    <div class="left">

        <button type="button" class="button">Start</button>
        <button type="button" class="button">High Score</button>
        <button type="button" class="button">Optionen</button>
        <button type="button" class="button">Log Out</button>
    </div>
    <div class="right">
        <h1>Anleitung</h1>
        <p>Wähle einen Kontinen aus auf dem du spielen möchtest</p>
        <p>gespielte Kontinente werden orange und blau hinterlegt,
        noch nicht gespielte Kontinente erscheinen in grau.</p>
        <p>Wenn der Kontinent gewählt ist startet das Quiz
        6 Fragen sind zu beantworten. Je 2 Richtige gibt es ein Herz.</p>
        <p>Dann startet das Spiel.
            Innerhalb der gegebenen Zeit muss ein Hauptstadt
            im dazugehörigen Land gefunden werden </p>
        <p>Wenn alles beantwortet ist kann der nächste Kontinent gespielt werden.</p>
        <p>Viel Spaß</p>
    </div>
    <!--<div id="test">
    	<?php 
    	echo "<p>Debug-Test!</p>";
    	echo "<p>Diese Daten sind nun in der Session:</p>";
    	print_r($_SESSION);
    	?>-->
    </div>
</div>