<!doctype html>
<html>
<head><title>VOAU Bio: Alex Mason</title>
<link href="../css/biocss.css" rel="stylesheet" type="text/css">
<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
<style>
	html {
	background-image: url("Shock on the Night, Go.jpg");
	background-repeat: no-repeat;
	background-size: 100% auto;
	overflow: hidden;
}
	.RevD {
	color: #d0def4;
	clear: right;
	font-family: Arial;
	text-shadow: 3px 3px black;
	border: rgba(0, 0, 0, 0.75);
	background-color: rgba(0, 0, 0, 0);
}
span.RevD:hover {
	color: #7F2929;
}
</style>
</head>
	<body>
		<img id ="Pic" src="Artboard-AlexM.png" alt="Alex Mason">
		<img id ="Pic2" src="RevolvingDoors.png" alt="Revolving Doors">
		<h3>Alex Mason and his <span class ="RevD" onmouseover="openNav()" onmouseout="closeNav()">Revolving Doors</span></h3>
		<script>
			document.getElementById("Pic2").style.visibility = "hidden";
			function openNav() {
				document.getElementById("Pic2").style.width = "15%";
				document.getElementById("Pic2").style.visibility = "visible";
			}
			function closeNav() {
				document.getElementById("Pic2").style.width = "0%";
				document.getElementById("Pic2").style.visibility = "hidden";
			}
		</script>
		<div id="Info">
			<p>
				<em>You know, I'm not as dumb as everyone thinks I am. People just get too serious about anything nowadays, they forget how easy it is to relax.</em>
			</p>
			<p>
				<br><br>
				In short, Alex has many takes on life he chooses to follow through with. Either it be following his older brother and his antics or to go on his own. Whichever way it seems, he always plays on the idea of fate like everyone else does. Not a whole lot can be said as to where he came from or who he really could be, just that he's Ashton's younger brother who got him and Aki into a business they'd both be repentantly wealthy from.
				<br>
				<br>
				Alex is a likable, yet immature person.  Nobody seems to hate him too much, but Nate is starting to warm up to him.  Recently, Simon has been conversing with Alex.  Alex's time-travelling desires caught on to Simon and he decided to help.  After that, he started making more things for Alex just for the fun of science.  One of Alex's favorite weapons is a railgun prototype he found from a plane crash involving the local mercenary group that Simon said was taken from him years ago.
				<br>
				<br>
				Moving on from a single railgun, Alex seems to nab the best scientifically bizarre weaponry for himself in every circumstance somehow. Though this bothers no one he does peak the interest of many while also living his life undisturbed by most all the conflict that swamps those around him. Seems to be connected to more than just his three original close friends, including but not limited to Kari and a later friend by the name of "Jeff".
				<br>
				<br>
				<?php 
					include("/home/stoutmartech/public_html/users/schoolera7861/major-arcana/includes/togbut.php");
				?>
			</p>
		</div>
		<div id="Biostuff">
			<ul>
				<li><strong>Height:</strong> 5 ft, 10 in</li>
				<li><strong>Birthday:</strong> July 21st, 2059</li>
				<li><strong>Place of Origin:</strong> ?</li>
				<li><strong>Favorite Color:</strong> Maroon</li>
				<li><strong>Likes:</strong> Having Fun, Video Games, Partying, Being Friendly</li>
				<li><strong>Dislikes:</strong> None Reported</li>
				<li><strong>General Behavior:</strong> Sly, immature, greedy, clever</li>
				<footer>
					<?php 
					include("/home/stoutmartech/public_html/users/schoolera7861/major-arcana/includes/footer.php");
					?>
				</footer>
			</ul>
		</div>
	</body>
</html>