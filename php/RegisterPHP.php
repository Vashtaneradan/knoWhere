<?php
	$_SESSION['errormsgReg'] = '';
	$userListe = file('userData/users.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	
	$usernameError = false;
	$usernameUsed = false;
	$passwordMismatch = false;
	$passwordError = false;
	
	if(isset($_POST['btnregister']))
	{
	
		//benutzername eingegeben?
		if(isset($_POST['username']))
		{
			//benutzername in username schreiben
			$Username = $_POST['username'];
			
			//prüfen ob nutzername schon vergeben
			foreach ($userListRead as $user)
			{
				$userdaten = explode('|', $user);
				
				if($userdaten[0] == $Username)
				{
					//benutzername schon vergeben!
					$usernameUsed = true;
					break;
				}
			}
			if(isset($_POST['password']))
			{
				//benutzername noch nicht vergeben
				//passworteingaben überprüfen
				$Password = $_POST['password'];
				$PasswordRepeat = $_POST['passwordrepeat'];
			
				if($Password != $PasswordRepeat)
				{
					//passworteingaben unterschiedlich!
					$passwordMismatch = true;
				}
			}
			else
			{
				//password nicht eingegeben!
				$passwordError = true;	
			}	
		}
		else
		{
			//benutzername nicht eingegeben!
			$usernameError = true;
		}
	}

if ($usernameError)
{
	$_SESSION['errormsgReg']="<span style='color:red'>Fehler bei der Benutzereingabe!</span>";
		/*unset ($Username);
		unset ($userdaten);
		unset ($userListRead);
		unset ($usernameUsed);
		unset ($Password);
		unset ($PasswordRepeat);
		unset ($passwordMismatch);
		unset ($userListWrite);
		unset ($newuser);
		unset ($passwordError);
		unset ($usernameError);*/
		header("location:index.php?page=register");
		exit;
}

if($passwordError)
{
	$_SESSION['errormsgReg']="<span style='color:red'>Fehler bei der Passworteingabe!</span>";
		/*unset ($Username);
		unset ($userdaten);
		unset ($userListRead);
		unset ($usernameUsed);
		unset ($Password);
		unset ($PasswordRepeat);
		unset ($passwordMismatch);
		unset ($userListWrite);
		unset ($newuser);
		unset ($passwordError);
		unset ($usernameError);*/
		header("location:index.php?page=register");
		exit;
}

if($usernameUsed)
{
	$_SESSION['errormsgReg']="<span style='color:red'>Der Benutzername ist schon vergeben! Bitte einen anderen wählen!</span>";
		/*unset ($Username);
		unset ($userdaten);
		unset ($userListRead);
		unset ($usernameUsed);
		unset ($Password);
		unset ($PasswordRepeat);
		unset ($passwordMismatch);
		unset ($userListWrite);
		unset ($newuser);
		unset ($passwordError);
		unset ($usernameError);*/
		header("location:index.php?page=register");
		exit;	
}

if($passwordMismatch)
{
	$_SESSION['errormsgReg']="<span style='color:red'>Passwörter stimmen nicht überein!</span>";
		/*unset ($Username);
		unset ($userdaten);
		unset ($userListRead);
		unset ($usernameUsed);
		unset ($Password);
		unset ($PasswordRepeat);
		unset ($passwordMismatch);
		unset ($userListWrite);
		unset ($newuser);
		unset ($passwordError);
		unset ($usernameError);*/
		header("location:index.php?page=register");
		exit;
}

if( (!$usernameError)&&(!$passwordError)&& (!$usernameUsed)&&(!$passwordMismatch))
{
		$_SESSION['username'] = $Username;
			$userListWrite = fopen('userData/users.txt', "a");
			$newuser = PHP_EOL. $Username . "|" . $Password;
			fwrite($userListWrite, $newuser);
			fclose($userListWrite);
		unset($_SESSION['errormsgReg']);
		unset($_SESSION['errormsg']);
		header("location:index.php?page=registrierungErfolgreich");
		exit;
}
	
	
?>