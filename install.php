<?php
/**
 * Customize SMF
 *
 * @package Customize SMF
 * @author emanuele
 * @copyright 2013 emanuele, Simple Machines
 * @license http://www.simplemachines.org/about/smf/license.php BSD
 *
 * @version 0.0.1
 */

if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');
elseif (!defined('SMF'))
	exit('<b>Error:</b> Cannot install - please verify you put this in the same place as SMF\'s index.php.');

add_integration_function('integrate_profile_areas', 'custsmf_add_menu');
add_integration_function('integrate_pre_include', '$sourcedir/Subs-Customize.php');