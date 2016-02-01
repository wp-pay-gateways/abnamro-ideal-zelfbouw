<?php

/**
 * Title: ABN AMRO iDEAL Zelfbouw config
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_AbnAmro_IDealZelfbouw_Config extends Pronamic_WP_Pay_Gateways_IDealAdvanced_Config {
	public function get_payment_server_url() {
		return 'https://abnamro.ideal-payment.de/ideal/iDeal';
	}

	public function get_directory_request_url() {
		return 'https://idealm.abnamro.nl/nl/issuerInformation/getIssuerInformation.xml';
	}

	public function get_transaction_request_url() {
		return 'https://idealm.abnamro.nl/nl/acquirerTrxRegistration/getAcquirerTrxRegistration.xml';
	}

	public function get_status_request_url() {
		return 'https://idealm.abnamro.nl/nl/acquirerStatusInquiry/getAcquirerStatusInquiry.xml';
	}

	public function get_certificates() {
		return array(
			dirname( __FILE__ ) . '/../certificates/abnamro.integrated.cer',
		);
	}
}
