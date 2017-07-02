/*var jsonPlayedContinents = document.getElementById("playedContinentsVariable").textContent;
console.log("gespielte Kontinente:")
console.log(jsonPlayedContinents);

var jsPlayedContinents = JSON.parse(jsonPlayedContinents);
var trimmedjsPlayedContinents = jsPlayedContinents[0].trim();
console.log(trimmedjsPlayedContinents);
*/

var playedAsienVariableJS = document.getElementById("playedAsienVariablePHP").textContent;
var playedAfrikaVariableJS = document.getElementById("playedAfrikaVariablePHP").textContent;
var playedAustralien_OzeanienVariableJS = document.getElementById("playedAustralien_OzeanienVariablePHP").textContent;
var playedEuropaVariableJS = document.getElementById("playedEuropaVariablePHP").textContent;
var playedSuedamerikaVariableJS = document.getElementById("playedSuedamerikaVariablePHP").textContent;
var playedNordamerikaVariableJS = document.getElementById("playedNordamerikaVariablePHP").textContent;

var playedContinents = [];
var unplayedContinents = [];

if(playedAsienVariableJS == "Yes")
{
	playedContinents.push(Asien);
}
else
{
	unplayedContinents.push(Asien);
}
if(playedAfrikaVariableJS == "Yes")
{
	playedContinents.push(Afrika);
}
else
{
	unplayedContinents.push(Afrika);
}
if(playedAustralien_OzeanienVariableJS == "Yes")
{
	playedContinents.push(Australien_Ozeanien);
}
else
{
	unplayedContinents.push(Australien_Ozeanien);
}
if(playedEuropaVariableJS == "Yes")
{
	playedContinents.push(Europa);
}
else
{
	unplayedContinents.push(Europa);
}
if(playedSuedamerikaVariableJS == "Yes")
{
	playedContinents.push(Suedamerika);
}
else
{
	unplayedContinents.push(Suedamerika);
}
if(playedNordamerikaVariableJS == "Yes")
{
	playedContinents.push(Nordamerika);
}
else
{
	unplayedContinents.push(Nordamerika);
}
/*
console.log(playedAsienVariableJS);
console.log(playedAfrikaVariableJS);
console.log(playedAustralien_OzeanienVariableJS);
console.log(playedEuropaVariableJS);
console.log(playedSuedamerikaVariableJS);
console.log(playedNordamerikaVariableJS);
*/

//for playedContinents
for (var g = 0; g < playedContinents.length;g++)
{
	playedContinents[g].node.style.fill = "blue";
}

//for unplayedContinents
for (var i = 0; i < unplayedContinents.length; i++) 
{
	
		
	
    //Einfärben der Teile
	//An jedes Element von unplayedContinents ein mouseover einfügen
    unplayedContinents[i].mouseover(function(e)
	{
		this.node.style.fill = "orange";
		//this.node.style.opacity = '0.7';
		
		//Auswahl in das HTML schreiben
		document.getElementById('kontinentname').innerHTML = this.data('region');
	});

	//Mouseout einfügen
	unplayedContinents[i].mouseout(function(e)
	{
		this.node.style.fill = "#777777";
		//this.node.style.opacity = '1.0';
		
		document.getElementById('kontinentname').innerHTML = 'Nichts ausgewählt';
	});
	
	unplayedContinents[i].click(function(e)
	{
		console.log("Du hast auf "+ this.data('region') + " geklickt!");
		var auswahl = this.data('region');
		window.location.href="index.php?page=Quiz&Continent="+auswahl;
	});
}
