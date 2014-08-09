<?php

/**
 *  
 * Pipedrive API Client
 *  
 * API Documentation is located at: http://api.pipedrive.com/v1/
 * 
 * Live API key is: 33fadb425cda98975269f9147e045066904de01b
 * Dev API Key is: cdb6ce0514faad6612c0149c754602041bca5468
 * 
 * @author Hardik Shah<hardiks059@gmail.com>
 * @since August 9, 2014
 * @version 1.0
 * 
 * 
 */
include_once 'apiCore.class.php';
class apiPiepDrive extends apiCore {

    public $apiEndpoint = '';
    public $apiURL = 'http://api.pipedrive.com/v1/';
    public $key = '33fadb425cda98975269f9147e045066904de01b';
    public $params = array();

    public function __construct() {
        $this->params['api_token'] = $this->key;
    }

    /**
     * API URL:
     * http://api.pipedrive.com/v1/persons?api_token=cdb6ce0514faad6612c0149c754602041bca5468
     *
     */
    public function createPerson($data) {
        $this->apiEndpoint = "persons";
        return $this->doCall($this->prepareApiUrl(), $data);
    }

    /**
     * API URL:
     * http://api.pipedrive.com/v1/deals
     * @param type $data 
     */
    public function createDeal($data) {
        $this->apiEndpoint = "deals";
        return $this->doCall($this->prepareApiUrl(), $data);
    }

}

/**
 * 
  incoming string parameter

  first_name
  last_name
  address
  city
  state
  zip_code
  email_address
  phone_work
  phone_home
  phone_cell 
  best_time
  ip_address
  country
  opt_in
  loan_type
  property_type
  credit_score
  home_value
  mortgage_balance
  interest_rate
  cash_out
  ltv
  lender
  months_behind
  monthly_payment
  income
  xxTrustedFormCertUrl
  leadid_token
  veteran

 */