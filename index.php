<!doctype html>
<html>
<head><title>Character Bios: Home</title>
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/whoscss.css" rel="stylesheet" type="text/css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>
	<body>
		<header>
			<h1>Character Biographies &mdash; VOAU/Voidwalker</h1>
			<h3>Who are you looking for?</h3>
		</header>
		<div id="galvanize">
			<!-- Maj. Aaron Maximus -->
			<a href="justice/Aaron.php"><div id="Aaron" onclick="highLight1()" onmouseover="hoverthing1()" onmouseout="returnbg()"><span class="AMt">Aaron</span></div></a>
			<!-- Col. Nate Hamilton -->
			<a href="the-hermit/Nate.php"><div id="Nate" onclick="highLight2()" onmouseover="hoverthing2()" onmouseout="returnbg()"><span class="NHt">Nate</span></div></a>
			<!-- Dr. Simon Peterson -->
			<a href="the-hierophant/Simon.php"><div id="Simon" onclick="highLight3()" onmouseover="hoverthing3()" onmouseout="returnbg()"><span class="SPt">Simon</span></div></a>
			<!-- Ren Kimura -->
			<a href="temperance/Ren.php"><div id="Ren" onclick="highLight4()" onmouseover="hoverthing4()" onmouseout="returnbg()"><span class="RKt">Ren</span></div></a>
			<!-- Isha, "Akuko" -->
			<a href="judgement/Isha.php"><div id="Isha" onclick="highLight5()" onmouseover="hoverthing5()" onmouseout="returnbg()"><span class="IAt">Isha</span></div></a>
			<!-- Nocturn Commander Aki Yamada -->
			<a href="the-empress/Aki.php"><div id="Aki" onclick="highLight6()" onmouseover="hoverthing6()" onmouseout="returnbg()"><span class="AYt">Aki</span></div></a>
			<!-- Jacob Wright the Eagle -->
			<a href="the-hanged-man/Jacob.php"><div id="Jacob" onclick="highLight7()" onmouseover="hoverthing7()" onmouseout="returnbg()"><span class="JWt">Jacob</span></div></a>
			<!-- Legendary Hero Kari Frost -->
			<a href="the-star/Kari.php"><div id="Kari" onclick="highLight8()" onmouseover="hoverthing8()" onmouseout="returnbg()"><span class="KFt">Kari</span></div></a>
			<!-- Alex Mason -->
			<a href="the-fool/Alex.php"><div id="Alex" onclick="highLight9()" onmouseover="hoverthing9()" onmouseout="returnbg()"><span class="AxMt">Alex</span></div></a>
			<!-- Lt. Ashton Mason -->
			<a href="the-emperor/Ashton.php"><div id="Ashton" onclick="highLight10()" onmouseover="hoverthing10()" onmouseout="returnbg()"><span class="AsMt">Ashton</span></div></a>
			<!-- Mr. "Labs" Nobody -->
			<a href="the-tower/Labs.php"><div id="Labs" onclick="highLight11()" onmouseover="hoverthing11()" onmouseout="returnbg()"><span class="MrNt">Labs</span></div></a>
			<!-- Hyun-Ae Sop -->
			<a href="the-sun/HyunAe.php"><div id="HyunAe" onclick="highLight12()" onmouseover="hoverthing12()" onmouseout="returnbg()"><span class="HSt">Hyun-Ae</span></div></a>
			<!-- Asher Sokolski -->
			<a href="the-devil/Asher.php"><div id="Asher" onclick="highLight13()" onmouseover="hoverthing13()" onmouseout="returnbg()"><span class="ASt">Asher</span></div></a>
			<!-- JTF-2 Agent Grace Belle Isle -->
			<a href="the-high-priestess/Grace.php"><div id="Grace" onclick="highLight14()" onmouseover="hoverthing14()" onmouseout="returnbg()"><span class="GBIt">Grace</span></div></a>
			<!-- Avis Ardoris, "Katya" -->
			<a href="the-world/Katya.php"><div id="Katya" onclick="highLight15()" onmouseover="hoverthing15()" onmouseout="returnbg()"><span class="AAt">Katya</span></div></a>
			<!-- Voce D'oro -->
			<a href="the-lovers/Voce.php"><div id="Voce" onclick="highLight16()" onmouseover="hoverthing16()" onmouseout="returnbg()"><span class="VDt">Voce</span></div></a>
			<!--End of Characters-->
		</div>
		<div class="bgalvanize" style="background-color: rgba(0, 0, 0, .75); width: 900px;">
			<p>
			  Before you is a collection of profiles on characters, with the protagonist and antagonist, from my comic and web series.  Browse their stories on a surface level, with each is an option to explore further on them.  If you are unsure, the "I don't know" button will randomly select one.  If you wish to learn more as a whole then click the "What is this about?" button.  You will find a return button, "I wish to go back", on every page which will return you to the previously viewed page.
			</p>
		</div>
	<div class="bgalvanize">
		<!--<button id="togbut" type="button" onclick="endFunction()">This is my selection</button>-->
			<button class="togbut" onclick="Forme()" type="button">I don't know</button>
			<a href="aboutpage.php"><button class="togbut" onclick="toDO()" type="button">What is this about?</button></a>
		</div>
		<script type="text/javascript">
			document.body.style.backgroundImage = "url('images/staticnotstatic.jpg')";
			alert('Once you make a selection, you will have to revert here to make another');
			function highLight1(){
				var skeletor = document.getElementById("Aaron");
				alert('A very classical decision');
			}
			function highLight2(){
				var skeletor = document.getElementById("Nate");
				alert('A very versed decision');
			}
			function highLight3(){
				var skeletor = document.getElementById("Simon");
				alert('A very methodical decision');
			}
			function highLight4(){
				var skeletor = document.getElementById("Ren");
				alert('A very peaceful decision');
			}
			function highLight5(){
				var skeletor = document.getElementById("Isha");
				alert('A very ethereal decision');
			}
			function highLight6(){
				var skeletor = document.getElementById("Aki");
				alert('A very alluring decision');
			}
			function highLight7(){
				var skeletor = document.getElementById("Jacob");
				alert('A very discipled decision');
			}
			function highLight8(){
				var skeletor = document.getElementById("Kari");
				alert('A very resolved decision');
			}
			function highLight9(){
				var skeletor = document.getElementById("Alex");
				alert('A very jubilant decision');
			}
			function highLight10(){
				var skeletor = document.getElementById("Ashton");
				alert('A very stalwart decision');
			}
			function highLight11(){
				var skeletor = document.getElementById("Labs");
				alert('A very mysterious decision');
			}
			function highLight12(){
				var skeletor = document.getElementById("HyunAe");
				alert('A very colorful decision');
			}
			function highLight13(){
				var skeletor = document.getElementById("Asher");
				alert('A very daring decision');
			}
			function highLight14(){
				var skeletor = document.getElementById("Grace");
				alert('A very nomadic decision');
			}
			function highLight15(){
				var skeletor = document.getElementById("Katya");
				alert('A very ascendant decision');
			}
			function highLight16(){
				var skeletor = document.getElementById("Voce");
				alert('A very golden decision');
			}
			function toDO(){
				alert('You will now be redirected');
			}
			function Forme(){
				var theSites = ['Aaron', 'Nate', 'Simon', 'Ren', 'Isha', 'Aki', 'Jacob', 'Kari', 'Alex', 'Ashton', 'Hyun-Ae', 'Grace', 'Katya', 'Voce', 'Labs', "Asher"]
				var sites = theSites[Math.floor(Math.random() * theSites.length)];
				confirm('If you can find out which one they are, I believe you are looking for ' + sites + "'s profile");
			}
			function hoverthing1(){
				document.body.style.backgroundImage = "url('images/aaronNow.jpg')";
				document.body.style.backgroundPosition = "top center";
				document.body.style.backgroundSize = "cover";
			}
			function hoverthing2(){
				document.body.style.backgroundImage = "url('images/Natan.jpg')";
				document.body.style.backgroundPosition = "50% 20%";
				document.body.style.backgroundSize = "cover";
			}
			function hoverthing3(){
				document.body.style.backgroundImage = "url('images/the dr.jpg')";
				document.body.style.backgroundPosition = "top center";
				document.body.style.backgroundSize = "cover";
			}
			function hoverthing4(){
				document.body.style.backgroundImage = "url('images/Aces and Eights.jpg')";
				document.body.style.backgroundPosition = "50% 20%";
				document.body.style.backgroundSize = "cover";
			}
			function hoverthing5(){
				document.body.style.backgroundImage = "url('images/RemakeIsha.jpg')";
				document.body.style.backgroundPosition = "50% 20%";
				document.body.style.backgroundSize = "cover";
			}
			function hoverthing6(){
				document.body.style.backgroundImage = "url('images/Atomic Hearts.png')";
				document.body.style.backgroundPosition = "50% 15%";
				document.body.style.backgroundSize = "cover";
			}
			function hoverthing7(){
				document.body.style.backgroundImage = "url('images/Legacy.png')";
				document.body.style.backgroundPosition = "top center";
				document.body.style.backgroundSize = "cover";
			}
			function hoverthing8(){
				document.body.style.backgroundImage = "url('images/Ill be the Judge.png')";
				document.body.style.backgroundPosition = "top center";
				document.body.style.backgroundSize = "cover";
			}
			function hoverthing9(){
				document.body.style.backgroundImage = "url('images/Artboard-AlexM.png')";
				document.body.style.backgroundPosition = "top center";
				document.body.style.backgroundSize = "cover";
			}
			function hoverthing10(){
				document.body.style.backgroundImage = "url('images/RemakeAshton.jpg')";
				document.body.style.backgroundPosition = "top center";
				document.body.style.backgroundSize = "cover";
			}
			function hoverthing11(){
				document.body.style.backgroundImage = "url('images/RemakeMrNobody.jpg')";
				document.body.style.backgroundPosition = "50% 15%";
				document.body.style.backgroundSize = "cover";
			}
			function hoverthing12(){
				document.body.style.backgroundImage = "url('images/RemakeHyunAe.jpg')";
				document.body.style.backgroundPosition = "50% 30%";
				document.body.style.backgroundSize = "cover";
			}
			function hoverthing13(){
				document.body.style.backgroundImage = "url('images/IamAbmf.jpg')";
				document.body.style.backgroundPosition = "50% 30%";
				document.body.style.backgroundSize = "cover";
			}
			function hoverthing14(){
				document.body.style.backgroundImage = "url('images/GraceRemaster.jpg')";
				document.body.style.backgroundPosition = "top center";
				document.body.style.backgroundSize = "cover";
			}
			function hoverthing15(){
				document.body.style.backgroundImage = "url('images/LordofBirds.jpg')";
				document.body.style.backgroundPosition = "top center";
				document.body.style.backgroundSize = "cover";
			}
			function hoverthing16(){
				document.body.style.backgroundImage = "url('images/This is Requiem.png')";
				document.body.style.backgroundPosition = "center";
				document.body.style.backgroundSize = "1920px 1080px";
			}
			function returnbg(){
				document.body.style.backgroundImage = "url('images/staticnotstatic.jpg')";
				document.body.style.backgroundSize = "initial";
			}
		</script>
		<footer>
			<?php 
			include("/home/stoutmartech/public_html/users/schoolera7861/major-arcana/includes/footer.php");
			?>
		</footer>
	</body>
</html>