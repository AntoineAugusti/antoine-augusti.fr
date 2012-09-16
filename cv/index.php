<?php
session_start();
require "../kernel/config.php";
require "../kernel/fonctions.php";
?>
<!DOCTYPE html>
<html lang="fr"> 
<head>
	<title>CV | Antoine Augusti</title>
	<meta charset="utf-8" />
	<meta name="description" content="Antoine Augusti : développement web, actualité technologique et projets en tout genres."/>
	<meta name="keywords" content="'Antoine Augusti', Augusti, 'Pretty Web', TPE, EAF, 'Energie nucléaire', 'Louis Haudecoeur', 'Jehan Ango'"/> 
	<meta name="author" content="Antoine Augusti"/> 
	<meta name="revisit-after" content="2 days"/> 
	<meta name="Robots" content="all"/>

	<link rel="stylesheet" href="<?php echo DOMAINE; ?>css/reset.css" />
	<link rel="stylesheet" href="<?php echo DOMAINE; ?>css/uniform.css" />
	<link rel="stylesheet" href="<?php echo DOMAINE; ?>cv/style.css" />
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Exo:600'>
	
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo IMAGE_PROFIL; ?>">
	<link rel="image_src" href="<?php echo IMAGE_PROFIL; ?>" />

	<script src="//code.jquery.com/jquery-latest.min.js"></script>
	<script src="<?php echo DOMAINE; ?>js/uniform.js"></script>
	<script>
	$(document).ready(function(){
		$("#gray_bg").fadeIn(2000);
		$('#header').delay(400).fadeIn(1600);
		$("#menu").delay(500).fadeIn(1500);
		$("#presentation").delay(1000).fadeIn(1500);
		$("#content").delay(2000).fadeIn(1500);
		$("#footer").delay(2000).fadeIn(1500);
	});
	</script>
	<script>
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-12045924-3']);
	  _gaq.push(['_setDomainName', '.antoine-augusti.fr']);
	  _gaq.push(['_trackPageview']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : '//www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</head>
<!--
// Certains éléments du design sont la propriété de Jonathan NOBLE
// Copyright 2012 Antoine AUGUSTI (www.antoine-augusti.fr) - Jonathan NOBLE (//twitter.com/Gafisme)
// Ah, et vous savez quoi ? 42.
-->
<body>
<?php display_header(); ?>
<div id="menu">
	<div class="content">
		<a onclick="return false;" title="Informations" data-div="#infos" class="selected"><span class="icon infos"></span>Infos</a>
		<a onclick="return false;" title="Langues" data-div="#langues"><span class="icon drapeau"></span>Langues</a>
		<a onclick="return false;" title="Expériences" data-div="#div_experiences"><span class="icon experiences"></span>Expériences</a>
		<a onclick="return false;" title="Connaissances" data-div="#div_connaissances"><span class="icon competences"></span>Connaissances</a>
		<a onclick="return false;" title="Intérêts" data-div="#interet"><span class="icon interets"></span>Intérêts</a>
		<a onclick="return false;" title="Contact" data-div="#div_contact"><span class="icon contact"></span>Contact</a>
	</div>
</div><!-- END MENU -->

<div id="presentation">
	<div class="content">
		<div class="text">
			<h1>Qui suis-je ?</h1>
			Je m'appelle Antoine AUGUSTI et je suis un élève ingénieur à l'INSA de Rouen. Mes passions sont le traitement de l'information, l'informatique, l'algorithme, les mathématiques, l'anglais et la communication. Soucieux de produire un travail de qualité, je travaille d'arrache-pied. Je suis méticuleux, perfectionniste et ambitieux. L'optimisation et la clarté sont mes maîtres mots.
		</div>

		<img src="<?php echo IMAGE_PROFIL; ?>" alt="Antoine AUGUSTI" class="avatar fade" />
	</div>
</div><!-- END PRESENTATION -->
<div id="content">
	<div id="langues" class="hide" style="display:none">
		<span class="titre">Langues<span class="icon drapeau"></span></span>
		<div class="texte">
			<ul>
				<li><span class="bleu"> Anglais :</span> Courant - B2 certifié par l’université de Cambridge – Séjours.</li>
				<li><span class="bleu"> Italien :</span> Bon niveau scolaire.</li>
				<li><span class="bleu"> Espagnol :</span> Débutant.</li>
			</ul>
		</div>
	</div>
	<!-- END LANGUES -->
	<div id="infos" class="hide">
		<div class="texte">
			<img src="<?php echo IMAGE_PROFIL; ?>" alt="Antoine Augusti" class="photo"/>
			<h2>Antoine AUGUSTI</h2>
			<span class="italic">Élève ingénieur à l'INSA de Rouen</span><br>
			76000 Rouen<br>
			<?php echo age('01/12/1993'); ?> ans - Français<br>
			<br />
			antoine@augusti.fr<br>
			+33 6 87 09 98 92<br>
			<u>www.antoine-augusti.fr</u>
		</div>

		<div class="texte">
			<img src="/images/pdf.png" class="download_pdf"> Vous pouvez consulter mon CV en version PDF en <a href="/cv.pdf" title="CV PDF">cliquant ici</a>.
		</div>
	</div>
	<!-- END INFOS -->
	<div id="div_experiences" class="hide" style="display:none">
		<span id="experiences" class="titre">Cursus scolaire<span class="icon school"></span></span>
		<div class="texte">
			<ul>
				<li><span class="bleu">Depuis septembre 2011 :</span> Cycle préparatoire à l’INSA de Rouen – Section Musique Études. Institut National des Sciences Appliquées – Rouen (76).</li>
				<li><span class="bleu">Septembre 2008 - juin 2011 :</span> Baccalauréat Scientifique – Spécialité mathématiques – Section européenne anglais - Mention bien. Lycée Jehan Ango - Dieppe (76).</li>
				<li><span class="bleu">2004 - 2008:</span> Classes à horaires aménagées musique. Collège Georges Braque - Dieppe (76).</li>
			</ul>			
		</div>
		<span class="titre">Quelques projets<span class="icon work"></span></span>
		<?php
			display_projets('cv');
		?>
	</div>
	<!-- END EXPERIENCES -->
	<div id="div_connaissances" class="hide" style="display:none">
		<span id="connaissances" class="titre">Connaissances diverses<span class="icon competences"></span></span>
		<div class="texte">
			<ul>
				<li><span class="bleu">Langages de programmation :</span> HTML 5, CSS 3, PHP, SQL, JavaScript (notions élémentaires), Pascal, LaTex.</li>
				<li><span class="bleu">CMS / Bibliothèques / Frameworks :</span> Symfony, SPIP, WordPress, jQuery, Mootools.</li>
				<li><span class="bleu">Logiciels / OS :</span> Navicat, Notepad ++, Sublime Text 2, Git, Photoshop, Geany, Code Blocks, Word, Excel, Power Point. Ubuntu, Windows, Mac OS X.</li>
			</ul>
		</div>
	</div>
	<!-- END CONNAISSANCES -->
	<div id="interet" class="hide" style="display:none">
		<span class="titre">Centres d’intérêts<span class="icon interets"></span></span>
		<div class="texte">
			<ul>
				<li><span class="bleu">Musique :</span> Violon – 11 années de pratique – Orchestre symphonique, trio, quatuor, soliste.</li>
				<li><span class="bleu">Sports :</span> Natation – Championnat de France UNSS. Cyclisme et tennis – Loisir.</li>
				<li><span class="bleu">Actualité / Politique :</span> Veille active.</li>
			</ul>
		</div>
	</div>
	<!-- END INTERETS -->
	<div id="div_contact" class="hide" style="display:none">
		<span id="contact" class="titre">Contact<span class="icon contact"></span></span>
		<div class="texte">
			<?php
			display_full_contact();
			?>
		</div>

		<span class="titre">Contactez-moi par email<span class="icon contact"></span></span>
		<?php
		display_contact_by_email('cv');
		?>
	</div>
	<!-- END CONTACT -->
</div>
<!-- END CONTENT -->
<div id="footer">
	Copyright &copy; <?php echo date("Y"); ?> Antoine Augusti
</div>
<!-- END FOOTER -->
<script>$("#menu .content a").click(function(){var div_show=$(this).attr("data-div");$(".hide:visible").stop().slideUp(1000,function(){$(div_show).stop().slideDown(1000)})});$("#menu .content a").mouseover(function(){var current_link=$(this);$("#menu .content a").not(current_link).stop().animate({"opacity":"0.5"},"slow")}).mouseout(function(){$("#menu .content a").stop().animate({"opacity":"1"},"slow")});$("#menu .content a").click(function(){$("#menu .content a").removeClass('selected');$(this).addClass('selected')});</script>
</body>
</html>