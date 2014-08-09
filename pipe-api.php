<?php

include_once 'apiPipeDrive.class.php';

# create a persone
# get person id
# create a lead

//
//$_REQUEST['first_name'] = "First Name";
//$_REQUEST['last_name'] = "Last Name";
//$_REQUEST['email_address'] = 'test@api.com';
//
//$_REQUEST['phone_work'] = '123-456-789';
//$_REQUEST['phone_cell'] = '111-456-789';
//$_REQUEST['phone_home'] = '222-456-789';
//
//$_REQUEST['address'] = "WTC Tower 1";
//$_REQUEST['city'] = "NY";
//$_REQUEST['state'] = "New York";
//$_REQUEST['zip_code'] = "11022";
//$_REQUEST['country'] = "USA";

$person_data = array();

$person_data['name'] = $_REQUEST['first_name'] . " " . $_REQUEST['last_name'];
$person_data['email'] = array();
$person_data['email'][] = array("label" => "work", "value" => $_REQUEST['email_address'], "primary" => true);

$person_data['phone'] = array();
$person_data['phone'][] = array("label" => "work", "value" => $_REQUEST['phone_work'], "primary" => true);
$person_data['phone'][] = array("label" => "home", "value" => $_REQUEST['phone_cell'], "primary" => false);
$person_data['phone'][] = array("label" => "cell", "value" => $_REQUEST['phone_home'], "primary" => false);

$person_data['17f86c1e9c93b8f61019719e34aafa357f2e9613'] = $_REQUEST['address'] . ", " . $_REQUEST['city'] . " " . $_REQUEST['state'] . "  " . $_REQUEST['zip_code'] . " " . $_REQUEST['country'];


$api = new apiPiepDrive();
$person_created_data = $api->createPerson($person_data);
$person_created_data = json_decode($person_created_data, true);

$person_id = $person_created_data['data']['id'];


$deal_data = array();
$deal_data['person_id'] = $person_id;
$deal_data['title'] = $_REQUEST['first_name'] . " " . $_REQUEST['last_name'];

//
//$_REQUEST['best_time'] = "M";
//$_REQUEST['ip_address'] = "192.168.1.1";
//$_REQUEST['opt_in'] = "Yes";
//$_REQUEST['loan_type'] = "Refinance";
//$_REQUEST['property_type'] = "Condo";
//$_REQUEST['credit_score'] = "good";
//$_REQUEST['home_value'] = "110000";
//$_REQUEST['mortgage_balance'] = "110000";
//$_REQUEST['interest_rate'] = "1.0";
//$_REQUEST['cash_out'] = "1.0";
//$_REQUEST['ltv'] = "1121212";
//$_REQUEST['lender'] = "BANK LTD";
//$_REQUEST['months_behind'] = "5";
//$_REQUEST['monthly_payment'] = "1011";
//$_REQUEST['income'] = "10110";
//$_REQUEST['xxTrustedFormCertUrl'] = "http://www.google.com/";
//$_REQUEST['leadid_token'] = "4582";
//$_REQUEST['veteran'] = "0";

# best time to call
$deal_data['value'] = $_REQUEST['mortgage_balance'];
$deal_data['currency'] = 'USD';
$deal_data['dae346d906315427ecc01e3df5ca3e665b98290a'] = $_REQUEST['best_time'];
$deal_data['0f1f5d98c8dabb25e3ef70ca0028dd1ce94d21af'] = $_REQUEST['ip_address'];
$deal_data['68fdc1071f95ebda70b7e7eb77af4d572a580d89'] = $_REQUEST['loan_type'];
$deal_data['f764282a032f5409c846c32da9d9df03836aedb0'] = $_REQUEST['property_type'];
$deal_data['9fb625f0853a947930ceb19e94e0864d811f48aa'] = $_REQUEST['credit_score'];
$deal_data['d70c58bcb03449c44041ea71b1cc23ae21b0a34d'] = $_REQUEST['home_value'];
$deal_data['d70c58bcb03449c44041ea71b1cc23ae21b0a34d_currency'] = 'USD';
$deal_data['9b27532e5e2e5cdb67a9d9db395dab04e39e7379'] = $_REQUEST['mortgage_balance'];
$deal_data['9b27532e5e2e5cdb67a9d9db395dab04e39e7379_currency'] = 'USD';
$deal_data['d46dac6ebf35be53a7de40ebae2bf5f38d5e6332'] = $_REQUEST['cash_out'];
$deal_data['02fd022e9ca8376977af8e7e16710f643c3c9346'] = $_REQUEST['ltv'];
$deal_data['b8e61c8c25cdbff2a1a2ebdfda7ac8fdc072c593'] = $_REQUEST['lender'];
$deal_data['596696a3874084900a0026fa0c52a99c6c36aeea'] = $_REQUEST['months_behind'];
$deal_data['c095a84610cf9b4580d0c3aac0176df04168c3ef'] = $_REQUEST['monthly_payment'];
$deal_data['c095a84610cf9b4580d0c3aac0176df04168c3ef_currency'] = 'USD';
$deal_data['05060be88aea3954831938865e26160131c6eebf'] = $_REQUEST['income'];
$deal_data['05060be88aea3954831938865e26160131c6eebf_currency'] = 'USD';
$deal_data['4960da0376ecb5eadacf14cd9afd1a4cc51ae383'] = $_REQUEST['xxTrustedFormCertUrl'];
$deal_data['7b68d13ade6b13e958e6bfc4b61529d35cd6b160'] = $_REQUEST['leadid_token'];
$deal_data['e8d4fa8dd4524a87d72b7f91ea46e124b69d1d13'] = $_REQUEST['veteran'];


$deal_pipe_data = $api->createDeal($deal_data);

print $deal_pipe_data;

die;