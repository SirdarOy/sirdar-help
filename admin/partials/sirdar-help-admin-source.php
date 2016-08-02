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
    <img src="<?php echo plugin_dir_url( __FILE__ ) . '../../public/img/sirdar.png'; ?>" alt="sirdar logo" style="margin-top: 15px;">
	<h1><?php _e("Ohjeiden asetukset", "sirdar-help"); ?></h1>
	<br>
	<form method="post" action="options.php" id="xmlform">
	<?php settings_fields( 'sirdar-help-settings' ); ?>
	<?php do_settings_sections( 'sirdar-help-settings' ); ?>
	<p>
		<h2><?php _e("Aseta upotettava URL", "sirdar-help"); ?>:</h2>
		<input type="text" name="sirdar-help-url" id="sirdar-help-url" class="text-input" value="<?php echo esc_attr( get_option('sirdar-help-url') ); ?>" placeholder="<?php _e('URL', 'sirdar-help'); ?>">
	</p>
	<?php submit_button(); ?>
	</form>
</div>