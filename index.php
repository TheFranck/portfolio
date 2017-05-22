<?php
	$title = "François SARIN | Développeur Web & Infographiste junior";
	
	$menuList = [
		[
		"content" =>"Accueil",
		"link" => "#accueil",
		"id" => "accueil",
		],

		[
		"content" =>"Mes compétences",
		"link" => "#competence-section",
		"id" => "compétence",
		],

		[
		"content" =>"Mes formations",
		"link" => "#formation-section",
		"id" => "formation",
		],
		
		[
		"content" =>"Mes réalisations",
		"link" => "#realisation",
		"id" => "realisation",
		],
	];

	$h2 = [
		"à propos",
		"Mes compétences",
		"Mes formation",
	];

	$paragraphe = [
		"Voici mes super compétences de ouf, guedin",
		"Depuis le temps que je ne suis pas retourné à l'école",
	];


	$qualities = [
		"Travailleur",
		"Sympathique",
		"Créatif",
		"Curieux",
	];

	$contentPropos = [
		"Bonjour, je m'appelle François SARIN et je suis actuellement en formation Développeur web et mobile à l'IT-Akademy.",
		"Après l'obtention de mon Baccalauréat Science tertiaire et technologies option Informatique de gestion, j'ai occupé le poste de préparateur de commandes et de magasinier pendant plusieurs années.",
		"Suite à un licensiement économique survenu en 2014, on m'a donné l'opportunité d'effectuer une formation de Chef de projet multimédia spécialisation webdesigner à l'IESA multimédia à Paris en 2015 et qui m'a énormement plu.",
		"Je recherche activement un stage d'une durée de 2 mois afin de valider ma formation de développeur web et mobile et, par la suite, un contrat en alternance pour la formation de développeur FullStack.",
	];

	$identity = [
		"Nom" => "Francois SARIN",
		"E-Mail" => "f-sarin@sfr.fr",
		"Téléphone" => "06.22.24.54.75",
	];

	$footerContent = "François SARIN | 2017.IT-Akademy | Tout droit réservé.";

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
								<?php
								foreach ($menuList as $value) {
									echo '<li><a class="scroll hvr-underline-from-left" id="'. $value["id"] . '" href="' . $value["link"] . '">' .  $value["content"] . '</a></li>';
								}
							?>	
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
				<h2><?php echo $h2[0]; ?></h2>
				<?php 
					foreach ($contentPropos as $value) 
					{
						echo "<p>" . $value . "</p>";
					};
				?>
				<ul>
					<?php 
					foreach ($identity as $key => $value) 
					{
						echo "<li>" . $key . " " . ":" . " " . $value . "</li>";
					};
					?>
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
		<h2><?php echo $h2[1]; ?></h2>
		<p><?php echo $paragraphe[0]; ?></p>
		</div>
			<div>	
				<ul>
					
				</ul>	
			</div>	
		</div>
	</div>	
	</section>
	<section id="formation-section">
	<div class="container">
		<div class="row">
		<div class="container-formation">
		<h2><?php echo $h2[2]; ?></h2>
		<p><?php echo $paragraphe[1]; ?></p>
		</div>
			<div>	
				
			</div>	
		</div>
	</div>	
	</section>

	<footer>
		
		<p> <?php echo $footerContent; ?></p>

	</footer>

</body>
</html>


