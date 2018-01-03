<?php
/** 
* installer.php [Brazilian Portuguese [pt_br]]
* Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 2.0.0] (https://github.com/phpBBTraducoes)
* @package language cBB Blockgets
* @version v2.0.0 30/05/2017
*
* @copyright (c) 2017 CaniDev
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*/

// @ignore
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Local Variables
$lang = array_merge($lang, array(
	'PORTAL'			=> 'Portal',
	'DOCK_MENU'			=> 'Dock menu',
	'MAIN_MENU'			=> 'Menu Principal',
	'RECOMMENDED'		=> 'Recomendado',

	'P_ADMIN'			=> 'Administração',
	'P_MAIN'			=> 'Principal',
	'P_MCP'				=> 'Painel de moderação',
	'P_ACP'				=> 'Painel de administração',

	'PHPBB_TITLE'		=> 'site oficial do phpBB',
	'XAMPP_TITLE'		=> 'Xampp',
	'SOURCEFORGE_TITLE'	=> 'Aplicativos de código aberto',

	'WELCOME_GUEST'		=> '[html]<div style="text-align:center; font-size:1.2em;"><a href="https://www.canidev.com"><span class="blg-image logo-img"></span></a><br /><strong><i>Fórum equipado com cBB Blockgets</i><br /><br />Bem-vindo ao nosso fórum!<br />Registre-se para acessar todo o conteúdo!.</strong></div>[/html]',
	'WELCOME_MEMBER'	=> '[html]<div style="text-align:center; font-size:1.2em;"><a href="https://www.canidev.com"><span class="blg-image logo-img"></span></a><br /><strong><i>Fórum equipado com cBB Blockgets</i><br /><br />Bem-vindo de volta ao nosso fórum {S_USERNAME}</strong></div>[/html]',	
));
