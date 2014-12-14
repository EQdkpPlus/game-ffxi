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
$english_array = array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Bard',
		2	=> 'Beastmaster',
		3	=> 'Blackmage',
		4	=> 'Bluemage',
		5	=> 'Corsair',
		6	=> 'Dancer',
		7	=> 'Dark Knight',
		8	=> 'Dragoon',
		9	=> 'Monk',
		10	=> 'Ninja',
		11	=> 'Paladin',
		12	=> 'Puppetmaster',
		13	=> 'Ranger',
		14	=> 'Redmage',
		15	=> 'Samurai',
		16	=> 'Scholar',
		17	=> 'Summoner',
		18	=> 'Thief',
		19	=> 'Warrior',
		20	=> 'Whitemage',
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Elvaan',
		2	=> 'Galka',
		3	=> 'Hume',
		4	=> 'Mithra',
		5	=> 'Tarutaru',
	),
	'factions' => array(
		'bastok'	=> 'Bastok',
		'sandoria'	=> 'SanDoria',
		'windurst'	=> 'Windurst',
	),
	'lang' => array(
		'ffxi'							=> 'Final Fantasy XI',
		'tank'							=> 'Tank',
		'support'						=> 'Support',
		'damage_dealer'					=> 'Damage Dealer',
		
		// Profile information
		'uc_gender'						=> 'Gender',
		'uc_male'						=> 'Male',
		'uc_female'						=> 'Female',
		'uc_guild'						=> 'Guild',
		'uc_race'						=> 'Race',
		'uc_class'						=> 'Class',
		
		// Admin Settings
		'core_sett_fs_gamesettings'	=> 'Final Fantasy XI Settings',
		'uc_faction'				=> 'Faction',
		'uc_faction_help'			=> 'Select the default faction',
	),
);
?>