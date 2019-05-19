<html>
<head>
	<title>CaMonQ</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div class="header">
		<h1>CaMonQ</h1>
		
			<form id="1" method="post" action="login.php" class="header_right">
					<?php 
					// if(!isset($_SESSION['login'])){
					// 		echo '<input class ="log_input" type="text" name="login" value="" placeholder="Identifiant"/>
					// 		<input class ="log_input" type="password" name="passwd" value="" placeholder="Mot de passe"/>
					// 		<br />
					// 		<input class="button" type="submit" name="submit" value="VOUS CONNECTER"/>
					// 		<input class="button" type="submit" name="submit" value="CREER UN COMPTE"/>';
					// 	}
					// 	if (isset($_SESSION['login'])){
							echo'Vous etes connecte <br /> ';
							echo '<input class="button" type="submit" name="submit" value="VOUS DECONNECTER"/>
					 		<input class="button" type="submit" name="submit" value="MODIFIERVOTRE COMPTE"/>';
						// }
					?>
			</form>
			<!-- <button class="button">Logout</button> -->
	</div>
	<div class="menu">
		<div class="m_pictures">
			<div class="print_p">
				<p class="d_img"></p>
				<p class="d_img"></p>
				<p class="d_img"></p>
				<p class="d_img"></p>
				<!-- <p class="d_img"></p>
				<p class="d_img"></p>
				<p class="d_img"></p>
				<p class="d_img"></p>
				<p class="d_img"></p>
				<p class="d_img"></p>
				<p class="d_img"></p>
				<p class="d_img"></p>
				<p class="d_img"></p> -->
			</div>
			<p class="d_arrows"></p>
			<p class="d_arrows"></p>
		</div>
	</div>
	<div class="footer">
		<p class="cop">© CaptainFracas</p>
	</div>
</body>
</html>