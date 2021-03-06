<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://sirdar.fi
 * @since      1.0.0
 *
 * @package    Sirdar_Help
 * @subpackage Sirdar_Help/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Sirdar_Help
 * @subpackage Sirdar_Help/admin
 * @author     Jukka Rautanen <support@sirdar.fi>
 */
class Sirdar_Help_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	 /**
	   * Register Help menu
	   *
	   * @since     1.0.0
	   */
	public function sirdar_help_register_menu_page() {
		add_menu_page(
			__("Help", "sirdar-help"),
			__("Help", "sirdar-help"),
			'manage_options',
			'sirdar-help-admin-display',
			array( $this, 'display_help' ),
			'dashicons-sos',
			0
		);
		add_submenu_page( 'sirdar-help-admin-display', __("Source", "sirdar-help"), __("Source", "sirdar-help"), 'manage_options', 'sirdar-help-admin-source', array( $this, 'help_source' ) );
	}

	public function display_help() {
		require_once plugin_dir_path( dirname( __FILE__ ) ) .'admin/partials/sirdar-help-admin-display.php';
	}

	public function help_source() {
		require_once plugin_dir_path( dirname( __FILE__ ) ) .'admin/partials/sirdar-help-admin-source.php';
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Sirdar_Help_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Sirdar_Help_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/sirdar-help-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Sirdar_Help_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Sirdar_Help_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/sirdar-help-admin.js', array( 'jquery' ), $this->version, false );

	}

}
