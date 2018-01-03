<?php
/** 
* info_acp_blockgets.php [Brazilian Portuguese [pt_br]]
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

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

/**
 * @general tags and messages
*/
$lang = array_merge($lang, array(
	'ACP_BLOCKGETS'				=> 'Blockgets',
	'ACP_BLOCKGETS_GENERAL'		=> 'Geral',
	
	'ACP_BLG_CONFIG_MAIN'		=> 'Configuração geral',
	'ACP_BLG_CONFIG_OPTIONAL'	=> 'Configuração adicional',
	'ACP_BLG_IMAGES'			=> 'Imagens',
	'ACP_PAGES_AND_BLOCKS'		=> 'Páginas e Blocos',
	
	// Logs
	'LOG_BLG_CONFIG'		=> '<strong>cBB Blockgets:</strong> Configuração principal alterada',
	'LOG_BLOCK_ADDED'		=> '<strong>cBB Blockgets:</strong> Novo bloco adicionado<br />» %1$s in %2$s',
	'LOG_BLOCK_COPY_PAGE'	=> '<strong>cBB Blockgets:</strong> Blocos copiados<br />» de %1$s a %2$s',
	'LOG_BLOCK_MOVED'		=> '<strong>cBB Blockgets:</strong> Posição de blocos alterados<br />» %1$s',
	'LOG_BLOCK_MOVED_PAGE'	=> '<strong>cBB Blockgets:</strong> Blocos movidos<br />» de %1$s para %2$s',
	'LOG_BLOCK_REMOVED'		=> '<strong>cBB Blockgets:</strong> Bloco(s) deletado<br />» em %1$s',
	'LOG_BLOCK_UPDATED'		=> '<strong>cBB Blockgets:</strong> Bloco editado<br />» %1$s em %2$s',
	'LOG_EVENT_REMOVED'		=> '<strong>cBB Blockgets:</strong> Evento deletado<br />» %1$s',
	'LOG_LIST_REMOVED'		=> '<strong>cBB Blockgets:</strong> Lista deletada<br />» %1$s',
	'LOG_PAGE_ADDED'		=> '<strong>cBB Blockgets:</strong> Nova página adicionada<br />» %1$s',
	'LOG_PAGE_UPDATED'		=> '<strong>cBB Blockgets:</strong> Página alterada<br />» %1$s',
	'LOG_PAGE_REMOVED'		=> '<strong>cBB Blockgets:</strong> Página deletada<br />» %1$s',
	
	// Permissions
	'ACL_A_BLOCKGETS_MANAGE'	=> 'Pode gerenciar cBB Blockgets',
	'ACL_U_BLOCKGETS_CALENDAR'	=> 'Pode ver o calendário',
	'ACL_U_BLOCKGETS_EVENTS'	=> 'Pode gerenciar eventos do calendário',
));
