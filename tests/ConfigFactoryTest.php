<?php

/**
 * Title: Rabobank - iDEAL Professional config factory test
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_AbnAmro_IDealZelfbouw_ConfigFactoryTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$factory = new Pronamic_WP_Pay_Gateways_AbnAmro_IDealZelfbouw_ConfigFactory();

		$config = $factory->get_config( 0 );

		$this->assertInstanceOf( 'Pronamic_WP_Pay_Gateways_AbnAmro_IDealZelfbouw_Config', $config );
	}
}
