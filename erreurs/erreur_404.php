<!DOCTYPE html>
<html lang="fr" style="overflow-y: auto; scroll-behavior: smooth;">
<head>
	<?php
		$pageTitle = 'Cette page n\'existe pas !';
		include("include/header.php");
	?>
</head>
<body>
	<section class="hero is-dark is-fullheight">
		<?php
			include("include/navbar.php");
		?>
		<section class="hero is-light" style="padding-top: 100px;">
			<div class="hero-body is-marginless is-paddingless">
				<div class="container">
					<img class="image is-4by4" src="../img/logo_transparent.png" height="300px" width="300px">
				</div>
			</div>
		</section>
		<section class="hero is-danger">
			<div class="hero-body">
				<div class="container">
					<h1 class="title">
						Erreur 404
					</h1>
					<h2 class="subtitle">
						Cette page n'existe pas :/
					</h2>
				</div>
			</div>
		</section>
	</section>
</body>
