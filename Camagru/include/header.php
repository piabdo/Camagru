<link rel="stylesheet" type="text/css" href="css/header.css">

<div class="header">
		<h1 id="demo">CaMonQ</h1>
		<script>
			document.getElementById("demo").onclick = function() {myFunction()};

			function myFunction() {
			location.replace("../index.php");
			}
		</script>
		<div class="header_right">
			<form method="POST" action="">
					<?php if(0): ?>
						<input class ="log_input" type="text" name="login" value="" placeholder="Identifiant"/>
						<input class ="log_input" type="password" name="passwd" value="" placeholder="Mot de passe"/>
						<input class="button" type="submit" name="submit" value="VOUS CONNECTER"/>
						<!-- <input class="button" type="submit" name="submit" value="VOUS CONNECTER"/>
						<input class="button" type="submit" name="submit2" value="CREER COMPTE"/> -->
					<!--	<button class="button" onclick="location.href = 'register.php';" >Home</button> -->
					<?php endif ?>
					<?php if(1): ?>
							<input class="button" type="submit" name="submit" value="VOUS DECONNECTER"/>
							<input class="button" type="submit" name="submit" value="MODIFIER COMPTE"/>
					<?php endif ?>
			</form>
			<?php if(0): ?>
				<button class="button" onclick="location.href = 'register.php';" >CREER COMPTE</button>
			<?php endif ?>
			<?php if(1): ?>
				<button class="button" onclick="location.href = 'register.php';" >CREER COMPTE</button>
			<?php endif ?>
		</div>
</div>
