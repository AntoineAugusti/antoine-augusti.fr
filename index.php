<?php 
include "head.php";
$action = htmlspecialchars($_GET['action']);
if (empty($action))
	{
?>
				<div id="contact" class="corps-left">
					<h1><span class="icon-corps contact"></span>Contactez-moi</h1>
					<div class="gray-post">
						<?php
						display_full_contact();
						?>
		            </div>
	        	</div>

	        	<div class="corps-right">
	        		<h1><span class="icon-corps blog"></span>Derniers articles</h1>
					<div class="gray-post">
					<ul class="inside-square">
					<?php
					$reponse = mysql_query("SELECT guid, post_title, post_date FROM wp_posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY id DESC LIMIT 0,5");
					while ($donnees = mysql_fetch_array($reponse) )
						{
					?>
						<li class="margin-bottom-30"><?php convertirDate($donnees['post_date']); ?> -<a href="<?php echo $donnees['guid']; ?>" target="_blank"> <?php echo htmlentities($donnees['post_title']); ?></a></li>	
					<?php } ?>
					</ul>
					</div>
	        	</div>

	        	<div class="clear"></div>

	        	<h1><span class="icon-corps work"></span>Quelques projets</h1>
					<?php
						display_projets();
					?>
			       
				<h1><span class="icon-corps gmail"></span>Contactez-moi par email</h1>
					<?php
						display_contact_by_email();
					?>
<?php
	}
elseif ($action == 'send')
				{
	echo '<h1><span class="icon-corps gmail"></span>Contactez-moi par email</h1>';
	echo '<div class="gray-post">';
	
	if(isset($_POST['sujet']))      $sujet = $_POST['sujet'];
	else      $sujet = "";

	if (isset ($_POST ['copie'])) $copie = TRUE; 
	else $copie = FALSE; 

	if(isset($_POST['message']))      $message = $_POST['message'];
	else      $message = "";

	if(isset($_POST['email']) && preg_match("#[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))     $email = $_POST['email'];
	else      $email = "";


	if(isset($_POST['nom']))      $nom = $_POST['nom'];
	else      $nom = "";
	
	if(empty($sujet) OR empty($message) OR empty($email) OR empty($nom))
		{ 
		echo '<div class="erreur">Attention, un champ est vide</div><br /><br />
		<a href="javascript:history.back()">&raquo; Retour</a>';
		}
	else      
		{
		if($_POST['captcha'] == $_SESSION['captcha'])
			{
		  
			$headers ='From: "'.$nom.'"<no-reply@antoine-augusti.fr>'."\n";
			$headers .='Reply-To: '.$email.''."\n";
			$headers .= 'MIME-Version: 1.0' . "\r\n";
			$headers .='Content-Type: text/plain; charset="iso-8859-1"'."\n";
			$headers .='Content-Transfer-Encoding: 8bit';
			$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
			 
			 
			$message .= "\r\n";
			$message .= "\r\n";
			$message .= "------------------ Message envoyé depuis www.antoine-augusti.fr ------------------";
			
			if(mail("antoine.augusti@gmail.com", stripslashes($sujet), stripslashes($message), $headers))
				{ 
				echo '<span class="icon-corps success"></span>Le message a bien été envoyé !<br><br /><br />Vous recevrez une réponse sur votre adresse email donnée (<a href="mailto:'.$email.'">'.$email.'</a>).';
				}
			else
				{
				echo '<div class="erreur">Le message n\'a pu être envoyé</div><br /><br />
				<a href="javascript:history.back()">Retour</a>';
				}

			$message .= "\r\n";
			$message .= "\r\n";
			$message .= "------------------ Ceci est la copie de votre message ------------------";

			if ($copie == TRUE && mail($email, stripslashes($sujet), stripslashes($message), "$headers"))
				{
				echo "<br /><br />Une copie de votre message &agrave; été envoyée sur votre adresse email.";
				}
			}
		else 
			{
			echo '<div class="erreur">Le code de sécurité entré est mauvais</div><br /><br /><a href="javascript:history.back()">&raquo; Retour</a>';
			}
		}
	echo '</div>';
	}
include 'footer.php'; 
?>
