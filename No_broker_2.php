<?php
require 'vendor/autoload.php';
require_once './collect_url.php';

$httpClient = new \GuzzleHttp\Client();

$response = $httpClient->get('https://www.nobroker.in/property/2-bhk-apartment-for-rent-in-rpc-layout-vijaya-nagar-bangalore-for-rs-17500/8a9fae828205d20a018205f1890515d1/detail');

$htmlString = (string) $response->getBody();
libxml_use_internal_errors(true);

$doc = new DOMDocument();
$doc->loadHTML($htmlString);
$xpath = new DOMXPath($doc);


$title = $xpath->evaluate('//*[@id="propertyDetails"]/div[1]/div/div/div[1]/div[2]/div[1]/h1');
$address = $xpath->evaluate('//*[@id="propertyDetails"]/div[1]/div/div/div[1]/div[2]/div[1]/h5');
$price = $xpath->evaluate('//*[@id="rent-maintenance"]/span/span[1]');


// var_dump(get_class_methods($title));exit;

// var_dump(get_class_methods($xpath));exit;
// var_dump(get_class_methods($title->item(0)));exit;
$title = $title->item(0)->textContent;
$address = $address->item(0)->textContent;
$price = $price->item(0)->textContent;
var_dump($title);


