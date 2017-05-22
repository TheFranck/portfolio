<?php
	$title = "François SARIN | Développeur Web & Infographiste junior";
	$qualities = [
		"Travailleur",
		"Sympathique",
		"Créatif",
		"Curieux",
	];

?>
<!DOCTYPE html>

<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Pour etre utiliser par edge -->
	<title><?php echo $title; ?></title>
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700" rel="stylesheet">
	<link rel='stylesheet' href="css/style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<!-- Header -->
	<header>
		<div class="container">
			<div class="row">
				<div class="navigation">
					<div class="logo">
						<a href="#"><h1><img src="img/background/logo-fsarin.png" alt="Logo de mon site web François SARIN"></h1></a>
					</div>
						<nav class="navbar">
							<ul id="menu">
								<li><a class="scroll hvr-underline-from-left" id="aboutMe" href="#accueil">Accueil</a></li>
								<li><a class="scroll hvr-underline-from-left" id="competence" href="#competence-section">Mes compétences</a></li>
								<li><a class="scroll hvr-underline-from-left" id="formation" href="#formation-section">Mes formations</a></li>
								<li><a class="scroll hvr-underline-from-left" id="realisation" href="#">Mes réalisations</a></li>
							</ul>					
						</nav>
				</div>
			</div>
			<div class="phrase">
				<div class="text">
					<h1 class="catchphrase">Je suis <span id="word">créatif</span></h1>
				</div>
					<a class="scroll down-arrow" id="about" href="#">
						<img src="img/background/down-arrow_svg.svg" alt="flèche qui vous mène à A propos">
					</a>
			</div>

		</div>
	</header>
	<!--A Propos -->
	<section id="accueil">
		<div class="container">
			<div class="row container-presentation">
				<div class="presentation-text">
				<h2>à propos</h2>
				<p>Bonjour, je m'appelle François SARIN et je suis actuellement en formation Développeur web et mobile à l'IT-Akademy.</p>
				<p>Après l'obtention de mon Baccalauréat Science tertiaire et technologies option Informatique de gestion, j'ai occupé le poste de préparateur de commandes et de magasinier pendant plusieurs années.</p>
				<p>Suite à un licensiement économique survenu en 2014, on m'a donné l'opportunité d'effectuer une formation de Chef de projet multimédia spécialisation webdesigner à l'IESA multimédia à Paris en 2015 et qui m'a énormement plu.</p>
				<p> Je recherche activement un stage d'une durée de 2 mois afin de valider ma formation de développeur web et mobile et, par la suite, un contrat en alternance pour la formation de développeur FullStack. </p>

				<ul>
					<li>Nom : François SARIN</li>
					<li>E-Mail : <a href="mailto:f-sarin@sfr.fr">f-sarin@sfr.fr</a></li>
					<li>Téléphone : 06.22.24.54.75</li>
				</ul>
				</div>
			<img src="img/realisation/portrait.png" alt="Illustration de François SARIN en guise de photo de présentation">
			</div>
		</div>	
	</section>
	<section id="competence-section">
	<div class="container">
		<div class="row">
		<div class="container-competence">
		<h2>Mes Compétences</h2>
		<p>Voici mes super compétences de ouf, guedin</p>
		</div>
			<div>	
				<ul>
					<?php 
					foreach ($qualities as $value) {
						echo "<li>" . $value . "</li>";
					}
					?>
				</ul>	
			</div>	
		</div>
	</div>	
	</section>
	<section id="formation-section">
	<div class="container">
		<div class="row">
		<div class="container-formation">
		<h2>Mes Formations</h2>
		<p>Depuis le temps que je ne suis pas retourné à l'école</p>
		</div>
			<div>	
				
			</div>	
		</div>
	</div>	
	</section>

	<footer>
		
		<p> François SARIN | 2017.IT-Akademy | Tout droit réservé.</p>

	</footer>

</body>
</html>


