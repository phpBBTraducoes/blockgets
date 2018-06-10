<?php
/** 
* chat_addon.php [Brazilian Portuguese [pt_br]]
* Brazilian Portuguese  translation by eunaumtenhoid (c) 2018 [ver 2.0.1] (https://github.com/phpBBTraducoes)
* @package language cBB Blockgets
* @version v2.0.1 10/06/2018
*
* @copyright (c) 2018 CaniDev
* @license https://opensource.org/licenses/gpl-license.php GNU Public License
*/

// @ignore
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang['blocks']))
{
	$lang['blocks'] = array();
}

$lang['blocks'] = array_merge($lang['blocks'], array(
	'chat_title'	=> 'Chat',
	'chat_explain'	=> 'Permite que você use cBB Chat como um bloco nas colunas',
));

$lang = array_merge($lang, array(
	'CHAT_ADDON_MODE'		=> 'Modo de exibição',
	'CHAT_MODE_CHAT'		=> 'Sala de chat',
	'CHAT_MODE_USERS'		=> 'Usuários online',
));
