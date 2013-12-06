<?php
define ('SITE_ROOT', dirname(dirname(__FILE__)));
define ('NASZ_MAIL', "biuro@clevercode.pl");



///choose language
require_once 'language.php';


$i18n_accepted = array('pl', 'en') ;
$i18n_language = Language::getBestMatch($i18n_accepted);
//var_dump($_COOKIE['lang']);

if (isset($_GET['lang']) && in_array(strtolower($_GET['lang']), $i18n_accepted) ) {
	$i18n_language = strtolower($_GET['lang']);
	setcookie('lang', $i18n_language, time()+3600);
}
 else if ( in_array(strtolower($_COOKIE['lang']), $i18n_accepted) ) {
	$i18n_language = strtolower($_COOKIE['lang']) ;
}

// -- If cookie is setted
//var_dump($_COOKIE['lang']);
//var_dump($i18n_language); // -> uncomment to see final language

switch ($i18n_language){

	case 'pl':  include SITE_ROOT.'/include/pl_dictionary.php'; break;
	case 'en': include SITE_ROOT.'/include/en_dictionary.php'; break;

}

$site = isset($_GET['site'])?$_GET['site']:"home";
$first_open = isset($_GET['site'])?false:true;
require_once SITE_ROOT.'/include/mail.php';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
