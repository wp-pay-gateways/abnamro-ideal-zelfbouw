<?php

class Pronamic_WP_Pay_Gateways_AbnAmro_IDealZelfbouw_GatewayIntegration {
	public function __construct() {
		$this->id = 'abnamro-ideal-easy';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvanced_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvanced_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvanced_Gateway';
	}
}
