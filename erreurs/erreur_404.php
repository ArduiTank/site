<!DOCTYPE html>
<html lang="fr" style="overflow-y: auto; scroll-behavior: smooth;">
<head>
	<?php
		$pageTitle = 'Cette page n\'existe pas !';
		include("../include/header.php");
	?>
</head>
<body>
	<section class="hero is-dark is-fullheight">
		<?php
			include("../include/navbar.php");
		?>
		<section class="hero is-danger" style="padding-top: 100px;">
			<div class="hero-body">
				<div class="container">
					<img class="image is-4by4" src="https://arduitank.be/img/Logo%20V2.2%20min.png" height="auto" width="300px" style="padding: 0 0 3rem 0;">
					<h1 class="title is-1">
						Erreur 404
					</h1>
					<h2 class="subtitle is-3">
						Cette page n'existe pas :/
					</h2>
				</div>
			</div>
		</section>

		<?php
			include("../include/footer.php");
		?>
	</section>
</body>
