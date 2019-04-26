<?php 
if(!isset($_SESSION['login'])){
		echo '<input id= "bouton" type="text" name="login" value="" placeholder="Identifiant"/>
		<br />
		<input id= "bouton" type="password" name="passwd" value="" placeholder="Mot de passe"/>
		<br/>
		<input id= "bouton" type="submit" name="submit" value="VOUS CONNECTER"/>
		<br />
		<input id= "bouton" type="submit" name="submit" value="CREER UN COMPTE"/>
		<br />';
	}
	if (isset($_SESSION['login'])){
		echo'Vous etes connecte <br /> ';
		echo '<input id= "log_bouton" type="submit" name="logout" value="Logout"/>';
	}
?>