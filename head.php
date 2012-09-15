<?php
session_start();
require "kernel/config.php";
require "kernel/fonctions.php";
?>
<!DOCTYPE html>
<html lang="fr"> 
<head>
	<?php display_page_title(); ?>
	<meta charset="utf-8" />
	<meta name="description" content="Antoine Augusti : développement web, actualité technologique et projets en tout genres."/>
	<meta name="keywords" content="'Antoine Augusti', Augusti, 'Pretty Web', TPE, EAF, 'Energie nucléaire', 'Louis Haudecoeur', 'Jehan Ango'"/> 
	<meta name="author" content="Antoine Augusti"/> 
	<meta name="revisit-after" content="2 days"/> 
	<meta name="Robots" content="all"/>
	<link href='http://fonts.googleapis.com/css?family=Nunito|Open+Sans:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo DOMAINE; ?>css/style.css" />
	<link rel="stylesheet" href="<?php echo DOMAINE; ?>css/uniform.css" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo IMAGE_PROFIL; ?>">
	<link rel="image_src" href="<?php echo IMAGE_PROFIL; ?>" />

	<script src="//code.jquery.com/jquery-latest.min.js"></script>
	<script src="//static.augusti.fr/js/scroll.js"></script>
	<script src="<?php echo DOMAINE; ?>js/load_fade.js"></script>
	<script src="<?php echo DOMAINE; ?>js/uniform.js"></script>
	<script>
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-12045924-3']);
	  _gaq.push(['_setDomainName', '.antoine-augusti.fr']);
	  _gaq.push(['_trackPageview']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</head>
<!--
// Certains éléments du design sont la propriété de Jonathan NOBLE
// Copyright 2012 Antoine AUGUSTI (www.antoine-augusti.fr) - Jonathan NOBLE (http://twitter.com/Gafisme)
// Ah, et vous savez quoi ? 42.
-->
	<body>
	<?php display_header(); ?>

	<div id="wrap">
		<div id="wrap-inner">
			<div id="corps" class="justify">
				
				<?php
				if (substr($_SERVER['PHP_SELF'],1,strlen($name_page)-4) != '404')
				{
				?>
				<div class="linear-gray justify">
					<img src="<?php echo IMAGE_PROFIL; ?>" class="avatar" alt="Antoine Augusti" />
					Bonjour. Je m'appelle Antoine AUGUSTI et je suis étudiant à l'<a href="//www.insa-rouen.fr" target="_blank" title="INSA Rouen">INSA de Rouen</a>. Vous vous trouvez sur mon site personnel, c'est l'occasion de faire plus ample connaissance ! Découvrez ici mes projets, mes articles de blogs, mes expériences...<br>
					<br />
					J'ai déjà réalisé de nombreux sites webs qui totalisent plus de 5 000 visiteurs par jour. Soucieux de produire un travail de qualité, je travaille d'arrache-pied. Je suis méticuleux, perfectionniste et ambitieux. L'optimisation et la clarté sont mes maîtres mots. Ma citation préférée est <span class="italic">"less is more"</span>.
				</div>
				<?php
				}
				?>