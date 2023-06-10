<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Character Bios: Confirmation</title>
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/whatcss.css" rel="stylesheet" type="text/css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<style>
	h1 {
		font-family: Courier, monospace;
		font-weight: bold;
	}
	p {
		text-align: center;
		margin-top: 40px;
		font-size: 1.1em;
	}
	#wpbxh1 {
		text-align: center;
	}
	#wrapbox {
		height: 300px;
	}
	.para {
		width: 50%;
	}
	.togbut {
		vertical-align: middle;
		margin: 40px auto 0 auto;
		display: block;
	}
</style>
</head>
<body>
	<header>
		<h1>Character Biographies &mdash; VOAU/Voidwalker</h1>
		<h3>Confirmation</h3>
	</header>
	<div id="wrapbox">
		<h1 id="wpbxh1">Thank You for your Support!</h1>
		<p>
			Your subscription has been confirmed and you are now ready to receive email updates!
		</p>
		<p>
			Thank you for your support.  Would you care to explore more while you're at it?
		</p>
		<a href="index.php"><button class="togbut" onclick="toDO()" type="button">Return to Home</button></a>
			<script>
			function toDO(){
				alert('You will now be redirected');
			}
			</script>
	</div>
	<?php 
		include("/home/stoutmartech/public_html/users/schoolera7861/major-arcana/includes/footer.php");
	?>
</body>
</html>
