<html>
<head>
	<title>CaMonQ</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">  
</head>
<body>
	<?php require 'include/header.php'?>
	<div class="menu">
		<?php if(1):?>
		<form action="" methode="POST">
			<div class="m_pictures">
				
				<div class="Holder">
					<label for="">Identifiant</label>
					<input class="inp "type="text" value="" placeholder="Identifiant" required/>
				</div>
				<div class="Holder">
					<label for="">Mot de passe</label>
					<input class="inp "type="password" value="" placeholder="Mot de passe" required/>
				</div>
				<div class="Holder">
					<label for="">Confirmez votre mot de passe</label>
					<input class="inp "type="password" value="" placeholder="Mot de passe" required/>
				</div>
				<div class="Holder">
					<label for="">Email</label>
					<input class="inp "type="email" value="" placeholder="Email" required/>
				</div>
				<div class="Holder">
					<button class="inp "type="submit">Confirmer</button>
				</div>
			</div>
		</form>
		<?php endif ?>
		<?php if(0):?>
			<div class="Confirmation">
				Un email de confirmation vous a été envoyé par message.
			</div>
		<?php endif ?>
	</div>
	<?php require 'include/footer.php'?>
</body>
</html>