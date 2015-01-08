<?php
/*	Project:	EQdkp-Plus
 *	Package:	Final Fantasy XI game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}

if(!class_exists('ffxi')) {
	class ffxi extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '2.2.0';
		protected $this_game		= 'ffxi';
		protected $types			= array('classes', 'races', 'factions', 'filters');
		protected $classes			= array();
		protected $races			= array();
		protected $filters			= array();
		public $langs				= array('english');

		protected $class_dependencies = array(
			array(
				'name'		=> 'faction',
				'type'		=> 'factions',
				'admin' 	=> true,
				'decorate'	=> false,
				'parent'	=> false,
			),
			array(
				'name'		=> 'race',
				'type'		=> 'races',
				'admin'		=> false,
				'decorate'	=> true,
				'parent'	=> array(
					'faction' => array(
						'bastok'	=> 'all',
						'sandoria'	=> 'all',
						'windurst'	=> 'all',
					),
				),
			),
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> array(
					'race' => array(
						0 	=> 'all',		// Unknown
						1 	=> 'all',		// Elvaan
						2 	=> 'all',		// Galka
						3 	=> 'all',		// Hume
						4 	=> 'all',		// Mithra
						5 	=> 'all',		// Tarutaru
					),
				),
			),
		);
		
		protected $class_colors = array(
			0	=> '#808080',
			1	=> '#800000',
			2	=> '#804040',
			3	=> '#68578E',
			4	=> '#0472EF',
			5	=> '#BF4040',
			6	=> '#FF80FF',
			7	=> '#5b5955',
			8	=> '#671AFF',
			9	=> '#B37802',
			10	=> '#FFFF00',
			11	=> '#ADE1E5',
			12	=> '#EBD35F',
			13	=> '#408000',
			14	=> '#FF0000',
			15	=> '#6700A2',
			16	=> '#775504',
			17	=> '#0F7D7D',
			18	=> '#00BF00',
			19	=> '#2C77B9',
			20	=> '#E2D6EC',
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= '';
		public $lang			= false;

		public function profilefields(){
			$xml_fields = array(
				'gender'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'character',
					'lang'			=> 'uc_gender',
					'options'		=> array('Male' => 'uc_male', 'Female' => 'uc_female'),
					'undeletable'	=> true,
					'tolang'		=> true
				),
				'guild'	=> array(
					'type'			=> 'text',
					'category'		=> 'character',
					'lang'			=> 'uc_guild',
					'size'			=> 32,
					'undeletable'	=> true,
				),
			);
			return $xml_fields;
		}

		protected function load_filters($langs){
			if(!$this->classes) {
				$this->load_type('classes', $langs);
			}
			foreach($langs as $lang) {
				$names = $this->classes[$this->lang];
				$this->filters[$lang][] = array('name' => '-----------', 'value' => false);
				foreach($names as $id => $name) {
					$this->filters[$lang][] = array('name' => $name, 'value' => 'class:'.$id);
				}
				$this->filters[$lang] = array_merge($this->filters[$lang], array(
					array('name' => '-----------', 'value' => false),
					array('name' => $this->glang('tank', true, $lang), 'value' => 'class:10,11'),
					array('name' => $this->glang('support', true, $lang), 'value' => 'class:1,3,5,6,14,16,17,20'),
					array('name' => $this->glang('damage_dealer', true, $lang), 'value' => 'class:2,4,7,8,9,12,13,18,19'),
				));
			}
		}

		public function install($install=false){}
	}
}
?>