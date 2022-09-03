<!DOCTYPE html>
<html>
<head>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dyskolos - Passionné d'informatique</title>
	<link rel="stylesheet" type="text/css" href="asset/min.css">

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
	<nav class="naviguation bar">
		<!-- bar naviguation de la pages webs -->
		<div class="left">
			<!-- contenue aligner à droite -->
			<div class="logo">
				<span class="__img logo-wesite" style="background-image: url(https://dyskolos.fr/assets/img/90bd09e9c66c09cf5abd142f491dce8b.gif);"></span>
			</div>
		</div>
		<div class="right">
			<!-- contenue aligner à gauche -->
			<section class="menu">
				<ul>
					<li class="li social-network"><a href="#network"><ion-icon name="logo-twitter"></ion-icon></a></li>
					<li class="li social-network"><a href="#network"><ion-icon name="logo-instagram"></ion-icon></ion-icon></a></li>
					<li class="li social-network"><a href="#network"><ion-icon name="logo-github"></ion-icon></a></li>
					<li class="li social-network"><a href="#network"><ion-icon name="logo-youtube"></ion-icon></a></li>
					<li class="li link-nav"><a href="#services">Services</a></li>
					<li class="li link-nav"><a href="#about">à propos</a></li>
				</ul>
			</section>
		</div>
	</nav>
	<main id="WINDOW">
		<!-- contenue de la pages webs -->
		<!-- "contenaire-section-info" est une div pour ajouter des elements ! -->
		<section class="banner-home __img" style="background-image: url(./asset/keyboard_1280p.jpg);"></section>
		<section class="contenaire-section-info services my-portfolio banner-spwn">
			<div class="head-sect">
				<!-- haut de la section -->
				<div class="title">
					<!-- titre de la section -->
					<h1>Services</h1>
				</div>
			</div>
			<div class="list-post">
				<?php for($i = 0; $i < 6; $i++) { ?>
				<article class="card-website">
					<div class="set-btn">
						<a href="#" class="btn">
							<div class="info">
								<div class="icone">
									<img src="https://raw.githubusercontent.com/selfhosters/unRAID-CA-templates/master/templates/img/xbackbone.png">
								</div>
								<div class="title">
									<h2>xBackBone</h2>
								</div>
							</div>
						</a>
					</div>
				</article>
				<?php } ?>
			</div>
			<div class="foot-sect">
				<span class="msg-i">
					<a href="https://status.dyskolos.fr/">Vérifier leur disponibilité</a>
				</span>
			</div>
		</section>

		<section class="contenaire-section-info services my-portfolio">
			<div class="head-sect">
				<!-- haut de la section -->
				<div class="title">
					<!-- titre de la section -->
					<h1>Services</h1>
					<span class="sub-title">
						<a href="https://status.dyskolos.fr/">Vérifier leur disponibilité</a>
					</span>
				</div>
			</div>
			<div class="list-post">
				<?php for($i = 0; $i < 6; $i++) { ?>
				<article class="card-website">
					<div class="set-btn">
						<a href="#" class="btn">
							<div class="info">
								<div class="icone">
									<img src="https://raw.githubusercontent.com/selfhosters/unRAID-CA-templates/master/templates/img/xbackbone.png">
								</div>
								<div class="title">
									<h2>xBackBone</h2>
								</div>
							</div>
						</a>
					</div>
				</article>
				<?php } ?>
			</div>
		</section>
	</main>
</body>
</html>