<?php

class Pronamic_WP_Pay_Gateways_AbnAmro_IDealZelfbouw_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvanced_AbstractIntegration {
	public function __construct() {
		$this->id         = 'abnamro-ideal-zelfbouw';
		$this->name       = 'ABN AMRO - iDEAL Zelfbouw';
		$this->provider   = 'abnamro';
		$this->deprecated = true;
	}
}
