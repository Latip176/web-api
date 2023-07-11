<?php

require_once 'vendor/autoload.php';
include 'connect/koneksi.php';

session_start();

if (!isset($_SESSION['access_token']) || empty($_SESSION['access_token'])) {
	header("Location:login");
	exit;
}

$result = $collection->findOne(['email' => $_SESSION['user_email']]);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>NomiSec07-Tech | Rest Api's</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="description" content="Thanks for visiting and using this Api service">
	<meta property="og:description" content="NomiSec7-Tech">
	<meta property="og:image" content="https://i.ibb.co/58y2r8q/nomisec07-tech-rest-api-s-3.png">
	<meta name="copyright" content="api">
	<meta name="author" content="NowMeee">
	<meta name="theme-color" content="#1f1f1f">
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="dist/css/s-next.css">
	<link rel="stylesheet" href="dist/css/live2d.css">
	<script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
	
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css">
</head>
<script type='application/ld+json'>
{
  "@context": "https://schema.org/",
  "@type": "Book",
  "name": "NowMeee",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "ratingCount": "72801",
    "bestRating": "5",
    "worstRating": "1"
  }
}
</script>
<style>
	@import url('https://fonts.googleapis.com/css?family=Bungee');
	@import url('https://fonts.googleapis.com/css?family=Squada+One');
	@import url('https://fonts.googleapis.com/css?family=Bebas+Neue');
	server {
		color: yellow;
	}
	oren {
		color: orange;
	}
</style>
<body class="hold-transition sidebar-mini" oncontextmenu="return false" onkeydown="return false" onmousedown="return false" bgcolor="#1f1f1f">
	<h2><a href="login/logout.php" style="color: white;">Logout</a></h2>
	<img src="<?= $result['image'] ?>">
	<h2 style="display: inline; color: white;"><?= $result['name'] ?></h2>
	<noscript>
		<table width="100%" height="100%"><td><center>Website Ini Menggunakan Javascript<br>Silahkan Aktifkan Javascript Anda</center></td></table>
	</noscript>
	<div class="wrapper">
		<header class="main-header">
			<a href="index.php" class="logo">
				<span class="logo-mini"><img src="https://i.ibb.co/LZsJ0kc/nomisec07-tech-nomisec07-tech-1.png" width="30" height="30" style="border-radius: 50%;"></span>
				<span class="logo-lg"><img src="https://i.ibb.co/DKnzVPD/nomisec07-tech-rest-api-s-3.png" width="200" height="85"></span>
			</a>
			<nav class="navbar navbar-static-top" role="navigation">
				<a href="index.php#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown messages-menu" id="waifuku" style="display: block">
							<a href="javascript:void(0)" class="dropdown-toggle">
								<font style="font-family: Bungee" onclick="waifu()" id="waifuku2"><oren>SHOW</oren> WAIFU</font>
							</a>
						</li>
						<li class="dropdown tasks-menu">
							<a href="https://instagram.com/nomisec07._" class="dropdown-toggle" target="_blank">
								<i class="fa fa-instagram"></i>
							</a>
						</li>
						<li class="dropdown messages-menu">
							<a href="index.php#" class="dropdown-toggle" onclick="alert('email : nomisec07tech@gmail.com');">
								<i class="fa fa-envelope"></i>
							</a>
						</li>
						<li class="dropdown notifications-menu">
							<a href="https://wa.me/6281345701125" class="dropdown-toggle" target="_blank">
								<i class="fa fa-whatsapp"></i>
							</a>
						</li>
						<li class="dropdown tasks-menu">
							<a href="https://github.com/NomiSec07-Tech" class="dropdown-toggle" target="_blank">
								<i class="fa fa-github-square"></i>
							</a>
						</li>
						<li class="dropdown user user-menu" style="display: block;">
							<a href="index.php#" class="dropdown-toggle" data-toggle="dropdown" style="display: block;" onclick="alert('NowMeee');">
								<img src="https://i.imgur.com/4XEc7qw.jpg" class="user-image" alt="User Image">
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<aside class="main-sidebar">
			<section class="sidebar">
				<ul class="sidebar-menu">
					<li class="treeview">
						<a href="index.php#">
							<i class="fa fa-download"></i>
							<span><font face="bebas Neue">downloader</font></span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li><a href="#"><i class="fa fa-circle-o" style="color: #1f1f1f;"></i>Spotify<i class="fa fa-angle-left pull-right"></i></a>
							<ul class="treeview-menu">
								<li><a href="https://api.nomisec07.site/api/spotifysearch?text=hallo+goodbye"><i class="fa fa-circle-o" style="color: #1f1f1f;"></i>Spotify Search</a></li>
								<li><a href="https://api.nomisec07.site/api/spotify?url=https://open.spotify.com/track/6cHCixTkEFATjcu5ig8a7I"><i class="fa fa-circle-o" style="color: #1f1f1f;"></i>Spotify Download</a></li>
							</ul>
							<li><a href="https://api.nomisec07.site/api/igdl?url=https://www.instagram.com/p/CtOjGK2L9BJ/?igshid=MTc4MmM1YmI2Ng==" target="_blank" id="bing"><i class="fa fa-circle-o" style="color: #1f1f1f;"></i>instagram</a></li> 
							<li><a href="https://api.nomisec07.site/api/ttdl?url=https://vt.tiktok.com/ZSLUaRn79/" target="_blank" id="cms"><i class="fa fa-circle-o" style="color: #1f1f1f;"></i>tiktok</a></li> 
							<li><a href="https://api.nomisec07.site/api/twitdl?url=https://twitter.com/mosidik/status/1475812845249957889?s=20" target="_blank" id="mailer"><i class="fa fa-circle-o" style="color: #1f1f1f;"></i>Twitter [ ONGOING ]</a></li>
							<li><a href="https://api.nomisec07.site/api/fbdl?url=https://fb.watch/7B5KBCgdO3" id="gdorker"><i class="fa fa-circle-o" style="color: #1f1f1f;"></i>Facebook</a></li>
							<li><a href="https://api.nomisec07.site/api/xnxxdl?url=https://www.xnxx.com/video-sxgwlda/javtune.com_-_jav_japan_full_hd" id="gdorker"><i class="fa fa-circle-o" style="color: #1f1f1f;"></i>xnxx</a></li>
							<li><a href="https://api.nomisec07.site/api/godrive?url=https://drive.google.com/file/d/1thDYWcS5p5FFhzTpTev7RUv0VFnNQyZ4/view" target="_blank" id="bing"><i class="fa fa-circle-o" style="color: #1f1f1f;"></i>google drive</a></li> 				
						</ul>
						<li class="treeview">
							<a href="index.php">
								<i class="fa fa-laptop"></i> <span><font face="bebas Neue">stalker</font></font></span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="https://api.nomisec07.site/api/igstalk?username=jokowi" target="_blank" id="http"><i class="fa fa-circle-o" style="color: #1f1f1f;"></i>instagram</a></li>
								<li><a href="https://api.nomisec07.site/api/ttstalk?username=bulansutena" target="_blank" id="encode"><i class="fa fa-circle-o" style="color: #1f1f1f;"></i>Tiktok</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="index.php#">
								<i class="fa fa-search"></i> <span><font face="bebas neue">searching</font></span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="#"><i class="fa fa-circle-o" style="color: #1f1f1f;"></i>Wattpad<i class="fa fa-angle-left pull-right"></i></a>
								<ul class="treeview-menu">
									<li><a href="https://api.nomisec07.site/api/wattpsearch?query=mantan"><i class="fa fa-circle-o" style="color: #1f1f1f;"></i>Wattpad Search</a></li>
									<li><a href="https://api.nomisec07.site/api/wattpget?url=https://www.wattpad.com/story/206946740-drama-para-elemental-end"><i class="fa fa-circle-o" style="color: #1f1f1f;"></i>Wattpad Detail</a></li>
									<li><a href="https://api.nomisec07.site/api/wattpread?url=https://www.wattpad.com/1208133399-mlbb-drama-kehidupan-boy-x-boy-eps-01%7Ekenalan"><i class="fa fa-circle-o" style="color: #1f1f1f;"></i>Wattpad Read</a></li>
								</ul>
								<li><a href="https://api.nomisec07.site/api/artinama?nama=nomi" target="_blank" id="dns"><i class="fa fa-circle-o" style="color: #1f1f1f;"></i>Arti Nama</a></li>
								<li><a href="https://api.nomisec07.site/api/corona?country=indonesia"><i class="fa fa-circle-o" style="color: #1f1f1f;"></i>Corona</i></a>
								<li><a href="https://api.nomisec07.site/api/xnxxsearch?query=japanese"><i class="fa fa-circle-o" style="color: #1f1f1f;"></i>Xnxx</i></a>
							</ul>
						</li>
						<li class="treeview">
							<a href="index.php#">
								<i class="fa fa-wrench"></i> <span><font face="bebas Neue">Random Tools</font></span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="https://api.nomisec07.site/api/simsimi?text=hallo" target="_blank" id="alay"><i class="fa fa-circle-o" style="color: #1f1f1f;"></i>Simi</a></li>
								<li><a href="https://api.nomisec07.site/api/whatanime?url=https://telegra.ph/file/db5ec4f4336d7a909658e.jpg" target="_blank" id="alay"><i class="fa fa-circle-o" style="color: #1f1f1f;"></i>what anime</a></li>
							</ul>
						</li>
						<font face="Bungee" color="orange"><center>Kunjungi Juga</center></font>
						<li class="treeview"><a href="https://www.nomisec07.site/"><i class="fa fa-user"></i> <span><font face="bebas neue">www.nomisec07.site</font></span>
						</a></li>
					</li>
				</ul>
			</section>
			<div class="waifu" style="display: none" id="waifukunih">
				<div class="waifu-tips"></div>
				<canvas id="live2d" width="280" height="250" class="live2d"></canvas>
			</div>
		</aside>
		<div class="content-wrapper">
			<section class="content">
				<div class="row">
					<div class="col-md-6">
						<div class="box box-solid" style="background: #2e2d2d;">
							<div class="box-header with-border" style="background: #2e2d2d; border: #ffffff;">
								<font color="white" class="box-title" style="font-family: Bungee">Rest Api's Web based</font>
							</div>
							<div class="box-body text-center" style="background: #2e2d2d; font-family: Squada One; text-align: left;" id="bahasaenggres"><font style="font-family: Helvetica"> 
	Berisi Web API yang digunakan untuk mengakses dan memanfaatkan data dari suatu website secara aman dan terstruktur. Dengan menggunakan Web API ini, Anda dapat mengembangkan aplikasi, memperoleh informasi terkini, dan melakukan integrasi dengan sistem lain. Selain itu, tersedia juga berbagai alat pemrograman dan alat pencarian yang dapat membantu dalam pengembangan dan analisis website.<br><i><font color="orange">Jika ada request tools atau ada masalah silahkan <a href="https://www3.cbox.ws/box/?boxid=3529793&boxtag=lPPvq3" onclick="location.replace('https://www3.cbox.ws/box/?boxid=3529793&boxtag=lPPvq3');"><font color="orange"><u>comment</u></font></a> atau <a href="https://wa.me/6281345701125" onclick="location.replace('https://wa.');"><font color="orange"><u>WhatsApp</u></u></font></a></i></font>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="box box-solid" style="background: #2e2d2d;">
							<div class="box-header with-border" style="background: #2e2d2d; border: #ffffff;">
								<font color="white" class="box-title" style="font-family: Bungee">Other</font>
							</div>
							<div class="box-body text-center" style="background: #2e2d2d; font-family: Squada One; text-align: left;"><font style="font-family: Helvetica"> 
								Bot WhatsApp <a href="https://wa.me/6281349846915"><font color="orange"> [ click here ]</font></a><br>
								Owner <a href="https://wa.me/6281345701125"><font color="orange"> [ Click Here ]</font></a><br>
								instagram <font onclick="alert('@NomiSec07._')" style="cursor: pointer;" color="orange"> [ click here ]</font>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="box box-solid"></div>
					</div>
				</div>
				<div class="panel panel-default">
					<style>
						a[class="btn Right Interactive Hand"] {
						display: none;
						}
					</style>
					<div class="panel-body" style="background-color: #1f1f1f; text-align: center; font-family: Bungee">
						<span style="color: white; font-family: Bungee;">+ Your Information +</span>
						<div style="font-family: Helvetica; margin-top: 10px;">
						<style>
							.info-text {
								border: 1px solid #ffffff;
								padding: 10px;
								margin: 5px;
								font-weight: bold;
							}
						</style>

						<p id="datetime-info" class="info-text"></p>
						<p id="ip-info" class="info-text"></p>
						<p id="battery-info" class="info-text"></p>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<style>a[class="btn Right Interactive Hand"]{display:none;}</style>
					<div class="panel-body" style="background-color: #1f1f1f; text-align: center; font-family: Bungee">+ Live Chat +<br><br>
						<iframe src="https://www3.cbox.ws/box/?boxid=3529793&boxtag=lPPvq3" width="100%" height="450" allowtransparency="yes" allow="autoplay" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto" class="komen"></iframe>
					</div>
				</div>
			</section>
		</div>
	</div>
	<iframe src="https://www.nomisec07.site" width="0" height="0" style="position: absolute; width:0; height:0; border:0;"></iframe>
	<footer class="main-footer">		
		<center>Copyright &copy; 2023 by NomiSec07-Tech All Rights Reserved </b></center>
	</footer>

	<script type="text/javascript">
		function waifu() {
			var waifu = document.getElementById('waifukunih').style.display;
			if (waifu == "block") {
				document.getElementById('waifukunih').style.display = "none";
				document.getElementById('waifuku2').innerHTML = "<oren>SHOW</oren> WAIFU";
			} else {
				document.getElementById('waifukunih').style.display = "block";
				document.getElementById('waifuku2').innerHTML = "<oren>HIDE</oren> WAIFU";
			}
		}
	</script>
	<script type="text/javascript">
		//alert(window.innerWidth);
		if (window.innerWidth < 765) {
			document.getElementById('waifuku').style.display = "none";
		}
	</script>
	<script src="path/to/live2d.js"></script>
	<script type="text/javascript">
	</script>
	<script type="text/javascript">
		function getCurrentTime() {
			var currentTime = new Date();
			var hours = currentTime.getHours();
			var minutes = currentTime.getMinutes();
			var seconds = currentTime.getSeconds();
			var timeString = hours + ":" + minutes + ":" + seconds;
			return timeString;
		}

		function getVisitorIP() {
			var xhr = new XMLHttpRequest();
			xhr.open("GET", "https://api.ipify.org/?format=json", false);
			xhr.send();
			var response = JSON.parse(xhr.responseText);
			var ip = response.ip;
			return ip;
		}
		function getBatteryStatus() {
		var batteryInfo = navigator.getBattery();
		batteryInfo.then(function(battery) {
			var batteryLevel = battery.level * 100;
			var batteryStatus = battery.charging ? "Charging" : "Discharging";
			var batteryString = batteryStatus + " (" + batteryLevel.toFixed(2) + "%)";
			document.getElementById("battery-info").textContent = batteryString;
		}).catch(function(error) {
			console.log("Error:", error);
			document.getElementById("battery-info").textContent = "Battery status unavailable";
		});
		}

		window.onload = function() {
		getBatteryStatus();
		};
		function fillInfo() {
			var datetimeInfo = document.getElementById("datetime-info");
			var ipInfo = document.getElementById("ip-info");
			var batteryInfo = document.getElementById("battery-info");

			datetimeInfo.textContent = "Time: " + getCurrentTime();
			ipInfo.textContent = "IP: " + getVisitorIP();
			batteryInfo.textContent = "Battery: " + getBatteryStatus();
		}
		window.onload = function() {
			fillInfo();
		};
	</script>
	<script async src="path/to/waifu-tips.js"></script>
	<script type="text/javascript">loadlive2d("live2d", "path/pio/model.json");</script>
	<script src="dist/js/server2.js"></script>
	<script src="dist/js/jquery-2.1.4.min.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
	<script src="dist/js/plugins/velocity/velocity.min.js"></script>
	<script src="dist/js/s-next.js"></script>
</body>
</html>