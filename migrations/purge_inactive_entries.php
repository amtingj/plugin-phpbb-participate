<?php
/**
 *
 * Participate. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2025, dmzx, https://www.dmzx-web.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace dmzx\participate\migrations;

class purge_inactive_entries extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return ['\dmzx\participate\migrations\install_participate'];
	}

	public function update_data()
	{
		return [
			['custom', [[$this, 'purge_inactive']]],
		];
	}

	public function purge_inactive()
	{
		$this->db->sql_query('DELETE FROM ' . $this->table_prefix . 'participate WHERE active = 0');
	}
}
