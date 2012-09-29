<?php
// N'a rien à voir avec du calcul. Mise en forme.
echo '
<!DOCTYPE html>
<html lang="fr"> 
<head>
	<title>Antoine Augusti</title>
	<meta charset="utf-8" />
	<meta name="description" content="Antoine Augusti : développement web, actualité technologique et projets en tout genres."/>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
	<style>
	body {
		font-family:"Open Sans";
		background:#EFEFEF url(http://www.thibaud-dauce.fr/images/fond.png);
		color:#555;
		font-size:13px;
		width:80%;
		margin:5% auto;
		line-height:20px;
	}
	h3 {
		color:#3D79D0;
		text-shadow:0 2px 3px #CCC;
		font-size:18px;
	}
	.grey-post {
	background: whiteSmoke;
	border: 1px solid #E5E5E5;
	padding: 10px;
	-moz-box-shadow: 0 0 10px #CCC;
	-webkit-box-shadow: 0 0 10px #CCC;
	box-shadow: 0 0 10px #CCC;
	margin: 10px 0;
	}
	.grey-post b {
		color:#DD4B39;
	}
	.green {
		color:#009952;
		font-weight:bold;
	}
	a {
		color:#1155CC;
		text-decoration:none;
	}
	a:hover {
		border-bottom:1px dashed #555;
	}
	</style>
</head>
<body>
';
// Affiche le code source si demandé
if ($_GET['source'] == 'true')
{
	echo '
	<div style="margin:20px 10px">
		<h3>Pseudo code</h3>
		<script src="https://gist.github.com/3795005.js"> </script>
		<hr/>
		<h3>Code PHP (utilis&eacute; sur le site)</h3>
		<script src="https://gist.github.com/3790316.js"></script>
	</div>';
}
// Sinon exécute le programme normal
else
{
	// Permet de compter le temps d'exécution et le nombre d'instructions exécutées.
	function microtime_float() 
	{ 
		list($usec, $sec) = explode(" ", microtime()); 
		return ((float)$usec + (float)$sec); 
	}
	$time_start = microtime_float();
	$nb_instructions = 0;

	// Arrondi et espaces sur les milliers
	function number_space ($number) 
	{
		$number_space = number_format($number, 0, ',', ' ');
		return $number_space;
	}

	// Récupère les informations dans l'URL
	$nb_tests = sqrt(intval($_GET['nb']));
	$nb_decoupes_intervalle = intval($_GET['intervalle']);
	// Nombre de tests avec un maximum de 100 000 tests
	if (!empty($_GET['nbtests']) AND intval($_GET['nbtests']) <= 100000)
	{
		$nb_valeurs = intval($_GET['nbtests']);
	}
	else
	{
		$nb_valeurs = 100000;
	}

	// Valeurs par défaut si on n'a pas d'informations
	if (empty($_GET['nb']) AND empty($_GET['intervalle']))
	{
		$nb_tests = sqrt(2);
		$nb_decoupes_intervalle = 10;
	}

	echo '<h3>Densité de répartition des n * racine de '.intval($_GET['nb']).' dans '.$nb_decoupes_intervalle.' intervalles sur [0;1]. '.number_space($nb_valeurs).' valeurs testées.</h3>';

	// On remplit le tableau avec les parties décimales
	$tab = array();
	for ($i=1;$i<=$nb_valeurs;$i++)
	{
		// Compte le nombre d'instructions exécutées dans le script
		$nb_instructions++;

		$valeur = $i * $nb_tests;
		$partie_entiere = floor($valeur);
		$partie_decimale = $valeur - $partie_entiere;

		$tab[$i] = $partie_decimale;
	}

	// On range les parties décimales dans l'ordre croissant
	sort($tab);

	// On se place dans le 1er intervalle pour commencer à compter les éléments
	$i = 1;
	$compteur = 0;
	$densite = array();

	for ($j=1;$j<=$nb_valeurs;$j++)
	{
		// Compte le nombre d'instructions exécutées dans le script
		$nb_instructions++;
		
		// On se trouve dans le 1ème intervalle. Calculons les bornes de cet intervalle
		$borne_inf = ($i - 1) * (1 / $nb_decoupes_intervalle);
		$borne_sup = $i * (1 / $nb_decoupes_intervalle);

		if ($tab[$j] >= $borne_inf AND $tab[$j] < $borne_sup)
		{
			// L'élément se trouve bien dans l'intervalle, on incrémente le nombre de valeurs dans cet intervalle
			$compteur++;
		}
		else
		{
			// On enregistre le nombre de valeurs dans le ième intervalle
			$densite[$i] = $compteur;
			// On se prépare à compter les éléments dans l'intervalle suivant.
			$compteur = 1;
			$i++;
		}

		// Le dernier élément n'est pas compté avec cette méthode. On le rajoute dans le dernier intervalle en cours.
		if ($j == $nb_valeurs)
		{
			$densite[$i-1] = $densite[$i-1] + 1;
		}	
	}
	echo '<div class="grey-post">';
	// On affiche les densités
	for ($i=1;$i<=$nb_decoupes_intervalle;$i++)
	{
		// Compte le nombre d'instructions exécutées dans le script
		$nb_instructions++;
		
		$borne_inf = ($i - 1) * (1 / $nb_decoupes_intervalle);
		$borne_sup = $i * (1 / $nb_decoupes_intervalle);

		$valeur_theorique = $nb_valeurs / $nb_decoupes_intervalle;
		$pourcentage_ecart = (abs($valeur_theorique - $densite[$i]) / $valeur_theorique) * 100;

		echo 'Intervalle #'.$i.' ['.$borne_inf.' ; '.$borne_sup.'] : <span class="green">'.number_space($densite[$i]).'</span> éléments (valeur théorique : '.number_space($valeur_theorique).', écart de <b>'.$pourcentage_ecart.' %</b>)<br/>';
	}
	echo '</div>';

	// On affiche quelques statistiques
	$time_end = microtime_float();
	$temps_execution = round($time_end - $time_start, 8);
	$instructions_par_seconde = round($nb_instructions / $temps_execution);

	echo '<h3>Statistiques</h3>';
	echo 'Calculs exécutés en '.$temps_execution.' s. '.number_space($nb_instructions).' instructions exécutées. Soit '.number_space($instructions_par_seconde).' instructions par seconde.<br/>
	<div class="grey-post">
		Instructions pour personnaliser : insa.antoine-augusti.fr/maths/<b>chiffre_test</b>/<b>nb_intervalles</b>/<b>nb_tests</b><br/>
		<br/>
		Par exemple : insa.antoine-augusti.fr/maths/<b>2</b>/<b>20</b>/<b>1000</b> testera le script avec racine de 2, sur 20 intervalles et avec 1 000 valeurs.<br/>
	</div>
	<br/>
	<a href="http://insa.antoine-augusti.fr/maths/source/" title="Code source">Cliquez ici</a> pour voir le code source.<br/>';
}
echo '
<br/>
&copy; 2012 Antoine AUGUSTI
</body>
</html>';
?>