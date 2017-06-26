var parts = [];
parts.push(Asien);
parts.push(Afrika);
parts.push(Australien_Ozeanien);
parts.push(Europa);
parts.push(Suedamerika);
parts.push(Nordamerika);

for (var i = 0; i < parts.length; i++) 
{

    //Einfärben der Teile
	//An jedes Element von parts ein mouseover einfügen
    parts[i].mouseover(function(e)
	{
		this.node.style.fill = "orange";
		//this.node.style.opacity = '0.7';
		
		//Auswahl in das HTML schreiben
		document.getElementById('kontinentname').innerHTML = this.data('region');
	});

	//Mouseout einfügen
	parts[i].mouseout(function(e)
	{
		this.node.style.fill = "#777777";
		//this.node.style.opacity = '1.0';
		
		document.getElementById('kontinentname').innerHTML = '';
	});
	
	parts[i].click(function(e)
	{
		console.log("Du hast auf "+ this.data('region') + " geklickt!");
		var auswahl = this.data('region');
		window.location.href="index.php?page=Quiz&Continent="+auswahl;
	});
}
