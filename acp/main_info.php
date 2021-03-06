<?php
/**
*
* @package phpBB Extension - martin emptypostsubjects
* @copyright (c) 2015 Martin ( https://github.com/Martin-G- )
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace martin\emptypostsubjects\acp;

class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\martin\emptypostsubjects\acp\main_module',
			'title'		=> 'ACP_EMPTYPOSTSUBJECTS_TITLE',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'ACP_EMPTYPOSTSUBJECTS_SETTINGS',
					'auth'	=> 'ext_martin/emptypostsubjects && acl_a_board',
					'cat'	=> array('ACP_EMPTYPOSTSUBJECTS_TITLE'),
				),
			),
		);
	}
}
