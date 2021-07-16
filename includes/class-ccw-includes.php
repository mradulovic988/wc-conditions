<?php
/**
 * Main class for all communication between front-end and with the back-end
 *
 * @class Ccw_Includes
 * @package Ccw_Includes
 * @version 1.0.0
 * @author Marko Radulovic
 */

if ( ! class_exists( 'Ccw_Includes' ) ) {
	class Ccw_Includes {

		public function __construct() {
			include CCW_PLUGIN_PATH . '/includes/generator/class-ccw-theme-generator.php';
		}
	}

	new Ccw_Includes();
}