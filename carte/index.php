<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8"/>
<title>Carte de visite | Antoine Augusti</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<meta name="description" content="Carte de visite d'Antoine Augusti"/>
<meta name="keywords" content="'Antoine Augusti', Augusti, 'Pretty Web'"/>
<meta name="author" content="Antoine Augusti"/>
<meta name="revisit-after" content="2 days"/>
<meta name="Robots" content="all"/>
<script src="//code.jquery.com/jquery-latest.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" type="image/x-icon" href="http://www.antoine-augusti.fr/images/favicon.png">
<script> 
$(document).ready(function(){
	$("#content").fadeIn(4000);
	$('.photo').delay(1000).fadeIn(4000);
	$(".contact").delay(2000).fadeIn(4000);
	$("#footer").delay(3000).fadeIn(4000);
});
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
<body>
<div id="content">
	<div class="photo">
		<img src="//www.antoine-augusti.fr/images/avatar.jpg" alt="Portrait d'Antoine Augusti"/>
	</div>
	<h1>ANTOINE AUGUSTI</h1>
	<h5 class="margin_title">Étudiant à l'<a href="//www.insa-rouen.fr" title="INSA Rouen" target="_blank">INSA Rouen</a></h5>
	<h5>Développeur chez <a href="//quantic-telecom.net" title="Quantic Télécom" target="_blank">Quantic Télécom</a></h5>
	<br/>
	<img src="images/skills.png" class="icone"/>HTML5, CSS3, PHP, SQL, AJAX, JS, SPIP, WordPress...<br>
	<br/>
	<div class="contact">
		<img src="images/iphone.png" class="icone" alt="Icone de portable"/>+33 6 87 09 98 92<br>
		<img src="images/email.png" class="icone" alt="Icone d'email"/>antoine@augusti.fr<br>
		<img src="images/skype.png" class="icone" alt="Icone de Skype"/>AntoineAugusti<br>
		<img src="images/website.png" class="icone" alt="Icone de site internet"/><a href="//www.antoine-augusti.fr" title="Site personnel" target="_blank">www.antoine-augusti.fr</a><br>
		<img src="images/frog.png" class="icone" alt="Logo de Pretty Web"/><a href="//www.pretty-web.com" title="Pretty Web" target="_blank">www.pretty-web.com</a><br>
		<img src="images/facebook.png" class="icone" alt="Icone de Facebook"/><a href="//www.facebook.com/AntoineAugusti" title="Facebook Antoine Augusti" target="_blank">www.facebook.com/AntoineAugusti</a><br>
		<img src="images/twitter.png" class="icone" alt="Icone de Twitter"/><a href="//twitter.com/AntoineAugusti" title="Twitter Antoine Augusti" target="_blank">@AntoineAugusti</a><br>
	</div>
</div>
<div id="footer">
	 &copy; <?php echo date("Y"); ?>
	 Antoine Augusti
</div>
</body>
</html>