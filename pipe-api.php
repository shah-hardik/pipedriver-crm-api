<?php

$apiKey = "cdb6ce0514faad6612c0149c754602041bca5468";
$data = array();
$data['title'] = "From API";
$data['currency'] = "USD";
$data['value'] = "12354";
$url = "http://api.pipedrive.com/v1/deals?api_token={$apiKey}";

$response = doCall($url, $data);

print "<pre>";
print_r($response);

function doCall($url, $data) {
    $ch = curl_init();
    $timeout = 5;

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:18.0) Gecko/20100101 Firefox/18.0');
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

die("good");
