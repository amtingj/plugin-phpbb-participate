<?php
/**
 *
 * Participate. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2025, dmzx, https://www.dmzx-web.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, [
	'DMZX_ACP_PARTICIPATE_SETTING_SAVED'			=> 'Einstellungen erfolgreich gespeichert!',
	'DMZX_ACP_PARTICIPATE_ENABLE'					=> 'Participate aktivieren',
	'DMZX_ACP_PARTICIPATE_ENABLE_EXPLAIN'			=> 'Die Erweiterung wird in viewtopic angezeigt.',
	'DMZX_ACP_PARTICIPATE_FORUM_INCLUDED'			=> 'Aktive Foren',
	'DMZX_ACP_PARTICIPATE_FORUM_INCLUDED_EXPLAIN'	=> 'Foren auswählen in denen die Mitglieder Participate nutzen können.',
	'DMZX_ACP_PARTICIPATE_TITLE'					=> 'Participate',
	'DMZX_ACP_PARTICIPATE_VERSION'					=> 'Version',
	'DMZX_ACP_RESET_TABLE'							=> 'Participate Tabelle zurücksetzen',
	'DMZX_ACP_RESET_TABLE_EXPLAIN'					=> 'Alle Daten in der Tabelle von Participate werden gelöscht.',
	'DMZX_ACP_ARE_YOU_SURE'							=> 'Sind Sie sicher, dass sie die Participate Tabelle zurücksetzen möchten? Dies kann nicht rückgänig gemacht werden.',
	'DMZX_ACP_PARTICIPATE_TABLE_RESET_SUCCESS' 		=> 'Die Participate Tabelle wurde erfolgreich zurückgesetzt.',
]);
