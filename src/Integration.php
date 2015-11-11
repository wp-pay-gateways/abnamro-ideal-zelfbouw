<?php

class Pronamic_WP_Pay_Gateways_AbnAmro_IDealZelfbouw_Integration {
	public function __construct() {
		$this->id         = 'abnamro-ideal-zelfbouw';
		$this->name       = 'ABN AMRO - iDEAL Zelfbouw';
		$this->provider   = 'abnamro';
		$this->deprecated = true;
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
