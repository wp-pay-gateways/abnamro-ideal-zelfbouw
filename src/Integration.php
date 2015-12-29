<?php

/**
 * Title: ABN AMRO - iDEAL Zelfbouw - Integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_AbnAmro_IDealZelfbouw_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvanced_AbstractIntegration {
	public function __construct() {
		$this->id         = 'abnamro-ideal-zelfbouw';
		$this->name       = 'ABN AMRO - iDEAL Zelfbouw';
		$this->provider   = 'abnamro';
		$this->deprecated = true;
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_AbnAmro_IDealZelfbouw_ConfigFactory';
	}
}
