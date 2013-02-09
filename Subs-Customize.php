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

if (!defined('SMF'))
	die('Hacking attempt...');

function custsmf_add_menu (&$profile_areas)
{
	global $txt;

	loadLanguage('CustSMF');

	$profile_areas['edit_profile']['areas']['customize'] = array(
		'label' => $txt['custsmf'],
		'file' => 'Subs-Customize.php',
		'function' => 'custsmf_modify',
		'sc' => 'post',
		'permission' => array(
			'own' => array('profile_custsmf_any', 'profile_custsmf_own'),
			'any' => array('profile_custsmf_any'),
		),
	);
}

function custsmf_add_permissions (&$permissionGroups, &$permissionList, &$leftPermissionGroups, &$hiddenPermissions, &$relabelPermissions)
{
	loadLanguage('CustSMF');

	$permissionList['membergroup']['profile_custsmf'] = array(true, 'profile', 'edit_profile', 'moderate_general');
}

function custsmf_modify ()
{

}