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

class add_delete_on_cancel_setting extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return ['\dmzx\participate\migrations\install_participate'];
	}

	public function update_data()
	{
		return [
			// 0 = keep the entry (struck through), the behaviour of earlier versions
			['config.add', ['participate_delete_on_cancel', 0]],
		];
	}
}
