<?php
session_start();

if (isset($_GET['logout']) && $_GET['logout']==='true')
{
	unset($_SESSION['suid']);
	unset($_SESSION['login']);
	unset($_SESSION['mail']);
	unset($_GET['logout']);
}

if (isset($_SESSION['suid']) || !empty($_SESSION['suid']))
{
	if ($_SESSION['login']=== 'Vanestarre')
	{
		header('Location: connected-vanestarre.php');
		exit();
	}
	header('Location: connected.php');
	exit();
}
?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Vanéstarre</title>
		<link rel="stylesheet" href="./css/style.css">
	</head>

	<body>
		<div align="right"><p><a href="http://bdr-projet.alwaysdata.net/login.php">Connexion</a>/<a href="http://bdr-projet.alwaysdata.net/main.php">Inscription</a></p></div>
		<div id="logo"><img src="./images/Vanestarre.png"></div>
		<h1 class="shadow">Vanéstarre</h1>
		<div id="search" align="center">
			<label for="site-search">Recherche par tag:</label>
			<input type="search" id="tag-search" name="q" placeholder="βtag" pattern="β[A-z]">

			<button>Recherche</button>
			<span class="validity"></span>
		</div>
		<div id="vaneline">
			<div id="post">
			<img src="./images/cute.png"><br>
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae tempor sem. Aliquam non sagittis lectus, pulvinar porttitor urna. Curabitur sodales ex ipsum, eu condimentum arcu maximus mollis. Sed a metus laoreet, imperdiet odio sit amet, cursus eros. Vivamus ac interdum tellus. Morbi at arcu vel velit semper rutrum sit amet a lorem. Fusce eget tempor leo. Vestibulum eu sapien ac ipsum pretium interdum. Integer porta diam eu ex pellentesque varius. Vivamus in pharetra leo. Nunc consequat tortor in sem tincidunt, bibendum consequat nunc lacinia. Praesent eget tristique lacus. Vestibulum non fermentum turpis, vulputate facilisis velit. Fusce aliquet massa mollis erat efficitur viverra. Quisque mattis, turpis vitae facilisis pretium, libero elit laoreet eros, ac elementum urna nisi maximus felis.</p> <br>
			<p align="left">Tags : <a href="rentrer search tag">βchien</a>, <a href="rentrer search tag">βloremipsum</a></p></div>

			<div id="post">
			<p>Ut placerat odio pulvinar venenatis sodales. Etiam nec purus ut ante facilisis sagittis at eu diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt quam vitae ex gravida convallis. Quisque elementum, libero eget cursus pretium, massa sem molestie felis, vel vulputate nisi lorem vel lectus. Sed fringilla nibh sit amet lorem iaculis, vitae pharetra nibh tempus. Suspendisse eget sem risus. Morbi quis nibh augue. Duis a turpis nulla. Etiam at mi sollicitudin, vehicula libero malesuada, gravida orci. Duis ornare lorem imperdiet pulvinar efficitur. Donec cursus lectus sit amet justo faucibus, vitae dapibus odio egestas.</p> </div>
			
			<p>Vestibulum faucibus, nibh in fermentum feugiat, mauris lectus rutrum augue, luctus mattis augue neque sodales nunc. Ut ante libero, sollicitudin vel tempus nec, tincidunt non risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris tincidunt libero nec eros porttitor pharetra. Integer placerat sem vel finibus malesuada. Cras ultrices, erat at rutrum elementum, elit lectus aliquet nisi, id euismod sapien nisl pulvinar libero. Integer vel finibus libero, sit amet dictum quam. Suspendisse fringilla, lacus ut facilisis gravida, tellus quam lacinia tellus, sed laoreet mauris est sodales lacus. Nam accumsan ac elit ac varius. In in ornare leo. Fusce ac aliquam tortor.</p>

			<p>Sed interdum ipsum id ullamcorper maximus. Morbi mattis pharetra ex, a malesuada risus tincidunt et. In sit amet mi iaculis, dictum nunc vitae, ultricies eros. Aenean fermentum in sem quis auctor. Proin in fermentum eros. Aenean fringilla neque neque, posuere euismod nulla ornare quis. Phasellus commodo elit vitae scelerisque rutrum. Ut nec dignissim dolor. Fusce id rhoncus felis. Vivamus justo libero, pulvinar sed sem vel, tristique sodales augue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In luctus mauris lorem, ac sodales tellus elementum finibus. Integer lacus est, mollis eu justo at, ullamcorper cursus dui. Morbi auctor arcu a quam venenatis mattis.</p>

			<p> Nunc malesuada rutrum tellus sed molestie. Donec at neque facilisis diam tempor scelerisque at id eros. Maecenas fermentum nulla id nibh elementum sagittis. Phasellus et velit molestie, rutrum mauris et, porttitor nulla. Nunc ullamcorper eu urna vel viverra. Nullam orci neque, imperdiet venenatis venenatis at, elementum ut urna. Quisque finibus ut urna nec pretium. Mauris sed mi id dui ultricies aliquet a consequat purus. Etiam pulvinar sodales mauris, at sollicitudin mauris molestie id. Pellentesque dignissim tempus sapien eu lacinia. Proin condimentum vehicula nulla, vitae maximus augue dignissim vel.</p>

</p>
		</div>


	</body>






</html>
