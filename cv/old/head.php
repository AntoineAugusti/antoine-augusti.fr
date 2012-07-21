<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
	<?php if (isset($_GET['english']))
{
setcookie("french", 1 , time() -700);
setcookie("english", 1 , time() + (((3600*24)*30)*12));
echo "<meta http-equiv=\"refresh\" content=\"1;url=index.php\" />";
}

if (isset($_GET['french']))
{
setcookie("english", 1 , time() -700);
setcookie("french", 1 , time() + (((3600*24)*30)*12));
echo "<meta http-equiv=\"refresh\" content=\"1;url=index.php\" />";
}
?>
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript" src="http://static.augusti.fr/js/scroll.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="http://www.antoine-augusti.fr/images_site/favicon.png"> 
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
	
	<div id="content">