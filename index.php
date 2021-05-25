<!DOCTYPE html>
<html lang="fr" style="overflow-y: auto; scroll-behavior: smooth;">
<head>
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>ArduiTank | Accueil</title>
	<meta itemprop="name" content="ArduiTank | Accueil" />
	<meta name="keywords" content="ArduiTank, Arduino, DIY, bois, 3D, modélisation, ISAT, EPHEC, AntoDB"/>

	<link rel="apple-touch-icon" type="image/png" sizes="180x180" href="./img/Logo V2.2 min.png" class="next-head">
	<link rel="icon" type="image/png" sizes="32x32" href="./img/Logo V2.2 min.png" class="next-head">
	<link rel="icon" type="image/png" sizes="16x16" href="./img/Logo V2.2 min.png" class="next-head">

	<link rel="canonical" href="https://arduitank.be" />
	<link rel="shortlink" href="https://arduitank.be" />

	<meta name="viewport" content="width=device-width, initial-scale=1" class="next-head">
	<meta name="description" content="Bienvenue sur le site d'ArduiTank. Equipe de projet pour char robotisé et télécommandé." class="next-head">

	<meta property="og:title" content="ArduiTank | Accueil" class="next-head"/>
	<meta property="og:site_name" content="ArduiTank | Accueil" class="next-head" />
	<meta property="og:type" content="website" class="next-head" />
	<meta property="og:url" content="https://arduitank.be" class="next-head" />
	<meta property="og:description" content="Bienvenue sur le site d'ArduiTank. Equipe de projet pour char robotisé et télécommandé.">
	<meta property="og:image" content="http://arduitank.be/img/logo%20V2.2.png" class="next-head">

	<meta name="twitter:card" content="summary_large_image" class="next-head" />
	<meta name="twitter:title" content="ArduiTank | Accueil" class="next-head" />
	<meta name="twitter:url" content="https://arduitank.be" />
	<meta name="twitter:description" content="Bienvenue sur le site d'ArduiTank. Equipe de projet pour char robotisé et télécommandé." class="next-head">
	<meta name="twitter:creator" content="@ArduiTank" class="next-head">
	<meta name="twitter:image:src" content="http://arduitank.be/img/logo%20V2.2.png" class="next-head">

	<meta name="dcterms.title" content="ArduiTank | Accueil" class="next-head" />
	<meta name="dcterms.type" content="Text" class="next-head" />
	<meta name="dcterms.format" content="text/html" class="next-head" />
	<meta name="dcterms.identifier" content="https://arduitank.be" class="next-head" />
	<meta name="dcterms.description" content="Bienvenue sur le site d'ArduiTank. Equipe de projet pour char robotisé et télécommandé." class="next-head">
	
	<!-- Bulma Version 0.7.4-->
	<link rel="stylesheet" href="https://unpkg.com/bulma@0.7.4/css/bulma.min.css" />
	<link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
	
	<!-- Bootstrap Version 5.0.0 beta 1 -->
	<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">-->

	<!-- Fonts | Emotes -->
	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

	<style>
		/* Image for background */
		.background-banner {
			/* Set a specific height */
			min-height: 500px; 

			/* Create the parallax scrolling effect */
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			
			/* Space above and under the picture*/
			padding: 10rem 0;
		}

		/* The images used for background */
		.background-2Dplan-robot {
			background-image: url(http://arduitank.be/img/banner.png);
		}
		.background-model3D-chain {
			background-image: url(https://cdn.discordapp.com/attachments/807610088361164810/812692985631735839/IMG_20210220_152752.jpg);
		}
		.background-blank-1chain {
			background-image: url(https://cdn.discordapp.com/attachments/807610088361164810/814903576932515850/IMG_20210226_175338.jpg);
		}
		.background-2blanks-1chain {
			background-image: url(https://cdn.discordapp.com/attachments/807610088361164810/812778846465949696/IMG_20210220_211229.jpg);
		}
		.background-2blanks-board {
			background-image: url(https://cdn.discordapp.com/attachments/807610088361164810/813182685450338346/IMG_20210221_235425.jpg);
		}
		.background-2blanks-board-chain {
			background-image: url(https://cdn.discordapp.com/attachments/807610088361164810/813182755088236544/IMG_20210221_235529.jpg);
		}
		.background-2blanks-board-reverse {
			background-image: url(https://cdn.discordapp.com/attachments/807610088361164810/813182836126253116/IMG_20210221_235648.jpg);
		}
		.background-base-missing-2planks {
			background-image: url(https://cdn.discordapp.com/attachments/807610088361164810/813909999154888724/IMG_20210223_235513.jpg);
		}

		/* Colors */
		nav.navbar {
			/*background-color: rgba(84, 84, 84, 1)!important;*/
			transition: 0.8s ease-out;
		}
		.navbar-dropdown {
			background-color: rgba(74, 74, 74, 0.9);
		}
		.navbar-link {
			color: rgba(245,245,245,1)!important;
		}
		.navbar-item.has-dropdown:hover .navbar-link {
			background-color: #363636;
		}
		.navbar-dropdown.drop2 a.navbar-item {
			background-color: #545454;
		}
		.navbar-link:not(.is-arrowless)::after {
			border-color: #00b89c;
		}

		.dropdown-menu.drop2 a:hover {
			color: gray;
		}
		.dropdown-menu.drop2 a {
			color: white;
		}
		.dropdown-menu.drop2 {
			background-color: #545454;
			margin-left: 150px;
			margin-top: -44px;
		}


		.content h1, .content h3, .content h5 {
			color: white;
		}
		.progress.is-arduino1::-webkit-progress-value {
			background-color: rgb(0, 129, 132);
		}
		.progress.is-arduino2::-webkit-progress-value {
			background-color: rgb(23, 161, 165);
		}
		/*.hero.is-dark a:not(.navbar) {
			color: #3273dc!important;
		}
		.hero.is-dark a:hover:not(.navbar) {
			color: white!important;
		}*/
		.label {
			color: white;
		}
		p a.is-link {
			color: #3273dc!important;
		}
		p a.is-link:hover {
			color: #363636!important;
		}

		.hero-foot {
			background-color: #545454;
		}

		/* Layout */
		div {
			transition-property: opacity, left, top, height;
			transition-duration: 3s, 5s;
		}

		
	</style>

	<!-- Scrollbar -->
	<style>
		/* Scrollbar */
		::-webkit-scrollbar {
			width: 10px;
		}

		::-webkit-scrollbar-track {
			background: #f5f5f5; 
		}

		::-webkit-scrollbar-thumb {
			background: #545454; 
		}
	</style>

	<!-- Go up button -->
	<style>
		/* Button Up */
		#scroll_to_top {
			display: none;
			position: fixed;
			bottom: 50px;
			right: 30px;
			z-index: 99;
			font-size: 18px;
			border: none;
			outline: none;
			background-color: rgba(255, 255, 255, 0.5);
			color: white;
			cursor: pointer;
			padding: 5px;
			border-radius: 4px;
		}

		#scroll_to_top button {
			width: 25px;
		}

		#scroll_to_top:hover {
			background-color: rgba(255, 255, 255, 0.8);
		}
	</style>

	<!-- Accordion -->
	<style>
		.collapsible {
			background-color: #777;
			color: white;
			cursor: pointer;
			padding: 18px;
			width: 100%;
			border: none;
			text-align: left;
			outline: none;
			font-size: 1.5rem;
			border-radius: 20px;
		}
		
		.collapsible.active, .collapsible:hover {
			background-color: #545454;
		}
		
		.collapsible.active {
			border-radius: 20px 20px 0 0;
		}

		.collapsible:after {
			content: "❮";
			color: #00b89c;
			font-weight: bold;
			float: right;
			margin-left: 5px;
			-webkit-transform: rotate(-90deg);
			transform: rotate(-90deg);
		}

		.active:after {
			-webkit-transform: rotate(90deg);
			transform: rotate(90deg);
		}

		.content.collapse {
			padding: 0 18px;
			max-height: 0;
			overflow: hidden;
			transition: max-height 1s ease-out;
			background-color: #1d1d1d;
			border-radius: 0 0 20px 20px;
		}
	</style>
</head>
<body>
	<section class="hero is-dark is-fullheight">
		<?php
			include("include/header.php");
		?>
	
		<div class="hero-body background-banner background-2blanks-board-reverse">
			<!--<div class="container has-text-centered">
				<p class="title" style="color: hsl(0, 0%, 21%)!important; font-size: 5rem; padding: 10rem 0 10rem 0;">
					ArduiTank
				</p>
			</div>-->
			<div class="container">
				<center>
					<img src="./img/logo V2.2.png">
				</center>
			</div>
		</div>

		<div class="hero-body">
			<div class="container">
				<h1 class="title is-1 has-text-centered" id="informations">
					Informations
				</h1>
				<div class="content is-large">
					<h3>Qui sommes-nous ?</h3>
					<p>Nous sommes en 2ème année en école supérieure en automatisation. Dans le cadre du cours de robotique, nous avons décidé de faire un tank télécommandé.</p>
					<p>Nous ne nous limitons pas qu'à la programmation en C/C++ (Arduino) comme demandé, en effet nous développons aussi une application pour ordinateur ainsi que le site sur lequel vous vous trouvez actuellement.</p>
					<h3>Consignes</h3>
					<h5>Purement pour le cours, nous devons respecter ces consignes :</h5>
					<ul>
						<li>Robot mobile</li>
						<li>Télécommande => À réaliser avec un Arduino + Bluetooth + …</li>
					</ul>
					<h5>Comme composants que l'on doit intégrer il y a :</h5>
					<ul>
						<li>Sonar (ultrason)</li>
						<li>Bras articulé (servo Moteur)</li>
						<li>Lecteur TAG RFID => Start en Mode « compétition »</li>
						<li>Afficheur LCD</li>
						<li>LEDs</li>
						<li>Buzzer (optionnel)</li>
					</ul>
					<h3>Où en sommes-nous ?</h3>
					<p>Nous avons un projet ambitieux ! Nous sommes motivés !</p>
					<p>Pour savoir un peu où nous en sommes :</p>
					<h5>Arduino (tous) :</h5>
					<progress class="progress is-arduino1" style="height: 1.5rem;" value="80" max="100">80%</progress>
					<div class="columns is-mobile">
						<div class="column is-half-mobile is-3-tablet is-2-desktop is-2-widescreen is-2-fullhd">
							<p>Robot :</p>
						</div>
						<div class="column"><progress class="progress is-arduino2" value="80" max="100">80%</progress></div>
					</div>
					<div class="columns is-mobile">
						<div class="column is-half-mobile is-3-tablet is-2-desktop is-2-widescreen is-2-fullhd">
							<p>Télécommande :</p>
						</div>
						<div class="column"><progress class="progress is-arduino2" value="80" max="100">80%</progress></div>
					</div>
					<h5>Application (Davide et Ugo) :</h5>
					<progress class="progress" style="height: 1.5rem;" value="30" max="100">30%</progress>
					<h5>Site (Antonin) :</h5>
					<progress class="progress is-info" style="height: 1.5rem;" value="35" max="100">35%</progress>
				</div>
			</div>
		</div>

		<div class="hero-body background-banner background-blank-1chain">
		</div>
		
		<div class="hero-body" id="equipe">
			<div class="container">
				<p class="title is-1  has-text-centered" id="information">
					Equipe
				</p>
				<br/>
				<br/>
				<div class="columns">
					<div class="column">
						<center style="margin-bottom: 1rem;">
							<figure class="image is-64x64">
								<img src="https://cdn.discordapp.com/avatars/484726990344028162/6269c54783100b73676ba7f7634f7505.png" class="image is-64x64 is-rounded">
							</figure>
							<br/>
							<p class="title is-5" style="font-weight: normal;">
								Davide
							</p>
						</center>
					</div>
					<div class="column">
						<center style="margin-bottom: 1rem;">
							<figure class="image is-64x64">
								<img src="https://cdn.discordapp.com/avatars/693118212711251968/425e975a36d40888a3449d93e36f02ff.png" class="image is-64x64 is-rounded">
							</figure>
							<br/>
							<p class="title is-5" style="font-weight: normal;">
								Ugo
							</p>
						</center>
					</div>
					<div class="column">
						<center style="margin-bottom: 1rem;">
							<figure class="image is-64x64">
								<img src="https://cdn.discordapp.com/avatars/474326204808298506/09dd121b2c1881ceae6bdc56cddfc47f.png" class="image is-64x64 is-rounded">
							</figure>
							<br/>
							<p class="title is-5" style="font-weight: normal;">
								Antonin
							</p>
						</center>
					</div>
					<div class="column">
						<center style="margin-bottom: 1rem;">
							<figure class="image is-64x64">
								<img src="https://cdn.discordapp.com/avatars/673832628021100574/fdf203b53f00217309ba0009cd6bdf54.png" class="image is-64x64 is-rounded">
							</figure>
							<br/>
							<p class="title is-5" style="font-weight: normal;">
								Colin
							</p>
						</center>
					</div>
				</div>
			</div>
		</div>

		<div class="hero-body background-banner background-base-missing-2planks">
		</div>
		
		<div class="hero-body" id="actu">
			<div class="container">
				<p class="title is-1 has-text-centered" id="information">
					Actualités
				</p>
				<div class="content is-large">
					<p>Dans cette section, vous pouvez admirer l'avancée du projet !</p>
					<p>Vous pouvez voir toutes les étapes à la réalisation du robot.</p>
				</div>
				<button type="button" class="collapsible" id="01032021-4">01/03/2021 - Impression 3D - Maintient tourelle et pièce amovible flancs et canon</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Pour avoir un assez bon roulement tout en ayant un bon maintient de toute la tourelle, nous avons modélisé et imprimé en 3D une bague.</p>
					<p style="padding: 0 18px;">Celle-ci vient se loger autour du collecteur à balais, soit entre la base du tank et la tourelle.</p>
					<p style="padding: 0 18px;">Nous en profitons pour réaliser et imprimer la pièce qui va maintenir tous les flancs de la tourelle et le canon aussi.</p>
					<p style="padding: 0 18px;">C'est cette partie qui va bouger avec le reste. Fixé sur un axe à la pièce précédement modélisée et imprimée (voir la précédente actualité).</p>
					<div class="tile is-ancestor" style="padding: 0 0 2rem 0;">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/816049570067775549/IMG_20210301_214911.jpg" alt="Bague de maintient">
								</figure>
							</div>
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/816069808742203442/IMG_20210301_230940.jpg" alt="Maintient flancs et canon">
								</figure>
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="collapsible" id="01032021-3">01/03/2021 - Impression 3D - Pièce tourelle sur l'engrenage</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Revenons à notre premier tank, le principale.</p>
					<p style="padding: 0 18px;">Cette fois c'est la modélisation et l'impression 3D de la pièce qui maintient le canon sur l'engrenage.</p>
					<div class="tile is-ancestor" style="padding: 0 0 2rem 0;">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/816044532713914378/IMG_20210301_212914.jpg" alt="Modélisation 3D tourelle/canon" style="padding: 0; height: 20rem; width: auto;">
								</figure>
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="collapsible" id="01032021-2">01/03/2021 - "Hack" du servomoteur du tank 2</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">On ne vous l'a peut-être pas dit mais nous ne nous limitons pas qu'à un tank !</p>
					<p style="padding: 0 18px;">A la fin de l'année pour la démo, on espère en avoir deux.</p>
					<p style="padding: 0 18px;">Entre temps, Ugo a effectué également le trucage.</p>
					<p style="padding: 0 18px;">On devient des experts dans les trucages/"hackages".</p>
					<div class="tile is-ancestor" style="padding: 0 0 2rem 0;">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/815953238259400734/image0.jpg" alt="Modélisation 3D tourelle" style="padding: 0; height: 20rem; width: auto;">
								</figure>
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="collapsible" id="01032021-1">01/03/2021 - Modélisation 3D - Tourelle</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Nous trouvions que malgré tout, la première modélisation 3D faisait une tourelle plus tank que robot humanoïde.</p>
					<p style="padding: 0 18px;">C'est pourquoi on partira sur plusieurs flancs verticaux au lieu de flancs en diagonales.</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/815949726507597934/unknown.png" alt="Modélisation 3D tourelle" style="padding: 0;">
								</figure>
							</div>
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/815949827493593108/unknown.png" alt="Modélisation 3D tourelle" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px;">Nous voulions simuler ce que nous verrons.</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/815953733249662976/unknown.png" alt="Modélisation 3D tourelle" style="padding: 0;">
								</figure>
							</div>
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/815955695433285692/IMG_20210301_153539.jpg" alt="Modélisation 3D tourelle" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px;">Et enfin, modéliser le bord qui maintiendra les flancs et le dessus de la tourelle.</p>
					<div class="tile is-ancestor" style="padding: 0 0 2rem 0;">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/815988134164299826/unknown.png" alt="Modélisation 3D tourelle" style="padding: 0;">
								</figure>
							</div>
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/815989414374801418/unknown.png" alt="Modélisation 3D couvercle tourelle" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="collapsible" id="28022021-1">28/02/2021 - Réflexion & Modélisation 3D - Tourelle</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Forcément, après la base du tank, il fallait bien s'attaquer à la tourelle (c'est le cas de le dire).</p>
					<p style="padding: 0 18px;">Le but d'un tank c'est quand même bien de se défendre non ?</p>
					<p style="padding: 0 18px;">Nous nous sommes mis à réfléchir.</p>
					<p style="padding: 0 18px;">Je vous entends dire : "Ouais mais vous aviez déjà designé une tourelle". Effectivement mais la boule que nous voulions faire, même si c'était très mignon, aurait été imprimée totalement en 3D.</p>
					<p style="padding: 0 18px;">On aurait perdu le charme du bois. Nous avons donc commencé à designer une autre tourelle. Comment allons nous la faire ? Avec des arrondis, carrés, en pente, etc. Premier croquis :</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/815645424999596032/unknown.png" alt="Croquis tourelle" style="padding: 0; height: 20rem; width: auto;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px;">Finalement, en modélisation 3D, une première idée nous est apparu dans nos esprits.</p>
					<p style="padding: 0 18px;">Nous voulons garder l'idée de la tourelle entière qui monte et descend. Comme un humain bougerait sa tête. Pour gardé l'esprit tank mais robot (humanoïde).</p>
					<div class="tile is-ancestor" style="padding: 0 0 2rem 0;">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://media.discordapp.net/attachments/807610088361164810/815695743544590356/unknown.png" alt="Modélisation 3D tourelle" style="padding: 0;">
								</figure>
							</div>
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/815695824923000862/unknown.png" alt="Modélisation 3D tourelle" style="padding: 0;">
								</figure>
							</div>
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/815696012387287053/unknown.png" alt="Modélisation 3D tourelle" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="collapsible" id="27022021-1">27/02/2021 - Site - Navbar, actualités plus pratique</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Vous en aviez marre de suivre les activités car pour en retrouver une précisément à une date c'est tout un bodel ?</p>
					<p style="padding: 0 18px;">Hé bien, nous zossie (aussi) !</p>
					<p style="padding: 0 18px;">Cela faisait un moment que l'on trouvait le système par date bien mais que cela serait mieux avec un sous-menu.</p>
					<p style="padding: 0 18px;">Chose qui fut faite grâce à un ami d'Antonin, Nenaff (pseudonyme).</p>
					<p style="padding: 0 18px;">Admirez vous-même le changement ! Bluffant hein ? Non, nous ne nous jetons jamais de fleurs 🙄</p>
					<div class="tile is-ancestor" style="padding: 0 18px 2rem 18px;">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/815165672241496114/unknown.png" alt="Navbar actualités avant" style="padding: 0;">
								</figure>
							</div>
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/815165679367487538/unknown.png" alt="Navbar actualités avant" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="collapsible" id="26022021-4">26/02/2021 - Modélisation et impression 3D et CNC - Plaque de devant et ultrason</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">La machine Davide s'est remise en route à 3000 à l'heure !</p>
					<p style="padding: 0 18px;">À commencer par la réalisation 3D du support de l'ultrason.</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://media.discordapp.net/attachments/807610088361164810/814835673018269716/unknown.png" alt="Modélisation 3D support ultrason" style="padding: 0; height: 500px; width: auto;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px;">S'en suit par l'impression 3D de ce support !</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/814903399895793685/IMG_20210226_171004.jpg" alt="Impression 3D support ultrason" style="padding: 0;">
								</figure>
							</div>
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/814903423878823976/IMG_20210226_171029.jpg" alt="Impression 3D support ultrason" style="padding: 0;">
								</figure>
							</div>
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/814903447047372810/IMG_20210226_171035.jpg" alt="Impression 3D support ultrason" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px;">Après, place à la découpe de la planche de la face avant ! Sans oublier les trous pour les yeux du tank ! Ou plutôt les "haut-parleurs" de l'ultrason.</p>
					<p style="padding: 0 18px;">Et elle est PARFAITE ! ;) Notre tank prend forme ! Du moins pour la base.</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/814903528639954944/IMG_20210226_171424.jpg" alt="Plaque avec le support ultrason" style="padding: 0;">
								</figure>
							</div>
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/814903549833773066/IMG_20210226_171431.jpg" alt="Plaque avec le support ultrason" style="padding: 0;">
								</figure>
							</div>
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/814903474352685056/IMG_20210226_171116.jpg" alt="Tank avec plaque ultrason" style="padding: 0;">
								</figure>
							</div>
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/814903502303395890/IMG_20210226_171129.jpg" alt="Tank avec plaque ultrason" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px;">Vous l'avez peut-être vu, la dernière plaque pour le devant est faite !</p>
					<p style="padding: 0 18px;">Effectivement, après une petite découpe à la CNC, la voici !</p>
					<p style="padding: 0 18px;">C'est une sacré bête ! Avec 359g (et c'est pas de la drogue, on ne serait plus là sinon).</p>
					<p style="padding: 0 18px;">Funfact : Le téléphone du papa de Davide a à peine 40g en moins ! Après c'est sûr que le tank est quasi vide et sans tourelle là !</p>
					<div class="tile is-ancestor" style="padding: 0 0 2rem 0;">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/814903576932515850/IMG_20210226_175338.jpg" alt="Tank avec l'avant fini" style="padding: 0;">
								</figure>
							</div>
							<div class="tile is-child">
								<figure class="image">
									<img src="https://media.discordapp.net/attachments/807610088361164810/814917105308532746/IMG_20210226_184447.jpg" alt="Poid du tank avec l'avant fini" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="collapsible" id="26022021-3">26/02/2021 - PCB - Test avec plaque de cuivre</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Ugo a une plaque de cuivre une face. Il lui était venu de faire un PCB (circuit imprimé) de test pour la télécommande avec.</p>
					<p style="padding: 0 18px;">Pour crer le PCB, il a une CNC, le but aurait été d'enlever là couche de cuivre en retirant avec une fraise pour faire notre circuit.</p>
					<p style="padding: 0 18px;">Il s'agit d'une plaque une face, spécialement prévue pour faire des PCB à la CNC.</p>
					<p style="padding: 0 18px;">Je veux bien que nous soyons des fous mais quand même !</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://media.discordapp.net/attachments/807610088361164810/814786945678966794/image0.jpg" alt="Plaque cuivrée pour CNC" style="padding: 0;">
								</figure>
							</div>
							<div class="tile is-child">
								<figure class="image">
									<img src="https://media.discordapp.net/attachments/807610088361164810/814786985986228244/image0.jpg" alt="Plaque cuivrée pour CNC" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px 2rem 18px;">SPOILER : Nous ne l'utiliserons jamais au final 😅</p>
				</div>
				<button type="button" class="collapsible" id="26022021-2">26/02/2021 - Impression 3D - Bouton ON/OFF télécommande</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Ugo a fait une impression 3D et a intégré le bouton ON/OFF pour la télécommande dedans.</p>
					<p style="padding: 0 18px;">Comme déjà dit, Ugo fait la télécommande avec l'écran tactile TFT et Davide fait le tank.</p>
					<p style="padding: 0 18px;">On allait quand même pas laisser Davide tout faire ! Non mais !</p>
					<p style="padding: 0 18px;">Il s'agit d'une des premières impressions sur l'imprimante 3D d'Ugo.</p>
					<div class="tile is-ancestor" style="padding: 0 18px 2rem 18px;">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
								</figure>
							</div>
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/814777132831866890/image0.jpg" alt="Bonton on/off télécommande" style="padding: 0;">
								</figure>
							</div>
							<div class="tile is-child">
								<figure class="image">
								</figure>
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="collapsible" id="26022021-1">26/02/2021 - Site - Responsive (enfin)</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Même la nuit on continue ! (Même si c'est plus le matin, très tôt là du coup.)</p>
					<p style="padding: 0 18px;">On en avait marre de voir le site tout pété sur téléphone.</p>
					<p style="padding: 0 18px;">Après des jours de modifications et tests sans succès, nous avons fait appel à un ami d'Antonin, Nenaff (de pseudo) qui nous a débloqué de notre situation.</p>
					<p style="padding: 0 18px;">Les statistiques sont enfin bien mises. Tout le responsive est donc fonctionnel !</p>
					<p style="padding: 0 18px 2rem 18px;">Fini les : "Je n'ai pas vu, c'est tout kc" :p<br><em>Même si personnne ne nous la dit.</em></p>
				</div>
				<button type="button" class="collapsible" id="25022021-1">25/02/2021 - "Hack" du servomoteur</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Hé ouais on "hack" des servomoteurs nous ! Plus rien ne nous arrête (c'est faux).</p>
					<p style="padding: 0 18px;">En fait, nous n'avons pas besoin de savoir la positition de la tourelle et nous voulons que celle-ci puisse tourner à l'infini.</p>
					<p style="padding: 0 18px;">C'est pourquoi on démonte le l'armature du servomoteur pour se câbler directement sur le moteur. Nous laissons tout le reste tel quel, on ne sait jamais !</p>
					<p style="padding: 0 18px;">Ce sera comme si nous avions un motoréducteur simplement.</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/814570354747637811/IMG_20210225_195014.jpg" alt="Hack servomoteur" style="padding: 0;">
								</figure>
							</div>
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/814570683316830239/IMG_20210225_195223.jpg" alt="Hack servomoteur" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px;">Création d'un petit code et hop, on test !</p>
					<div class="tile is-ancestor" style="padding: 0 0 2rem 0;">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="video">
									<video controls>
										<source src="https://cdn.discordapp.com/attachments/807610088361164810/814588793599295508/VID_20210225_205915000.mp4" type=video/mp4>
									</video>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="collapsible" id="24022021-3">24/02/2021 - Changement des moteurs</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Comme vous l'avez peut-être remarqué dans la précédente actualité, nous avions encore les plaques pour les moteurs pas à pas.</p>
					<p style="padding: 0 18px;">On pouvait encore voir un moteur pas à pas qui y était rataché.</p>
					<p style="padding: 0 18px;">Tel des garagistes aguerris, nous avons démonté le moteur et les plaques. Puis nous avons placé les nouvelles plaques latérales !</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/814144967798161418/IMG_20210224_153020.jpg" alt="Démontage plaques latérales" style="padding: 0;">
								</figure>
							</div>
						</div>
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://media.discordapp.net/attachments/807610088361164810/814179743339249754/IMG_20210224_175803.jpg" alt="Nouvelles plaques latérales placées" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px;">Enfin, plus tard dans la journée, Davide a trouvé des vis assez longues pour pouvoir fixer les motoréducteurs.</p>
					<p style="padding: 0 18px;">Nous les avons attachés avec les impressions 3D qui vont maintenir les plaques de devant.</p>
					<div class="tile is-ancestor" style="padding: 0 18px;">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
								</figure>
							</div>
							<div class="tile is-child">
								<figure class="image">
									<img src="https://media.discordapp.net/attachments/807610088361164810/814209468208250930/IMG_20210224_195523.jpg?width=901&height=676" alt="Vis pour moteurs" style="padding: 0;">
								</figure>
							</div>
							<div class="tile is-child">
								<figure class="image">
								</figure>
							</div>
						</div>
					</div>
					<div class="tile is-ancestor" style="padding: 0 18px;">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://media.discordapp.net/attachments/807610088361164810/814237212257419264/IMG_20210224_214702.jpg" alt="Moteurs placés" style="padding: 0;">
								</figure>
							</div>
							<div class="tile is-child">
								<figure class="image">
									<img src="https://media.discordapp.net/attachments/807610088361164810/814237585949589544/IMG_20210224_214826.jpg" alt="Moteurs placés" style="padding: 0;">
								</figure>
							</div>
							<div class="tile is-child">
								<figure class="image">
									<img src="https://media.discordapp.net/attachments/807610088361164810/814245434838745098/IMG_20210224_221911.jpg" alt="Moteurs placés" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px 2rem 18px;">SPOILER : Nous ne sommes pas des garagistes. Qui donc vous aurait faire croire ça ? 🙄</p>
				</div>
				<button type="button" class="collapsible" id="24022021-2">24/02/2021 - CNC - Plaque tournante de la tourelle</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Quand on disait que l'on n'arrêtait pas Davide...</p>
					<p style="padding: 0 18px;">La plaque dentée qui servira à faire tourner la tourelle grâce au servomoteur est donc modélisée pour la CNC de Davide.</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/814125051862450246/unknown.png" alt="Plaque tournante tourelle modélisation" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px;">Hé donc, plus tard dans la journée, la plaque tournante fut découpée et installée sur le tank !</p>
					<div class="tile is-ancestor" style="padding: 0 18px 2rem 18px;">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/814136255594889276/IMG_20210224_150550.jpg" alt="Plaque tournante tourelle sur tank" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="collapsible" id="24022021-1">24/02/2021 - Arrivée des moteurs</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Aquiquebouh ! En voila des moteurs prêt à faire décoller notre ArduiTank !</p>
					<p style="padding: 0 18px;">Malheureusement, il restera terreste même si on aurait bien aimé l'envoyer dans l'espace comme l'un de notre concurent (Tesla).</p>
					<div class="tile is-ancestor" style="padding: 0 18px 2rem 18px;">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/814119787780898846/IMG_20210224_140014.jpg" alt="Boite nouveaux moteurs" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="collapsible" id="23022021-4">23/02/2021 - Impression 3D - Roue crantée pour le servo moteur (axe horizontale) & Support du roulement avec les fils</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Qu'est-ce que l'on carbure !! On s'alimente peut-être à l'uranium haha !</p>
					<p style="padding: 0 18px;">Ce qui est intéressant, c'est de s'attaquer à la tourelle ! (Le jeu de mot n'était pas voullu.)</p>
					<p style="padding: 0 18px;">Pour que la tourelle puisse tourner à droite ou à gauche, il faudra un servo avec un mécanisme d'engrenages pour que cela soit fonctionnel.</p>
					<p style="padding: 0 18px;">D'abord une pièce pour le servo qui sera une roue crantée, puis une pièce pour maintenir le roulement (axe centrale) dans la planche de bois de la base et enfin l'engrage qui fera tourner le roulement grace au servo et de la roue crantée.</p>
					<p style="padding: 0 18px;">Bon j'avoue, c'est pas simple de visualiser tout ça ! En plus l'engrenage ce sera pour un autre jour.</p>
					<p style="padding: 0 18px;">Voici donc en image la roue crantée qui est attachée au cervo.</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813883377656660008/IMG_20210223_222059.jpg" alt="Roue crantée attachée au servo" style="padding: 0;">
								</figure>
							</div>
						</div>
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813882941133946931/IMG_20210223_221907.jpg" alt="Roue crantée attachée au servo, tank de côté/derrière" style="padding: 0;">
								</figure>
							</div>
						</div>
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813883207551549450/IMG_20210223_221850.jpg" alt="Roue crantée attachée au servo, tank de côté/devant" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px;">Ensuite la pièce qui permet le maintient du roulement avec les fils dans la planche en bois.</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813902747303936020/IMG_20210223_233746.jpg" alt="Maintient roulement dans la planche" style="padding: 0;">
								</figure>
							</div>
						</div>
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813906980044275782/IMG_20210223_235524.jpg" alt="Maintient roulement dans la planche, tank de côté/derrière" style="padding: 0;">
								</figure>
							</div>
						</div>
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813909999154888724/IMG_20210223_235513.jpg" alt="Maintient roulement dans la planche, tank de côté" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px 2rem 18px;">Comme dit plus haut, l'engrenage qui s'emboitera dans le roulement et qui touchera la roue crantée sera pour le lendemain si tout va bien !</p>
					<br>
				</div>
				<button type="button" class="collapsible" id="23022021-3">23/02/2021 - CNC - Planches du dessus de la base du tank</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Ce serait bête d'avoir la pièce qui supporte les planches qui fermeront presque totalement la base du tank, en milieu de journée et de ne même pas usiner les fameuses planches !</p>
					<p style="padding: 0 18px;">Donc usinage des deux petites planches qui ferme l'arrière du tank.</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813775783163199520/IMG_20210223_151302.jpg" alt="2 petites planches ferme fin du tank, tank de côté/devant" style="padding: 0;">
								</figure>
							</div>
						</div>
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813775825904074812/IMG_20210223_151354.jpg" alt="2 petites planches ferme fin du tank, tank de côté/derrière" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<br>
					<p style="padding: 0 18px;">On s'attaque à du lourd avec l'usinage de la planche principale du dessus de la base de ce tank.</p>
					<p style="padding: 0 18px;">On voulait quand même un minimum une planche sympa.</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813826563854172190/IMG_20210223_183417.jpg" alt="Usinage planche principale dessus de la base du tank" style="padding: 0;">
								</figure>
							</div>
						</div>
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813828334231355492/IMG_20210223_184211.jpg" alt="Usinage planche principale dessus de la base du tank" style="padding: 0;">
								</figure>
							</div>
						</div>
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813831326339694632/IMG_20210223_185352.jpg" alt="Planche principale dessus de la base du tank" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px">Une fois (mais pas deux !) ça qui est usiné, il faut la visser à la structure déjà existante !</p>
					<p style="padding: 0 18px">On fixe quand même pour un aperçu car malheureusement les plaques des côtés vont devoir être refaites. En effet les motoréducteurs sont plus long et pas les attaches au même endroit que les moteurs pas à pas.</p>
					<p style="padding: 0 18px">En image, l'avancée du tank avec la belle nouvelle planche de mise ainsi que "l'intérieur" du tank avec le peu d'espace disponible.</p>
					<div class="tile is-ancestor" style="padding: 0 18px 2rem 18px">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813843848085241876/IMG_20210223_194240.jpg" alt="Planche principale du dessus de la base du tank fixée, tank de côté/derrière" style="padding: 0;">
								</figure>
							</div>
						</div>
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813843968663748628/IMG_20210223_194308.jpg" alt="Planche principale du dessus de la base du tank fixée, tank de côté/devant" style="padding: 0;">
								</figure>
							</div>
						</div>
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813843697275764736/IMG_20210223_194121.jpg" alt="Vue de l'intérieur de la base du tank" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="collapsible" id="23022021-2">23/02/2021 - Test du microcontrôleur</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Le but est d'utiliser des Arduino (d'où ArduiTank (on ne sait jamais si vous êtes à la ramasse)) pour le projet sauf que c'est beaucoup trop simple pour nous, voyons ! Non, non c'est pas trop simple haha.</p>
					<p style="padding: 0 18px;">Nous comptons utiliser 2 Arduino nano sauf qu'on ne voulait pas avoir toute la carte car cela prend de la place et que nous voulons gagner de la place et tout mettre sur un PCB (circuit imprimé) pour que ce soit plus "propre".</p>
					<p style="padding: 0 18px;">Pour ce faire, nous enlevons le microcontrôleur de sa carte.</p>
					<p style="padding: 0 18px;">Une image vaut mieux qu'un long discours :</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813721187674488832/image0.jpg" alt="Test du microcontrôleur" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px">Ugo en train de faire de la magie noire avec son microcontrôleur. Non car j'ai rien compris moi. Soyons sérieux un moment : Il faisait un programme de test avec une led mais on dirait plus une bombe à désamorcer dans cet état.</p>
					<p style="padding: 0 18px 2rem 18px;">Spoiler : Cela ne va pas rester comme ça ! Dommage hein ? Non, c'est vraiment pas beau, je vous l'assure !</p>
				</div>
				<button type="button" class="collapsible" id="23022021-1">23/02/2021 - Impression 3D - Pièce d'attache des planches supérieures</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">La pièce disigné la veille part en impression ! Pour rappel, il s'agit de la pièce servant de maintient à toutes les planches supérieures du tank !</p>
					<p style="padding: 0 18px;">Supérieures physiquement mais en état de supériorité aussi car sans elles pas de tourelle avec canon ! Et donc pas de tourelle toute choupinou :p</p>
					<p style="padding: 0 18px;">Donc en image juste en dessous la première pièce ! La seconde (symétrie) imprimée juste après !</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813716681007562812/IMG_20210223_111847.jpg" alt="Pièce 3D qui maintiendra les trois planches du dessus fixé au char, tank de derrière" style="padding: 0;">
								</figure>
							</div>
						</div>
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813716758615687178/IMG_20210223_111656.jpg" alt="Pièce 3D qui maintiendra les trois planches du dessus fixé au char, tank de côté" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px;">Cela aurait été trop facile que toutes les pièces soient imprimées sans encombre ! Nous avons eu une pièce qui n'a donc pas bien accroché.</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813717728510476338/IMG_20210223_112317.jpg" alt="Pièce 3D qui maintiendra les trois planches du dessus, échec, non c'est pas une arme" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px;">Non c'est pas un flingue miniature ! Pas d'arme dans le tank ! Enfin si, un beau canon dans une tourelle mais c'est qu'un détail ça !</p>
					<br>
					<p style="padding: 0 18px;">Après nettoyage et réimpression sans soucis cette fois, une belle deuxième pièce !</p>
					<div class="tile is-ancestor" style="padding: 0 18px 2rem 18px;">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813731594530717696/IMG_20210223_121807.jpg" alt="2 pièces 3D qui maintiendront les trois planches du dessus fixé au char, tank de derrière" style="padding: 0;">
								</figure>
							</div>
						</div>
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813731701985509426/IMG_20210223_121739.jpg" alt="2 pièces 3D qui maintiendront les trois planches du dessus fixé au char, tank de côté vers l'avant" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="collapsible" id="22022021-6">22/02/2021 - Site - État actuel et animations</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Antonin avance sur le site, l'HTML (structure) et le CSS (aperçu) est presque fini néanmoins le responsive (adaptation pour les différents appareils) n'est vraiment pas bon.</p>
					<p style="padding: 0 18px;">En cette soirée du 22 février, pas mal d'animations ont été faites en JS :</p>
					<ul style="padding: 0 18px 2rem 18px;">
						<li>Enfin les actualités ont les bords du dessous (droite et gauche) qui quand on clique sur le bandeau se mettent droit instantanément et si on referme, les bords se remettent en arrondis à la fin du "rembobinage" de l'actualité.</li>
						<li>La navbar (menu supérieur) est fixe sur le haut de la page. Si on descend dans le site, on la voit toujours.</li>
						<li>La navbar change de couleur et devient un peu transparente quand on dépasse la première image avec le logo dessus. (Fonctionne uniquement sur PC et tablettes suite au problème de responsive.)</li>
					</ul>
				</div>
				<button type="button" class="collapsible" id="22022021-5">22/02/2021 - Modélisation 3D - Pièce d'attache des trois planches du dessus et maintient de la planche arrière</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Davide s'occupe de terminer la journée par la modélisation 3D de la pièce qui va maintenir la grosse plache du dessus, ainsi que les deux plus petites qui sont vers l'arrière.</p>
					<p style="padding: 0 18px;">Cette pièce maintiendra la planche de fond (avec le LCD) en place.</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813541516576030760/unknown.png" alt="Pièce 3D qui maintiendra les trois planches du dessus" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px 2rem 18px;">Cette pièce est très importante afin de maintenir la planche centrale du dessus qui aura la tourelle (et son poids) dessus.</p>
				</div>
				<button type="button" class="collapsible" id="22022021-4">22/02/2021 - Changement de moteur & code</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Changement de programme (et physiquement aussi) !</p>
					<p style="padding: 0 18px;">Malheureusement, même si le moteur pas à pas prévu pour Arduino a un bon couple, il est néanmoins pas rapide du tout ! On change donc par un motoréducteur qui nous est fourni par le prof (mais nous avons acheté les notre).</p>
					<p style="padding: 0 18px;">Pas de chance ! Colin avait fait tout le code pour des moteurs pas à pas. Heureusement, une partie du code va pouvoir être gardé (enfin pour le moment).</p>
					<p style="padding: 0 18px 2rem 18px;">Il y a par exemple la partie (dans le code) de la tourelle qui restera inchangée et les notions d'avancer, de reculer, de vitesse qui reste applicable aussi</p>
				</div>
				<button type="button" class="collapsible" id="22022021-3">22/02/2021 - CNC - Suite découpe des planches derrière le tank</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">On continue avec la découpe de la planche du fond avec l'intégration de l'écran LCD (et pas LSD, d'ailleurs des écran LSD n'existe pas ! En auriez-vous pris ?).</p>
					<p style="padding: 0 18px;">Le projet avance vite ! On a déjà bien dépasser le planning mais on continue à fond sur notre lancée !</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813477301869871164/IMG_20210222_192638.jpg" alt="Planche du fond avec l'écran, tank pris de devant" style="padding: 0;">
								</figure>
							</div>
						</div>
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813477572838686750/IMG_20210222_192648.jpg" alt="Planche du fond avec l'écran, tank pris de derrière" style="padding: 0;">
								</figure>
							</div>
						</div>
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813477989320884244/IMG_20210222_192714.jpg" alt="Planche du fond avec l'écran, tank retourné" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px 2rem 18px;">On aimerait aussi intégrer un ruban led pour que cela soit encore plus estétique.</p>
				</div>
				<button type="button" class="collapsible" id="22022021-2">22/02/2021 - Modélisation 3D - Télécommande</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Après réflexion, nous avons trouvé une solution pour fermer la télécommande en reliant les deux planches (bois et plexiglass).</p>
					<p style="padding: 0 18px;">Cela va être agréable à la vue est au touché normalement. On aura du bois pour le dessous, de l'impression 3D pour le coutour avec des arrondis, du plexiglass au dessus pour voir tous les composants.</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://media.discordapp.net/attachments/807610088361164810/813431082938007572/unknown.png" alt="Modélisation 3D de la télécommande finie" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px 2rem 18px;">On aimerait aussi intégrer un ruban led pour que cela soit encore plus estétique.</p>
				</div>
				<button type="button" class="collapsible" id="22022021-1">22/02/2021 - Impression 3D - Pièce d'attache pour les planches arrière du tank & découpe CNC des planches</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Et c'est partiiiii pour l'impression de la pièce qui va tenir les deux planches du fond du tank.</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813338588833513492/IMG_20210222_101623.jpg" alt="Une face avec le coin qui rentient les 2 planche du fond" style="padding: 0;">
								</figure>
							</div>
						</div>
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://media.discordapp.net/attachments/807610088361164810/813339061888614400/IMG_20210222_101547.jpg" alt="La face avec son coin assemblé sur le tank (que 1 coin)" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px">S'en suit l'impression de l'autre coin (symétrie) et des découpe à la CNC des deux planches à l'arrière.</p>
					<div class="tile is-ancestor" style="padding: 0 18px 2rem 18px;">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813451808995409940/IMG_20210222_174533.jpg" alt="Une face dans le fond tenues par les deux coins" style="padding: 0;">
								</figure>
							</div>
						</div>
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/813452151971250186/IMG_20210222_174613.jpg" alt="Une face dans le fond tenues par les deux coins, tank renversé" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="collapsible" id="21022021-3">21/02/2021 - Modélisation 3D - Pièce d'attache pour les planches arrière du tank</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Après la planche de fond du tank, pour que les deux flancs tiennent, il est judicieux de s'atteler à la modélisation 3D des "coins" qui permettent d'assembler les deux petites planche arrière du tank.</p>
					<p style="padding: 0 18px 2rem 18px;">La modélisation le soir pour imprimer dès le lendemain matin !</p>
				</div>
				<button type="button" class="collapsible" id="21022021-2">21/02/2021 - Modélisation 3D - Télécommande</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">La machine Ugo, elle aussi lancée, continue la télécommande avec l'aide de Davide.</p>
					<p style="padding: 0 18px;">Les travaux collossaux (à nos yeux) avance à pas de géants !</p>
					<p style="padding: 0 18px;">Après de longs moments de réflexion, nous avons gardé le design du plan 2D. Nous somme arrivés sur une base plus petite que la partie du dessus.</p>
					<p style="padding: 0 18px">Cela permet une bonne prise en main comme vous pouvez voir juste en dessous. Il manque tout le bord mais ça c'est plus un prochain épisode...</p>
					<img style="padding: 0 18px 2rem 18px;" width="100%" src="https://media.discordapp.net/attachments/501009071365685249/813434863888760902/unknown.png?width=630&height=473" alt="Planche de fond du tank gravée">
				</div>
				<button type="button" class="collapsible" id="21022021-1">21/02/2021 - Gravure de la planche du fond à la CNC</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">On ne s'arrête plus !</p>
					<p style="padding: 0 18px;">Comme on est fan de notre projet, du groupe, du nom, de l'année, de la vie, de l'air, des particules qui nous entoures, des bosons de Higgs, ... - bon c'est possible que l'on soit un peu trop emballé - on a gravé notre nom et l'année sur la planche du fond du tank.</p>
					<p style="padding: 0 18px;">Comme ça c'est un petit souvenir permanent, gravé à la CNC.</p>
					<img style="padding: 0 18px 2rem 18px;" width="100%" src="https://media.discordapp.net/attachments/501009071365685249/813070033399054356/IMG_20210221_162156.jpg" alt="Planche de fond du tank gravée">
				</div>

				<button type="button" class="collapsible" id="20022021-2" style="transition-delay: 0s;">20/02/2021 - Impression 3D chaîne et engrenage & CNC flancs du tank</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">La machine Davide est en route, on ne l'arrête plus !</p>
					<p style="padding: 0 18px;">Tous les maillons sont imprimés reste plus qu'à en faire une belle chaîne :</p>
					<img style="padding: 0 18px 1rem 18px;" width="50%" src="https://cdn.discordapp.com/attachments/807610088361164810/812692985631735839/IMG_20210220_152752.jpg" alt="Chaîne avec maillons">
					<p style="padding: 0 18px;">Bon, la chaine c'est bien mais il faut savoir la faire tourner si on veut avancer ! C'est donc au tour de la roue dentée à être imprimée !</p>
					<img style="padding: 0 18px 1rem 18px;" width="50%" src="https://media.discordapp.net/attachments/807610088361164810/812719872421003344/IMG_20210220_171734.jpg" alt="Roue dentée avec chaîne">
					<p style="padding: 0 18px">Quand je disais que l'on arrêtais plus Davide... c'est pas pour rien !</p>
					<br>
					<p style="padding: 0 18px">Il a continué avec la CNC cette fois ! C'est vrai que c'est plus joli de voir en vrai, ce que ça donne avec un côté.</p>
					<p style="padding: 0 18px">La chaine parait un peu courte, on rajoutera un maillon.</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/812784212603437056/IMG_20210220_213332.jpg" alt="Roue dentée avec chaîne et un côté du tank" style="padding: 0;">
								</figure>
							</div>
						</div>
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://media.discordapp.net/attachments/807610088361164810/812770439059079229/IMG_20210220_203901.jpg" alt="Roue dentée avec chaîne et un côté du tank" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px">Le mouvement perpetuel Davide continue son cours ! Après un flanc, pourquoi pas 2 ?</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/812775608404541490/IMG_20210220_205849.jpg" alt="CNC creuse deuxième flanc tank" style="padding: 0;">
								</figure>
							</div>
						</div>
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/812778846465949696/IMG_20210220_211229.jpg" alt="Roue dentée avec chaîne et deux côtés du tank" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px">Nous voici bien avancé pour la partie physique du robot, mais il n'y a pas que Davide qui a travaillé ! Regardez la partie plan 2D de la télécommande juste en dessous !</p>
					<p style="padding: 0 18px 2rem 18px;">Pour Davide, comme on ne l'arrête plus, il a continué toute la nuit et voilà que le tank est désormais totalement terminé ! Non c'est une blague, faut quand même pas abuser !</p>
				</div>
				<button type="button" class="collapsible" id="20022021-1" style="transition-delay: 0s;">20/02/2021 - Plan 2D - Télécommande</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">C'est bien d'avancer côté robot/tank, mais la télécommande est également très importante !</p>
					<p style="padding: 0 18px;">Voici donc la réalisation en 2D de la télécommande qui servira à piloter le robot ! Celle-ci a été designée par Ugo.</p>
					<img style="padding: 0 18px 1rem 18px;" width="50%" src="https://media.discordapp.net/attachments/807610088361164810/812705156801101844/unknown.png" alt="Plan 2D télécommande">
					<p style="padding: 0 18px 2rem 18px;">Au même titre que "Pas de bras, pas de chocolat", ici c'est : Pas de télécommande, pas de robot tank !</p>
				</div>

				<button type="button" class="collapsible" id="19022021-1" style="transition-delay: 0s;">19/02/2021 - Impression 3D chaîne - Echec TPU, redesign</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Aïe aïe ! Coup dur ! C'était pas loin mais visiblement un soucis d'impression de la chaîne souple qui dévait être totalement impriméee en TPU.</p>
					<img style="padding: 0 18px 1rem 18px;" width="50%" src="https://media.discordapp.net/attachments/807610088361164810/812406562571812924/IMG_20210219_203215.jpg" alt="Chaîne en TPU fail moitié impression">
					<p style="padding: 0 18px;">Nous ne baissons pas les bras !! Mais afin d'éviter de perdre trop de temps sur le réglage pour du TPU, reprenons ce que nous savons faire, le PLA !</p>
					<p style="padding: 0 18px;">Le temps d'un redesign de la chaîne qui devient une multitude de maillons !</p>
					<img style="padding: 0 18px 1rem 18px;" width="50%" src="https://media.discordapp.net/attachments/807610088361164810/812404511078481949/unknown.png" alt="Chaîne avec maillons modélisation 3D">
					<p style="padding: 0 18px">Forcément, on imprime pas une chaîne comme ça ! On aurait pu tenter mais ça aurait été risqué ! Nous avons fait maillon par maillon ! ;-)</p>
					<div class="tile is-ancestor">
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/812418638921465896/IMG_20210219_212007.jpg" alt="Un maillon imrpimé" style="padding: 0;">
								</figure>
							</div>
						</div>
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://cdn.discordapp.com/attachments/807610088361164810/812451354441285632/IMG_20210219_233010.jpg" alt="7 maillons de chaîne" style="padding: 0;">
								</figure>
							</div>
						</div>
						<div class="tile is-parent is-horizontal">
							<div class="tile is-child">
								<figure class="image">
									<img src="https://media.discordapp.net/attachments/807610088361164810/812453817111019580/IMG_20210219_234100.jpg" alt="8 maillons de chaîne" style="padding: 0;">
								</figure>
							</div>
						</div>
					</div>
					<p style="padding: 0 18px 2rem 18px;">C'est que cela prend forme tout ça !! Une nuit et tout sera imrpimé ! :p</p>
				</div>

				<button type="button" class="collapsible" id="17022021-1" style="transition-delay: 0s;">17/02/2021 - Modélisation 3D - Côté et importation des composants électroniques du robot</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Hop la boum ! La suite continue !</p>
					<p style="padding: 0 18px;">Davide est en forme et continue à modéliser tout ça !</p>
					<p style="padding: 0 18px;">Les différents éléments électronique servant pour le robot sont importés dans Fusion 360. Nous retrouvons : le RFID, l'ultrason, le servo moteur, le moteur pas à pas et évidement l'arduino nano.</p>
					<p style="padding: 0 18px">C'est également le moment de modéliser un des flancs du bas du tank. Le but est de fixer les roulements, chenilles, moteur pas à pas et autres pour pouvoir tester sommairement lors d'un test.</p>
					<p style="padding: 0 18px 2rem 18px;">Le but de ce futur test sera de voir si le couple du moteur pas à pas sera suffisant pour faire tourner la chenille mais aussi pour avoir un minimum de vitesse possible !</p>
				</div>

				<button type="button" class="collapsible" id="16022021-1">16/02/2021 - Modélisation 3D - Chaînes et roues</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">On entame la modélisation 3D sur Fusion 360 !</p>
					<p style="padding: 0 18px;">Davide s'occupe de la réalisation des chenilles, engrenages et "roues".</p>
					<p style="padding: 0 18px 2rem 18px;">Hâte de voir ça fonctionnel ! Pas vous ?</p>
				</div>
				
				<button type="button" class="collapsible" id="10022021-1">10/02/2021 - Nom de domaine</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">C'est ce jour que nous avons acheté arduitank.be chez <a class="is-link" href="https://www.ovh.com/fr/order/webcloud/#/webCloud/domain/select?selection=~()&search=arduitank.be" target="_blank">OVH</a>.</p>
					<p style="padding: 0 18px">Nous avons donc activé l'hébergement lié avec l'offre.</p>
					<p style="padding: 0 18px 2rem 18px;">C'est le début du développement site !</p>
				</div>
				<button type="button" class="collapsible" id="10022021-2">10/02/2021 - Reconnaissance vocale</button>
				<div class="content collapse is-medium">
					<p style="padding: 1rem 18px 0 18px;">Ugo, pour l'interface (application) a développé un code qui utilise <a class="is-link" href="https://cloud.google.com/speech-to-text" target="_blank">la détection de voix avec Google</a>.</p>
					<p style="padding: 0 18px;">Nous allons l'implémenter afin de pouvoir donner des ordres au robot vocalement !</p>
					<p style="padding: 0 18px;">En voici un petit aperçu :</p>
					<img style="padding: 0 18px 2rem 18px;" width="50%" src="https://cdn.discordapp.com/attachments/807610088361164810/809154787739566150/unknown.png">
				</div>
			</div>
		</div>

		<div class="hero-body background-banner background-2blanks-1chain">
		</div>
		
		<div class="hero-body" id="galerie">
			<div class="container">
				<p class="title is-1 has-text-centered" id="information">
					Galerie
				</p>
				<div class="tile is-ancestor">
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="http://arduitank.be/img/banner.png" alt="Plan 2D du robot">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img style="padding: 0 0 .75rem 0;" src="https://media.discordapp.net/attachments/807610088361164810/812404511078481949/unknown.png" alt="8 maillons de chaine">
								<img style="padding: 0 .75rem 0 0;" src="https://media.discordapp.net/attachments/807610088361164810/812705156801101844/unknown.png" alt="Plan 2D télécommande">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/812692985631735839/IMG_20210220_152752.jpg" alt="Une chaîne complète">
							</figure>
						</div>
					</div>
				</div>
				<div class="tile is-ancestor">
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/813182685450338346/IMG_20210221_235425.jpg" alt="Base tank avec côtés">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/813182755088236544/IMG_20210221_235529.jpg" alt="Base tank avec côtés et chaîne">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/813182836126253116/IMG_20210221_235648.jpg" alt="Base tank avec côté sur le dos">
							</figure>
						</div>
					</div>
				</div>
				<div class="tile is-ancestor">
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://media.discordapp.net/attachments/501009071365685249/813070033399054356/IMG_20210221_162156.jpg" alt="Planche dessous tank gravée">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://media.discordapp.net/attachments/501009071365685249/813434863888760902/unknown.png" alt="Modélisation 3D télécommande prototype">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/813431082938007572/unknown.png" alt="Modélisation 3D télécommande fin prototype">
							</figure>
						</div>
					</div>
				</div>
				<div class="tile is-ancestor">
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://media.discordapp.net/attachments/807610088361164810/813477301869871164/IMG_20210222_192638.jpg?width=631&height=473" alt="Base tank sans avant">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://media.discordapp.net/attachments/807610088361164810/813477989320884244/IMG_20210222_192714.jpg?width=631&height=473" alt="Base tank sans avant, retourné">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/813541516576030760/unknown.png" alt="Join capot dessus tank">
							</figure>
						</div>
					</div>
				</div>
				<div class="tile is-ancestor">
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/813716681007562812/IMG_20210223_111847.jpg" alt="Pièce 3D qui maintiendra les trois planches du dessus fixé au char, tank de derrière">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/813721187674488832/image0.jpg" alt="Test du microcontrôleur">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/813731701985509426/IMG_20210223_121739.jpg" alt="2 pièces 3D qui maintiendront les trois planches du dessus fixé au char, tank de côté vers l'avant">
							</figure>
						</div>
					</div>
				</div>
				<div class="tile is-ancestor">
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/813843848085241876/IMG_20210223_194240.jpg" alt="Planche principale du dessus de la base du tank fixée, tank de côté/derrière">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/813843968663748628/IMG_20210223_194308.jpg" alt="Planche principale du dessus de la base du tank fixée, tank de côté/devant">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/813843697275764736/IMG_20210223_194121.jpg" alt="Vue de l'intérieur de la base du tank">
							</figure>
						</div>
					</div>
				</div>
				<div class="tile is-ancestor">
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/813883377656660008/IMG_20210223_222059.jpg" alt="Roue crantée attachée au servo">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/813882941133946931/IMG_20210223_221907.jpg" alt="Roue crantée attachée au servo, tank de côté/derrière">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/813883207551549450/IMG_20210223_221850.jpg" alt="Roue crantée attachée au servo, tank de côté/devant">
							</figure>
						</div>
					</div>
				</div>
				<div class="tile is-ancestor">
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/813902747303936020/IMG_20210223_233746.jpg" alt="Maintient roulement dans la planche">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/813906980044275782/IMG_20210223_235524.jpg" alt="Maintient roulement dans la planche, tank de côté/derrière">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/813909999154888724/IMG_20210223_235513.jpg" alt="Maintient roulement dans la planche, tank de côté">
							</figure>
						</div>
					</div>
				</div>
				<div class="tile is-ancestor">
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/814119787780898846/IMG_20210224_140014.jpg" alt="Boite nouveaux moteurs">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/814136255594889276/IMG_20210224_150550.jpg" alt="Plaque tournante tourelle sur tank">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/814144967798161418/IMG_20210224_153020.jpg" alt="Démontage plaques latérales">
							</figure>
						</div>
					</div>
				</div>
				<div class="tile is-ancestor">
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://media.discordapp.net/attachments/807610088361164810/814179743339249754/IMG_20210224_175803.jpg" alt="Nouvelles plaques latérales placées">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://media.discordapp.net/attachments/807610088361164810/814237212257419264/IMG_20210224_214702.jpg" alt="Moteurs placés">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/814570683316830239/IMG_20210225_195223.jpg" alt="Hack servomoteur">
							</figure>
						</div>
					</div>
				</div>
				<div class="tile is-ancestor">
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/814777132831866890/image0.jpg" alt="Bonton on/off télécommande">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://media.discordapp.net/attachments/807610088361164810/814835673018269716/unknown.png" alt="Modélisation 3D support ultrason">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/814903423878823976/IMG_20210226_171029.jpg" alt="Impression 3D support ultrason">
							</figure>
							<figure class="image" style="margin-top: 20px;">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/814903447047372810/IMG_20210226_171035.jpg" alt="Impression 3D support ultrason">
							</figure>
						</div>
					</div>
				</div>
				<div class="tile is-ancestor">
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/814903528639954944/IMG_20210226_171424.jpg" alt="Plaque avec le support ultrason">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/814903549833773066/IMG_20210226_171431.jpg" alt="Plaque avec le support ultrason">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/814903474352685056/IMG_20210226_171116.jpg" alt="Tank avec plaque ultrason">
							</figure>
						</div>
					</div>
				</div>
				<div class="tile is-ancestor">
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/814903502303395890/IMG_20210226_171129.jpg" alt="Tank avec plaque ultrason">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/814903576932515850/IMG_20210226_175338.jpg" alt="Tank avec l'avant fini">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://media.discordapp.net/attachments/807610088361164810/814917105308532746/IMG_20210226_184447.jpg" alt="Poid du tank avec l'avant fini">
							</figure>
						</div>
					</div>
				</div>
				<div class="tile is-ancestor">
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://media.discordapp.net/attachments/807610088361164810/815695743544590356/unknown.png" alt="Modélisation 3D tourelle">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/815695824923000862/unknown.png" alt="Modélisation 3D tourelle">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/815696012387287053/unknown.png" alt="Modélisation 3D tourelle">
							</figure>
						</div>
					</div>
				</div>
				<div class="tile is-ancestor">
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/815949726507597934/unknown.png" alt="Modélisation 3D tourelle">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/815949827493593108/unknown.png" alt="Modélisation 3D tourelle">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/815988134164299826/unknown.png" alt="Modélisation 3D tourelle">
							</figure>
						</div>
					</div>
				</div>
				<div class="tile is-ancestor">
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/815989414374801418/unknown.png" alt="Modélisation 3D couvercle tourelle">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/816044532713914378/IMG_20210301_212914.jpg" alt="Modélisation 3D tourelle/canon">
							</figure>
						</div>
					</div>
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/816049570067775549/IMG_20210301_214911.jpg" alt="Bague de maintient">
							</figure>
						</div>
					</div>
				</div>
				<div class="tile is-ancestor">
					<div class="tile is-parent is-horizontal">
						<div class="tile is-child">
							<figure class="image">
								<img src="https://cdn.discordapp.com/attachments/807610088361164810/816069808742203442/IMG_20210301_230940.jpg" alt="Maintient flancs et canon">
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="hero-body background-banner background-2blanks-board">
		</div>
		
		<div class="hero-body" id="stats">
			<div class="container" style="max-width: 100%;">
				<p class="title is-1 has-text-centered" id="information">
					Statistiques
				</p>
				<div style="overflow-x: auto; overflow-y: hidden;">
					<table class="table is-fullwidth">
						<thead>
							<tr>
								<th>Joueurs</th>
								<th><abbr title="Nombre de pas du moteur">Moteur</abbr></th>
								<th><abbr title="Tirs qui ont atteint la cible">Tirs touché</abbr></th>
								<th><abbr title="Tirs qui est dans le vide">Tirs dans l'eau</abbr></th>
								<th><abbr title="Total nombre de tirs">Tirs globaux</abbr></th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Joueurs</th>
								<th><abbr title="Nombre de pas du moteur">Moteur</abbr></th>
								<th><abbr title="Tirs qui ont atteint la cible">Tirs touché</abbr></th>
								<th><abbr title="Tirs qui est dans le vide">Tirs dans l'eau</abbr></th>
								<th><abbr title="Total nombre de tirs">Tirs globaux</abbr></th>
							</tr>
						</tfoot>
						<tbody>
							<tr class="is-selected">
								<th>Global</th>
								<td>1500</td>
								<td>10</td>
								<td>50</td>
								<td>60</td>
							</tr>
							<tr>
								<th>Antonin</th>
								<td>500</td>
								<td>1</td>
								<td>20</td>
								<td>21</td>
							</tr>
							<tr>
								<th>Davide</th>
								<td>500</td>
								<td>6</td>
								<td>2</td>
								<td>8</td>
							</tr>
							<tr>
								<th>Ugo</th>
								<td>300</td>
								<td>2</td>
								<td>13</td>
								<td>15</td>
							</tr>
							<tr>
								<th>Colin</th>
								<td>200</td>
								<td>1</td>
								<td>15</td>
								<td>16</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="hero-body background-banner background-2blanks-board-chain">
		</div>
		
		<div class="hero-body" id="contact">
			<div class="container">
				<p class="title is-1 has-text-centered">
					Contact
				</p>
				<div class="content is-large has-text-centered">
					<p class="subtitle is-8">Par mail : <a class="button" href="mailto:info@arduitank.be">Cliquez ici</a></p>
				</div>
				<p class="subtitle is-3 has-text-centered has-text-danger">Formulaire de contact encore non fonctionnel</p>
				<form class="form" action="" method="get">
					<div class="field is-horizontal">
						<div class="field-label is-normal">
							<label class="label">Nom</label>
						</div>
						<div class="field-body">
							<div class="field">
								<p class="control is-expanded has-icons-left">
									<input class="input is-danger" type="text" placeholder="Nom" autocomplete="on" name="name" required>
									<span class="icon is-small is-left">
										<i class="fas fa-user"></i>
									</span>
								</p>
							</div>
						</div>
					</div>

					<div class="field is-horizontal">
						<div class="field-label is-normal">
							<label class="label">Votre email</label>
						</div>
						<div class="field-body">
							<div class="field">
								<p class="control is-expanded has-icons-left">
									<input class="input is-danger" type="email" placeholder="oups@gmaiL.com" autocomplete="on" name="email" required>
									<span class="icon is-small is-left">
										<i class="fas fa-envelope"></i>
									</span>
								</p>
							</div>
						</div>
					</div>

					<div class="field is-horizontal">
						<div class="field-label is-normal">
							<label class="label">Sujet</label>
						</div>
						<div class="field-body">
							<div class="field">
								<div class="control">
									<input class="input" type="text" placeholder="Le sujet du jour est Alphonse, le poisson du voisin !" name="subject">
								</div>
							</div>
						</div>
					</div>

					<div class="field is-horizontal">
						<div class="field-label is-normal">
							<label class="label">Message</label>
						</div>
						<div class="field-body">
							<div class="field">
								<div class="control">
									<textarea class="textarea is-danger" placeholder="Dites nous ce qui vous chagrine ;)" name="message" required></textarea>
								</div>
							</div>
						</div>
					</div>

					<div class="field is-horizontal">
						<div class="field-label">
							<!-- Left empty for spacing -->
						</div>
						<div class="field-body">
							<div class="field">
								<div class="control has-text-centered response">
									<button class="button has-background-grey-dark has-text-white" type="submit" class="submit">
										Envoyer
									</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

		<?php
			include("include/footer.php");
		?>
	</section>

	<button onclick="topFunction()" id="scroll_to_top" title="Go to top">
		<i class="fas fa-arrow-circle-up" alt="Retourner en haut" style="width: 40px; height: 40px;">		
		</i>
	</button>

	<!-- Script Navbar --> 
	<script type="text/javascript">
		document.addEventListener('DOMContentLoaded', () => {
	
			// Get all "navbar-burger" elements
			const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
	
			// Check if there are any navbar burgers
			if ($navbarBurgers.length > 0) {
	
				// Add a click event on each of them
				$navbarBurgers.forEach( el => {
					el.addEventListener('click', () => {
	
						// Get the target from the "data-target" attribute
						const target = el.dataset.target;
						const $target = document.getElementById(target);
	
						// Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
						el.classList.toggle('is-active');
						$target.classList.toggle('is-active');
	
					});
				});
			}
		});
	</script>
	<!-- Transparent navbar -->
	<!--<script>
		// Get navbar
		var navbarEl = document.getElementById("navbarid");

		// When the user scrolls down 1060px from the top of the document, show the button
		window.onscroll = function() {scrollFunctionNav()};

		function scrollFunctionNav() {
			/*console.log(document.body.scrollTop);
			console.log(document.documentElement.scrollTop);
			console.log("---------------");*/
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				//navbarEl.style.backgroundColor = "rgba(84, 84, 84, 0.8)";
				document.getElementById("navbarid").style.backgroundColor = "green";
				//alert(document.getElementById("navbarid"));
			} else {
				//navbarEl.style.backgroundColor = "rgba(84, 84, 84, 1)";
				document.getElementById("navbarid").style.backgroundColor = "red";
			}
		}
	</script>-->

	<!-- Script for Collapse -->
	<script>
		var coll = document.getElementsByClassName("collapsible");
		var i;
		
		for (i = 0; i < coll.length; i++) {
		  coll[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var content = this.nextElementSibling;
			if (content.style.maxHeight){
				content.style.maxHeight = null;
				this.style.transitionDelay = "0.9s";
				this.style.transitionDuration = "1s";
				setTimeout(() => {
					this.style.transitionDelay = "0s";
					this.style.transitionDuration = "0s";
				}, 1000);
			} else {
				content.style.maxHeight = content.scrollHeight + "px";
				this.style.transitionDelay = "0s";
				this.style.transitionDuration = "0s";
			}
		  });
		}
	</script>

	<!-- Script scroll to top & Background navbar -->
	<script>
		//Get the button
		var mybutton = document.getElementById("scroll_to_top");

		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				mybutton.style.display = "block";
			} else {
				mybutton.style.display = "none";
			}
			// Change background navbar
			if (document.body.scrollTop > 1060 || document.documentElement.scrollTop > 1060) {
				document.getElementById("navbarid").style.backgroundColor = "rgba(84, 84, 84, 0.75)";
			} else {
				document.getElementById("navbarid").style.backgroundColor = "rgba(54, 54, 54, 1)";
			}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>
</body>
</html>