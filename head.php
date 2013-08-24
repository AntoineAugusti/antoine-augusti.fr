<?php
ini_set('session.cookie_domain', '.antoine-augusti.fr');
session_start();
require "kernel/config.php";
require WEBSITE_PATH."/kernel/fonctions.php";
?>
<!DOCTYPE html>
<html lang="<?php echo substr($_SESSION['lang'], 0, 2); ?>"> 
<head>
	<?php display_page_title(); ?>
	<meta charset="utf-8" />
	<meta name="description" content="Antoine Augusti : développement web, actualité technologique et projets en tout genres."/>
	<meta name="keywords" content="'Antoine Augusti', Augusti, 'Pretty Web', TPE, EAF, 'Energie nucléaire', 'Louis Haudecoeur', 'Jehan Ango'"/> 
	<meta name="author" content="Antoine Augusti"/> 
	<meta name="revisit-after" content="2 days"/> 
	<meta name="Robots" content="all"/>
	<link href="https://plus.google.com/104395355791731974347/" rel="author" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link href='http://fonts.googleapis.com/css?family=Nunito|Open+Sans:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo DOMAINE; ?>css/style.css" />
	<link rel="stylesheet" href="<?php echo DOMAINE; ?>css/uniform.css" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo IMAGE_PROFIL; ?>">
	<link rel="image_src" href="<?php echo IMAGE_PROFIL; ?>" />

	<script src="//code.jquery.com/jquery-1.8.0.min.js"></script>
	<script src="//static.augusti.fr/js/scroll.js"></script>
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
				<?php if (substr($_SERVER['PHP_SELF'], 1, strlen($name_page)-4) != '404') : ?>
				<div class="presentation_self justify">
					<img src="<?php echo IMAGE_PROFIL; ?>" class="avatar" alt="Antoine Augusti" />
					<?php echo $lang['header_presentation_self']; ?>
					<div class="clear"></div>
				</div>
				<?php endif; ?>