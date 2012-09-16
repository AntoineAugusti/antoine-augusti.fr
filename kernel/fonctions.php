<?php
function display_page_title ()
{
	$name_page = ucfirst(substr($_SERVER['PHP_SELF'],1,strlen($name_page)-4));
	$projet = ucfirst($_GET['projet']);
	if ($name_page != 'Index' AND empty($projet)) 
	{
		echo '<title>'.$name_page.' | Antoine Augusti</title>';
	}
	elseif (!empty($projet)) 
	{
		echo '<title>'.$name_page.' : '.$projet.' | Antoine Augusti</title>';
	}
	else 
	{
		echo "<title>Antoine Augusti</title>";
	}
}

function display_icon_social_network ($alt,$link)
{
	if (strtolower($alt) != 'cv')
	{
		echo '<a href="'.$link.'" target="_blank" title="'.ucfirst($alt).'"><span class="icon '.strtolower($alt).'"></span></a>';
	}
	else
	{
		echo '<a href="'.$link.'" target="_blank" title="'.strtoupper($alt).'"><span class="icon '.strtolower($alt).'"></span></a>';
	}
}
function display_projets ($style = NULL)
{
	if ($style == 'cv')
	{
		$class = 'texte margin_xp justify';
	}
	else
	{
		$class = 'gray-post justify';
	}
	echo '
	<div class="'.$class.'">
		<img src="'.DOMAINE.'images/teen-quotes.png" class="icon-website-tq fade" alt="Teen Quotes" />
		<h2>Teen Quotes</h2>
		Teen Quotes est un site regroupant des citations du quotidien, que l\'on considère comme "vraies". Il est intégralement en anglais, sa version française s\'appelle Kotado.<br>
		<br />
		<ul class="inside-square">
			<li> Inscription d\'utilisateurs.</li>
			<li> Ajout de citations gérées par un panel d\'administration.</li>
			<li> Interface français / anglais.</li>
			<li> Site optimisé pour les mobiles.</li>
			<li> Système de commentaires.</li>
			<li> Système de newsletter.</li>
			<li> Système de profil.</li>
			<li> Système de citations favorites.</li>
			<li> Forte intégration des réseaux sociaux.</li>
		</ul>
		<br />
		<img src="'.DOMAINE.'images/icones/arrow-blue.png" class="icon-link-website" alt="Arrow" /><a href="//teen-quotes.com" target="_blank" title="Teen Quotes">teen-quotes.com</a><br>
		<img src="'.DOMAINE.'images/icones/arrow-blue.png" class="icon-link-website" alt="Arrow" /><a href="//kotado.fr" target="_blank" title="Kotado">kotado.fr</a>
	</div>

	<div class="'.$class.'">
		<img src="'.DOMAINE.'images/quantic-telecom.png" class="icon-website-it fade" alt="Quantic Télécom" />
		<h2>Quantic Télécom</h2>
		Quantic Télécom est le fournisseur d\'accès à Internet des étudiants INSA. Fondée en 2011 par une dizaine d\'élèves-ingénieurs de l\'INSA de Rouen, l\'association Quantic Télécom dispose du statut d\'opérateur de télécommunications déclaré ARCEP.<br>
		<br />
		L\'objectif premier du projet est la fourniture d\'accès Internet libre et performant à un prix extrèmement compétitif aux étudiants des INSA qui logent en résidence ou en ville. Le site web comprend l\'intégralité des paramètres de gestion d\'un FAI, une interface d\'administration et est disponible en français et en anglais.<br>
		<br />
		<img src="'.DOMAINE.'images/icones/arrow-blue.png" class="icon-link-website" alt="Arrow" /><a href="//www.quantic-telecom.net" target="_blank" title="Quantic Télécom">www.quantic-telecom.net</a>
	</div>

	<div class="'.$class.'">
		<img src="'.DOMAINE.'images/pretty-web.png" class="icon-website-pretty-web fade" alt="Pretty Web" />
		<h2>Pretty Web</h2>
		Pretty Web est une petite agence web qui s\'attache à créer de jolis sites et à monter d\'ambitieux projets. Nous aimons le web, nous aimons développer, nous sommes des passionnés qui s\'attachent à réaliser des projets toujours meilleurs.<br>
		<br />
		<img src="'.DOMAINE.'images/icones/arrow-blue.png" class="icon-link-website" alt="Arrow" /><a href="//www.pretty-web.com" target="_blank" title="Pretty Web">www.pretty-web.com</a>
	</div>
	
	<div class="'.$class.'">
		<img src="'.DOMAINE.'images/jehan-ango.jpg" class="icon-website-ango fade" alt="Jehan Ango" />
		<h2>Lycée Jehan Ango</h2>
		Refonte générale du site de mon ancien lycée. J\'ai choisi d\'utiliser le CMS SPIP pour que les professeurs et l\'administration puissent ajouter des articles facilement et rapidement. Le design du site a été totalement revu pour suivre les tendances actuelles.<br>
		<br />
		Le déploiement de ce site a été l\'occasion pour le lycée de changer sa manière de communiquer. Les réseaux sociaux ont été intégrés au site et j\'ai créé une page Facebook pour que les élèves soient facilement informés des dernières nouveautés de leur lycée.<br>
		<br />
		<img src="'.DOMAINE.'images/icones/arrow-blue.png" class="icon-link-website" alt="Arrow" /><a href="//lycees.ac-rouen.fr/ango/" target="_blank" title="Jehan Ango">lycees.ac-rouen.fr/ango/</a>
	</div>
	
	<div class="'.$class.'">
		<img src="'.DOMAINE.'images/pls.png" class="icon-website-pls fade" alt="PLS Fluid Dynamics" />
		<h2>PLS Fluid Dynamics</h2>
		PLS Fluid Dynamics est une entreprise spécialisée dans la simulation numérique en mécanique des fluides (CFD). Comme toute entreprise, PLS Fluid Dynamics avait besoin d\'une visibilité sur internet pour pouvoir toucher de nouveaux clients et présenter son activité en ligne.<br>
		<br />
		Le design du site est sobre, toujours dans l\'optique de conserver un site clair où les informations sont accessibles facilement.<br>
		<br />
		<img src="'.DOMAINE.'images/icones/arrow-blue.png" class="icon-link-website" alt="Arrow" /><a href="//www.pls-fluid-dynamics.com" target="_blank" title="PLS Fluid Dynamics">www.pls-fluid-dynamics.com</a>
	</div>
	
	<div class="'.$class.'">
		<img src="'.DOMAINE.'images/technostress.png" class="icon-website-technostress fade" alt="Technostress" />
		<h2>Technostress</h2>
		Dans le cadre d\'un travail de communication à l\'INSA de Rouen, nous avons dû réaliser un dossier d\'actualité sur le thème de notre choix. Ce travail s\'est conclu par une production écrite d\'une taille conséquente et une soutenance orale.<br>
		<br />
		La problèmatique de mon sujet était <span class="italic">"Les nouvelles technologies de l\'information et de la communication accentuent-elles notre stress ?"</span> portant sur le phénomène du technostress. Je suis très attaché à cette problématique car le domaine des NTIC m\'intéresse beaucoup et les problèmes qu\'elles générent font parti de mes préoccupations.<br>
		<br />
		J\'ai choisi de réaliser également un site web afin de présenter mon travail, en complément du dossier papier et de la présentation orale. La présentation du site reste sobre et minimaliste pour accroître la clarté.<br>
		<br />
		<img src="'.DOMAINE.'images/icones/arrow-blue.png" class="icon-link-website" alt="Arrow" /><a href="//www.technostress.fr" target="_blank" title="Technostress">www.technostress.fr</a>
	</div>';
}

function display_contact_by_email($style = NULL)
{
	if ($style == 'cv')
	{
		$class = 'texte';
	}
	else
	{
		$class = 'gray-post';
	}
	echo '
	<div class="'.$class.'">
		<form action="'.DOMAINE.'?action=send" method="post">
			Sujet :<br>
			<input type="text" name="sujet" size="20" maxlength="30"><br> 
			<br /> 
			Votre nom :<br>
			<input type="text" name="nom" size="20" maxlength="30"><br> 
			<br /> 
			Votre email :<br>
			<input type="text" name="email" size="20" maxlength="30"><br> 
			<br />';
			echo captcha(); echo ' =<br>
			<input type="text" name="captcha" size="20" maxlength="30"><br> 
			<br />
			<textarea rows="10" cols="70" name="message" onblur="javascript:if(this.value==\'\'){this.value=\'Entrez votre mot doux ici.\'}" onFocus="javascript:if(this.value==\'Entrez votre mot doux ici.\'){this.value=\'\'}"></textarea><br>
			<br /> 
			Recevoir une copie de cet email ? : <input type="checkbox" value="1" name="copie" checked/>
			<br />
			<div class="right">
				<input type="submit" name="submit" class="submit" value="Envoyer">
			</div>
			<div class="clear"></div>
		</form>
	</div>';
}

function display_header ()
{
	echo '
	<div id="header">
		<div id="header-content">
			<div id="logo">
				<a href="'.DOMAINE.'" title="Retour à l\'accueil"><img alt="Logo" src="'.DOMAINE.'images/logo.png" /></a>
			</div>

			<div id="social-networks">';
				
				display_icon_social_network('Blog', '//blog.antoine-augusti.fr');
				display_icon_social_network('Cv', '//cv.antoine-augusti.fr');
				display_icon_social_network('Facebook', '//www.facebook.com/AntoineAugusti');
				display_icon_social_network('Twitter', '//www.twitter.com/AntoineAugusti');
				display_icon_social_network('Github', 'https://www.github.com/AntoineAug');
				display_icon_social_network('Instagram', '//statigr.am/antoineaugusti');
				display_icon_social_network('Feed','//www.antoine-augusti.fr/blog/feed/');
	echo '
			</div>
		</div>
	</div><!-- END HEADER -->';
}

function display_icon_contact ($alt, $link, $txt)
{
	echo '<span class="icon-contact '.strtolower($alt).'"></span><a href="'.$link.'" target="_blank" title="'.$alt.'">'.$txt.'</a><br>';
}
function display_full_contact ()
{
	display_icon_contact('Gmail', 'mailto:antoine@augusti.fr', 'antoine@augusti.fr');
	display_icon_contact('Blog', '//blog.antoine-augusti.fr', 'blog.antoine-augusti.fr');
	display_icon_contact('Facebook', '//www.facebook.com/AntoineAugusti', 'www.facebook.com/AntoineAugusti');
	display_icon_contact('Twitter', '//www.twitter.com/AntoineAugusti', '@AntoineAugusti');
	display_icon_contact('Instagram', '//statigr.am/antoineaugusti', 'statigr.am/antoineaugusti');
	display_icon_contact('GitHub', 'https://github.com/AntoineAug', 'github.com/AntoineAug');
	display_icon_contact('YouTube', '//www.youtube.com/AugustiAntoine', 'www.youtube.com/AugustiAntoine');
	display_icon_contact('Skype', '#', 'AntoineAugusti');
	display_icon_contact('Portable', '#', '+33 6 87 09 98 92');
}
function convertirDate ($date)
{
	list($annee, $mois, $jour) = split('-', substr($date, 0, 10));
	if ($annee == date("Y"))
	{
		echo ''.$jour.'/'.$mois.'';
	}
	else
	{
		echo ''.$jour.'/'.$mois.'/'.$annee.'';
	}
}

function lit_rss($fichier,$objets) {

	// on lit tout le fichier
	if($chaine = @implode("",@file($fichier))) {

		// on découpe la chaine obtenue en items
		$tmp = preg_split("/<\/?"."item".">/",$chaine);

		// pour chaque item
		for($i=1;$i<sizeof($tmp)-1;$i+=2)

			// on lit chaque objet de l'item
			foreach($objets as $objet) {

				// on découpe la chaine pour obtenir le contenu de l'objet
				$tmp2 = preg_split("/<\/?".$objet.">/",$tmp[$i]);

				// on ajoute le contenu de l'objet au tableau resultat
				$resultat[$i-1][] = @$tmp2[1];
			}

		// on retourne le tableau resultat
		return $resultat;
	}
}

function age($naiss)  
{
	list($jour, $mois, $annee) = split('[/]', $naiss);
	$today['mois'] = date('n');
	$today['jour'] = date('j');
	$today['annee'] = date('Y');
	$annees = $today['annee'] - $annee;

	if ($today['mois'] <= $mois) 
	{
		if ($mois == $today['mois']) 
		{
			if ($jour > $today['jour'])
			{
				$annees--;
			}	
		}
		else
		{
			$annees--;
		}
	}

	return $annees;
}

function obtenirDateRelative ($date) 
{
	if(is_numeric($date))
	    $date = date("Y-m-d H:i:s", $date);
	    
	// Les paramètres locaux sont basés sur la France 
	setlocale(LC_TIME,"fr_FR.UTF-8"); 
	// On prend divers points de repère dans le temps 
	$time            = strtotime($date); 
	$after           = strtotime("+7 day 00:00"); 
	$afterTomorrow   = strtotime("+2 day 00:00"); 
	$tomorrow        = strtotime("+1 day 00:00"); 
	$today           = strtotime("today 00:00"); 
	$yesterday       = strtotime("-1 day 00:00"); 
	$beforeYesterday = strtotime("-2 day 00:00"); 
	$before          = strtotime("-7 day 00:00"); 
	// On compare les repères à la date actuelle 
	// si elle est proche alors on retourne une date relative... 
	if ($time < $after && $time > $before) { 
	    if ($time >= $after) { 
		$relative = strftime("%A", $date)." prochain"; 
	    } else if ($time >= $afterTomorrow) { 
		$relative = "après-demain"; 
	    } else if ($time >= $tomorrow) { 
		$relative = "demain"; 
	    } else if ($time >= $today) { 
		$relative = "aujourd'hui"; 
	    } else if ($time >= $yesterday) { 
		$relative = "hier"; 
	    } else if ($time >= $beforeYesterday) { 
		$relative = "avant-hier"; 
	    } else if ($time >= $before) { 
		$relative = strftime("%A", $time)." dernier";     
	    } 
	// sinon on retourne une date complète. 
	} else { 
	    $relative = 'le '.strftime("%A %d %B %Y", $time); 
	} 
	// si l'heure est présente dans la date originale, on l'ajoute 
	if (preg_match('/[0-9]{2}:[0-9]{2}/', $date)) {
	$relative .= ' &agrave; '.date('H\hi', $time);
	}
	return $relative; 
}

function captchaMath ()
{
	$n1 = mt_rand(1,84);

	if (in_array($n1, array('1', '2', '3', '6', '7', '14', '21', '42')))
	{
		$n2 = 42 / $n1;
		$phrase = ''.$n1.' x '.$n2.'';
	}
	else
	{
		if ($n1 <= 42)
		{
			$n2 = 42 - $n1;
			$phrase = ''.$n1.' + '.$n2.'';
		}
		else
		{
			$n2 = $n1 - 42;
			$phrase = ''.$n1.' - '.$n2.'';
		}
	}
	
	
	return array('42', $phrase);	
}

function captcha ()
{
	list($resultat, $phrase) = captchaMath();
	$_SESSION['captcha'] = $resultat;
	return $phrase;
}
?>	