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

function template_custsmf_modify ()
{
	global $context, $settings, $options, $scripturl, $modSettings, $txt;

	echo '
	<form action="', $scripturl, '?action=profile;area=customize;update" method="post" accept-charset="', $context['character_set'], '" name="customize" id="customize">
		<div class="cat_bar">
			<h3 class="catbg">
				<span class="ie6_header floatleft"><img src="', $settings['images_url'], '/icons/online.gif" alt="" class="icon" />', $txt['custsmf'], '</span>
			</h3>
		</div>
		<p class="description">', $txt['custsmf_info'], '</p>
		<div class="windowbg2">
			<span class="topslice"><span></span></span>
			<div class="content">
				<dl class="settings">
					<dt>
						<strong>', $txt['custsmf_insert_css'], ':</strong>
					</dt>
					<dd>
						<textarea class="editor" cols="50" rows="15" name="custcss" >', $context['custcss'], '</textarea>
					</dd>
					<dt>
						<strong>', $txt['custsmf_insert_js'], ':</strong>
					</dt>
					<dd>
						<textarea class="editor" cols="50" rows="15" name="custjs" >', $context['custjs'], '</textarea>
					</dd>
				<br class="clear" />';

	// Show the standard "Save Settings" profile button.
	template_profile_save();

	echo '
			</div>
			<span class="botslice"><span></span></span>
		</div>
	</form>
	<br />';
}

