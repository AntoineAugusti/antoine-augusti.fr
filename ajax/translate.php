<?php
ini_set('session.cookie_domain', substr($_SERVER['SERVER_NAME'], strpos($_SERVER['SERVER_NAME'], "."), 100));
session_start();
include '../kernel/config.php';
header("Access-Control-Allow-Origin: *");

$translate = htmlspecialchars($_POST['translate']);

if (!empty($translate) AND in_array($translate, $available_languages))
{
	$_SESSION['lang'] = $translate;
	echo 1;
}
else
{
	echo 0;
}