<?php

/**
 * Title: ABN AMRO iDEAL Zelfbouw config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_AbnAmro_IDealZelfbouw_TestConfig extends Pronamic_WP_Pay_Gateways_IDealAdvanced_Config {
	public function get_payment_server_url() {
		return 'https://abnamro-test.ideal-payment.de/ideal/iDeal';
	}

	public function get_directory_request_url() {
		return 'https://itt.idealdesk.com/ITTEmulatorAcquirer/Directory.aspx';
	}

	public function get_transaction_request_url() {
		return 'https://itt.idealdesk.com/ITTEmulatorAcquirer/Transaction.aspx';
	}

	public function get_status_request_url() {
		return 'https://itt.idealdesk.com/ITTEmulatorAcquirer/Status.aspx';
	}

	public function get_certificates() {
		return array(
			dirname( __FILE__ ) . '/../certificates/abnamro.test.cer',
		);
	}
}
