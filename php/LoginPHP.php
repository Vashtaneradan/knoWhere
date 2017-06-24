<?php
	$_SESSION['errormsg'] = '';
	$userListe = file('userData/users.txt');
	
	
	$success = false;
	/*success bedeutet benutzername und passwort stimmen mit
	 * Daten in der userliste überein
	 * */
	
	if(isset($_POST['btnlogin']))
	{
		//benutzername eingegeben?
		if(isset($_POST['username']))
		{
			//benutzername in username schreiben
			$Username = $_POST['username'];
		}
		else
		{
			//benutzername leer lassen
			$Username = '';
		}
		
		//Passwort eingegeben?
		if(isset($_POST['password']))
		{
			//passwort in password variable schreiben
			$Password = $_POST['password'];
		}
		else
		{
			//password variable leer lassen
			$Password = '';
		}
	}
	
	/*durch die Benutzerliste gehen und für jede Zeile
	 * den nutzernamen und das passwort getrennt mit einem |
	 * mit den obigen variablen für benutzernamen und passwort
	 * vergleichen.
	 * Bei übereinstimmung variable success auf true setzen
	 * */
	foreach ($userListe as $user)
	{
		$userdaten = explode('|', $user);
		if($userdaten[0] == $Username && $userdaten[1] == $Password)
		{
			$success = true;
			break;
		}
	}
	
	/*falls benutzername und passwort übereinstimmen, dann
	 * username in Session schreiben, letzen Fehler
	 * falls vorhanden löschen und weiterleiten 
	 * */
	if ($success)
	{
		$_SESSION['username'] = $Username;
		unset($_SESSION['errormsg']);
		unset($_SESSION['errormsgReg']);
		header("location:index.php?page=LoginErfolhreich");
		exit;
	}
	/*Wenn Fehler auftritt, benutzername oder kennwort falsch, dann
	 * fehlermeldung setzen und login.php mit neuer fehlermeldung
	 * aufrufen
	 * */
	else 
	{
		$_SESSION['errormsg']="<span style='color:red'>Login-Daten ungültig!</span>";
		header("location:index.php");
		exit;
	}
	
	
?>