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
	<link href='http://fonts.googleapis.com/css?family=Roboto|Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo DOMAINE; ?>cv/style.css" />
	
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo IMAGE_PROFIL; ?>">
	<link rel="image_src" href="<?php echo IMAGE_PROFIL; ?>" />

	<script src="//code.jquery.com/jquery-latest.min.js"></script>
	<script src="<?php echo DOMAINE; ?>js/uniform.js"></script>
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-12045924-3']);
	_gaq.push(['_setDomainName', 'antoine-augusti.fr']);
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
// Copyright 2012 Antoine AUGUSTI (www.antoine-augusti.fr) - Jonathan NOBLE (//twitter.com/Gafisme)
// Ah, et vous savez quoi ? 42.
-->
<body>
<?php display_header(); ?>
<div id="content">
	<div id="infos">
		<div class="texte">
			<img src="<?php echo IMAGE_PROFIL; ?>" alt="Antoine Augusti" class="photo"/>
			<h2>Antoine AUGUSTI</h2>
			<span class="italic">Élève ingénieur à l'INSA de Rouen</span><br/>
			76000 Rouen<br/>
			<?php echo age('01/12/1993'); ?> ans - Français<br/>
		</div>
		<div class="clear"></div>
	</div>
	<!-- END INFOS -->
	
	<div id="div_experiences">
		<span id="experiences" class="titre">Cursus scolaire<span class="icon school"></span></span>
		<div class="texte">
			<ul>
				<li><span class="bleu">Depuis septembre 2011 :</span> Cycle préparatoire à l’INSA de Rouen – Pré-spécialisation en génie mathématiques et architecture des systèmes d’information. Institut National des Sciences Appliquées – Rouen (76).</li>
				<li><span class="bleu">Septembre 2008 - juin 2011 :</span> Baccalauréat Scientifique – Spécialité mathématiques – Section européenne anglais - Mention bien. Lycée Jehan Ango - Dieppe (76).</li>
				<li><span class="bleu">2004 - 2008 :</span> Classes à horaires aménagées musique. Collège Georges Braque - Dieppe (76).</li>
			</ul>			
		</div>
		<span class="titre">Quelques projets<span class="icon work"></span></span>
		<?php
			display_projets('cv');
		?>
	</div>
	<!-- END EXPERIENCES -->

	<div id="div_connaissances">
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

	<div id="langues">
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

	<div id="interet">
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

	<div id="div_contact">
		<span id="contact" class="titre">Contact<span class="icon contact"></span></span>
		<div class="texte">
			<?php
			display_full_contact();
			?>
		</div>
	</div>
	<!-- END CONTACT -->

</div>
<!-- END CONTENT -->
<div id="footer">
	Copyright &copy; <?php echo date("Y"); ?> Antoine Augusti
</div>
<!-- END FOOTER -->

</body>
</html>