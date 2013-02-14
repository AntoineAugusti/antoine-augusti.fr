<?php
session_start();
require "../kernel/config.php";
require WEBSITE_PATH."/kernel/fonctions.php";



if (isset($_POST['sujet']))      $sujet = $_POST['sujet'];
else      $sujet = NULL;

if (isset ($_POST ['copie'])) $copie = TRUE; 
else $copie = FALSE; 

if (isset($_POST['message']))      $message = $_POST['message'];
else      $message = NULL;

if (isset($_POST['email']) AND preg_match("#[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))     $email = $_POST['email'];
else      $email = NULL;


if (isset($_POST['nom']))      $nom = $_POST['nom'];
else      $nom = NULL;

if (empty($sujet) OR empty($message) OR empty($email) OR empty($nom))
{ 
	echo '1';
}
else      
{
	if ($_POST['captcha'] == $_SESSION['captcha'])
	{
	  
		$headers ='From: "'.$nom.'"<no-reply@antoine-augusti.fr>'."\n";
		$headers .='Reply-To: '.$email.''."\n";
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .='Content-Type: text/plain; charset="iso-8859-1"'."\n";
		$headers .='Content-Transfer-Encoding: 8bit';
		$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
		 
		 
		$message .= "\r\n";
		$message .= "\r\n";
		$message .= "------------------ ".$lang['index_mail_sent_from']." www.antoine-augusti.fr ------------------";
		
		if (mail("antoine.augusti@gmail.com", stripslashes($sujet), stripslashes($message), $headers))
		{ 
			echo '3';
		}
		else
		{
			echo '4';
		}

		$message .= "\r\n";
		$message .= "\r\n";
		$message .= "------------------ ".$lang['index_copy_mail']." ------------------";

		if ($copie == TRUE) 
		{
			mail($email, stripslashes($sujet), stripslashes($message), $headers);
		}
	}
	else 
	{
		echo '2';
	}
}