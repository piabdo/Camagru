<html>
<head>
	<title>CaMonQ</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">  
</head>
<?php
	if(!empty($_POST))
?>

<body>
	<?php require 'include/header.php'?>
	<div class="menu">
		<?php if(0):?>
		<div class="m_webcam">
			<div class="d_webcam"></div>
			<button class="button">TakePicture</button>
		</div>
		<?php endif?>
		<?php if(1):?>
		<div class="m_pictures">
			<p class="d_img"></p>
			<p class="d_img"></p>
			<p class="d_img"></p>
			<p class="d_img"></p>
			<p class="d_img"></p>
			<p class="d_img"></p>
			<p class="d_img"></p>
			<p class="d_img"></p>
			<p class="d_img"></p>
			<p class="d_img"></p>
			<p class="d_img"></p>
			<p class="d_img"></p>
			<p class="d_img"></p>
		</div>
		<?php endif?>
	</div>
	<?php require 'include/footer.php'?>
</body>
</html>