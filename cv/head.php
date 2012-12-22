<?php
ini_set('session.cookie_domain', substr($_SERVER['SERVER_NAME'], strpos($_SERVER['SERVER_NAME'], "."), 100));
session_start();
?>
<!DOCTYPE html>
<?php if (isset($_COOKIE['french']) OR !isset($_COOKIE['english'])) {$language="french";}else{$language="english";} ?>
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
		<title>CV | Antoine Augusti</title> 
		<link rel="stylesheet" type="text/css" href="style.css" /> 
		<meta name="description" content="Antoine Augusti : développement web, actualité technologique, devoirs, baccalauréat et projets en tout genres"/>
		<meta name="keywords" content="'Antoine Augusti', Augusti, 'Pretty Web', TPE, EAF, 'Energie nucléaire', 'Louis Haudecoeur', 'Jehan Ango'"/> 
		<meta name="abstract" content="Description du site"/> 
		<meta name="subject" content=""/> 
		<meta name="author" content="Antoine Augusti"/> 
		<meta name="revisit-after" content="2 days"/> 
		<meta name="publisher" content=""/> 
		<meta name="date-creation-ddmmyyyy" content="30012010"/> 
		<meta name="Robots" content="all"/> 
		<meta name="Rating" content="General"/> 
		<meta name="location" content="France, FRANCE"/> 
		<meta name="expires" content="never"/> 
		<meta name="Distribution" content="Global"/> 
		<meta name="Audience" content="General"/> 
		<meta http-equiv="Content-Language" content="fr" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>  
		<script type="text/javascript" src="http://static.augusti.fr/js/scroll.js"></script>
		<script type="text/javascript" src="http://static.augusti.fr/js/airport.js"></script>
		<script type="text/javascript">
		$('#titre_langues').airport([ 'Langues' ]);
		$('#titre_infos').airport([ 'Informations générales' ]);
		</script>
		<!--[if IE]><style>#topbar {background:#333}</style><![endif]--> 
		<link rel="shortcut icon" type="image/x-icon" href="http://www.antoine-augusti.fr/images_site/favicon.png"> 
		
		<script type="text/javascript">
		$(document).ready(function(){
	
			$("#gray_bg").fadeIn(2000);
			$('#header').delay(400).fadeIn(1600);
			$("#topbar").delay(500).fadeIn(1500);
			
			$("#content").delay(2000).fadeIn(1500);
			$("#footer").delay(2000).fadeIn(1500);
			
		});
		</script>
		
		<script type="text/javascript">
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
	<html>
	<body>
	
	
	<div id="gray_bg">
		<div id="header">
			<img src="images/header.png" alt="logo" />
		</div>
		
		<div id ="topbar"> 
		<a onclick="return false;" class="a_infos selected"><img src="images/infos.png" />Infos</a> 
		<a onclick="return false;" class="a_langues"><img src="images/drapeau.png" />Langues</a> 
		<a onclick="return false;" class="a_experiences"><img src="images/experiences.png" />Expériences</a>
		<a onclick="return false;" class="a_connaissances"><img src="images/competences.png" />Connaissances</a>
		<a onclick="return false;" class="a_interet"><img src="images/interets.png" />Intérêts</a>
		<a onclick="return false;" class="a_contact"><img src="images/contact.png" />Contact</a>
		</div>
		
	</div>
	
	<div id="content">