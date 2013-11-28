<?php
// French by default
if (!isset($_SESSION['lang']) OR empty($_SESSION['lang']))
	$_SESSION['lang'] = 'french';

require WEBSITE_PATH."/lang/".$_SESSION['lang']."/index.php";

function display_page_title()
{
	$name_page = ucfirst(substr($_SERVER['PHP_SELF'], 1, strlen($name_page) - 4));
	$projet = ucfirst($_GET['projet']);

	if ($name_page != 'Index' AND empty($projet)) 
		echo '<title>'.$name_page.' | Antoine Augusti</title>';
	elseif (!empty($projet)) 
		echo '<title>'.$name_page.' : '.$projet.' | Antoine Augusti</title>';
	else 
		echo "<title>Antoine Augusti</title>";
}

function display_icon_social_network($alt, $link)
{
	if (strtolower($alt) != 'cv')
		echo '<a href="'.$link.'" target="_blank" title="'.ucfirst($alt).'"><span class="icon '.strtolower($alt).'"></span></a>';
	else
		echo '<a href="'.$link.'" target="_blank" title="'.strtoupper($alt).'"><span class="icon '.strtolower($alt).'"></span></a>';
}

function display_projets($style = null)
{
	global $lang;

	if ($style == 'cv')
		$class = 'texte margin_xp justify';
	else
		$class = 'gray-post justify';
	echo '
	<div class="'.$class.'">
		<img src="'.DOMAINE.'images/quantic-telecom.png" class="icon-website-it fade" alt="Quantic Télécom" />
		<h2>Quantic Télécom</h2>
		'.$lang['qt_description'].'
		<img src="'.DOMAINE.'images/icones/arrow-blue.png" class="icon-link-website" alt="Arrow" /><a href="//www.quantic-telecom.net" target="_blank" title="Quantic Télécom">www.quantic-telecom.net</a>
	</div>

	<div class="'.$class.'">
		<img src="'.DOMAINE.'images/teen-quotes.png" class="icon-website-tq fade" alt="'.$lang['teen_quotes_title'].'" />
		<h2>'.$lang['teen_quotes_title'].'</h2>
		'.$lang['teen_quotes_description'].'<br>
		<br />
		<ul class="inside-square">
			<li>'.$lang['tq_stats'].'</li>
			<li>'.$lang['tq_signup'].'</li>
			<li>'.$lang['tq_add_quotes'].'</li>
			<li>'.$lang['tq_french_english'].'</li>
			<li>'.$lang['tq_mobile'].'</li>
			<li>'.$lang['tq_ios_app'].'<a href="//teen-quotes.com/apps" title="Application Teen Quotes">teen-quotes.com/apps</a>.</li>
			<li>'.$lang['tq_comments'].'</li>
			<li>'.$lang['tq_newsletter'].'</li>
			<li>'.$lang['tq_profiles'].'</li>
			<li>'.$lang['tq_favorites_quotes'].'</li>
			<li>'.$lang['tq_social_networks'].'</li>
		</ul>
		<br />
		<img src="'.DOMAINE.'images/icones/arrow-blue.png" class="icon-link-website" alt="Arrow" /><a href="//teen-quotes.com" target="_blank" title="Teen Quotes">teen-quotes.com</a><br>
		<img src="'.DOMAINE.'images/icones/arrow-blue.png" class="icon-link-website" alt="Arrow" /><a href="//kotado.fr" target="_blank" title="Kotado">kotado.fr</a>
	</div>

	<!--
	<div class="'.$class.'">
		<img src="'.DOMAINE.'images/pretty-web.png" class="icon-website-pretty-web fade" alt="Pretty Web" />
		<h2>Pretty Web</h2>
		'.$lang['pretty_web_description'].'<br>
		<br />
		<img src="'.DOMAINE.'images/icones/arrow-blue.png" class="icon-link-website" alt="Arrow" /><a href="//www.pretty-web.com" target="_blank" title="Pretty Web">www.pretty-web.com</a>
	</div>-->
	
	<div class="'.$class.'">
		<img src="'.DOMAINE.'images/technostress.png" class="icon-website-technostress fade" alt="'.$lang['technostress_title'].'" />
		<h2>'.$lang['technostress_title'].'</h2>
		'.$lang['technostress_description'].'
		<img src="'.DOMAINE.'images/icones/arrow-blue.png" class="icon-link-website" alt="Arrow" /><a href="//www.technostress.fr" target="_blank" title="'.$lang['technostress_title'].'">www.technostress.fr</a>
	</div>';
}

function display_contact_by_email($style = null)
{
	global $lang;

	if ($style == 'cv')
		$class = 'texte';
	else
		$class = 'gray-post';
	echo '
	<div class="'.$class.'">
		<form action="'.DOMAINE.'?action=send" id="contactForm" method="post">
			<div id="notification"></div>
			'.$lang['contact_subject'].'<br>
			<input type="text" name="sujet" id="inputSujet" size="20" maxlength="30" required><br> 
			<br /> 
			'.$lang['contact_name'].'<br>
			<input type="text" name="nom" id="inputNom" size="20" maxlength="30" required><br> 
			<br /> 
			'.$lang['contact_email'].'<br>
			<input type="email" name="email" id="inputEmail" size="20" maxlength="30" required><br> 
			<br />';
			echo captcha(); echo ' =<br>
			<input type="text" name="captcha" id="inputCaptcha" size="20" maxlength="30"><br> 
			<br />
			<textarea name="message" id="textareaMessage" placeholder="'.$lang['contact_placeholder'].'"></textarea><br>
			<br /> 
			'.$lang['contact_copy'].' <input type="checkbox" id="checkboxCopie" value="1" name="copie" checked/>
			<br />
			<div class="right">
				<input type="submit" name="submit" class="submit" value="'.$lang['contact_send'].'">
			</div>
			<div class="clear"></div>
		</form>
	</div>';
}

function display_header()
{
	global $lang;

	echo '
	<div id="header">
		<div id="header-content">
			<div id="logo">
				<a href="'.DOMAINE.'" title="'.$lang['header_back_to_home'].'"><img alt="Logo" src="'.DOMAINE.'images/logo.png" /></a>
			</div>';

	echo '
			<div id="social-networks">';
				display_icon_social_network('Blog', '//blog.antoine-augusti.fr');
				display_icon_social_network('Cv', '//cv.antoine-augusti.fr');
				// display_icon_social_network('LinkedIn', '//fr.linkedin.com/in/antoineaugusti');
				// display_icon_social_network('Facebook', '//www.facebook.com/AntoineAugusti');
				// display_icon_social_network('GooglePlus', 'https://plus.google.com/104395355791731974347?rel=author');
				display_icon_social_network('Twitter', '//www.twitter.com/AntoineAugusti');
				display_icon_social_network('Github', 'https://www.github.com/AntoineAugusti');
				// display_icon_social_network('Instagram', '//instagram.com/antoineaugusti');
				display_icon_social_network('Feed','//www.antoine-augusti.fr/blog/feed/');
	echo '	</div>';

	if (!preg_match('#cv|blog#', "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]))
	{
		if (isset($_SESSION['lang']))
		{
			echo '<div id="flags_translate">';

			// Just display the other language
			if ($_SESSION['lang'] == 'french')
				echo '<span class="hint--bottom" data-hint="'.$lang['hint_flag'].'"><span class="english fade_on_hover" onClick="_gaq.push([\'_trackEvent\', \'translate\', \'clic\', \'English\']);"></span></span>';
			elseif ($_SESSION['lang'] == 'english')
				echo '<span class="hint--bottom" data-hint="'.$lang['hint_flag'].'"><span class="french fade_on_hover" onClick="_gaq.push([\'_trackEvent\', \'translate\', \'clic\', \'French\']);"></span></span>';

			echo '</div>';
		}
	}

	echo '
		</div>
	</div><!-- END HEADER -->';
}

function display_icon_contact($alt, $link, $txt)
{
	echo '<span class="icon-contact '.strtolower($alt).'"></span><a href="'.$link.'" target="_blank" title="'.$alt.'">'.$txt.'</a><br>';
}

function display_full_contact()
{
	display_icon_contact('Gmail', 'mailto:antoine@augusti.fr', 'antoine@augusti.fr');
	display_icon_contact('Blog', '//blog.antoine-augusti.fr', 'blog.antoine-augusti.fr');
	// display_icon_contact('Facebook', '//www.facebook.com/AntoineAugusti', 'www.facebook.com/AntoineAugusti');
	display_icon_contact('Twitter', '//www.twitter.com/AntoineAugusti', '@AntoineAugusti');
	// display_icon_contact('Instagram', '//instagram.com/antoineaugusti', '@antoineaugusti');
	display_icon_contact('GitHub', 'https://github.com/AntoineAugusti', 'github.com/AntoineAugusti');
	// display_icon_contact('YouTube', '//www.youtube.com/AugustiAntoine', 'www.youtube.com/AugustiAntoine');
	// display_icon_contact('Skype', '#', 'AntoineAugusti');
	// display_icon_contact('Portable', '#', '+33 6 87 09 98 92');
}

function convertirDate($date)
{
	list($annee, $mois, $jour) = split('-', substr($date, 0, 10));
	if ($annee == date("Y"))
		echo ''.$jour.'/'.$mois.'';
	else
		echo ''.$jour.'/'.$mois.'/'.$annee.'';
}

function lit_rss($fichier,$objets) 
{
	// On lit tout le fichier
	if ($chaine = @implode("",@file($fichier)))
	{
		// On découpe la chaine obtenue en items
		$tmp = preg_split("/<\/?"."item".">/",$chaine);

		// Pour chaque item
		for($i = 1;$i < sizeof($tmp)-1; $i += 2)

			// On lit chaque objet de l'item
			foreach($objets as $objet) 
			{
				// On découpe la chaine pour obtenir le contenu de l'objet
				$tmp2 = preg_split("/<\/?".$objet.">/",$tmp[$i]);

				// On ajoute le contenu de l'objet au tableau resultat
				$resultat[$i-1][] = @$tmp2[1];
			}

		// On retourne le tableau resultat
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
				$annees--;	
		}
		else
			$annees--;
	}

	return $annees;
}

function obtenirDateRelative($date) 
{
	if (is_numeric($date))
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
	// Si elle est proche alors on retourne une date relative
	if ($time < $after AND $time > $before)
	{ 
	    if ($time >= $after)
	    { 
			$relative = strftime("%A", $date)." prochain"; 
	    }
	    else if ($time >= $afterTomorrow)
	    { 
			$relative = "après-demain"; 
	    }
	    else if ($time >= $tomorrow)
	    { 
			$relative = "demain"; 
	    }
	    else if ($time >= $today)
	    { 
			$relative = "aujourd'hui"; 
	    }
	    else if ($time >= $yesterday)
	    { 
			$relative = "hier"; 
	    }
	    else if ($time >= $beforeYesterday)
	    { 
			$relative = "avant-hier"; 
	    }
	    else if ($time >= $before)
	    { 
			$relative = strftime("%A", $time)." dernier";     
	    } 
	// Sinon on retourne une date complète. 
	}
	else
	    $relative = 'le '.strftime("%A %d %B %Y", $time);  

	// Si l'heure est présente dans la date originale, on l'ajoute 
	if (preg_match('/[0-9]{2}:[0-9]{2}/', $date))
		$relative .= ' &agrave; '.date('H\hi', $time);

	return $relative; 
}

function captchaMath ()
{
	$n1 = mt_rand(1,84);

	if (in_array($n1, array(1, 2, 3, 6, 7, 14, 21, 42)))
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