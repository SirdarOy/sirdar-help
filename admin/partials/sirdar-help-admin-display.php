<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://sirdar.fi
 * @since      1.0.0
 *
 * @package    Sirdar_Help
 * @subpackage Sirdar_Help/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div id="sirdar-help">
	<iframe style="width: 100%; height: 92vh;" src="<?php echo esc_attr( get_option('sirdar-help-url') ); ?>"></iframe>
</div>