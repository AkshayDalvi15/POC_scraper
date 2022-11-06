<?php
require 'vendor/autoload.php';

use Symfony\Component\DomCrawler\Crawler;

$httpClient = \Symfony\Component\Panther\Client::createChromeClient();
// $httpClient = \Symfony\Component\Panther\Client::createSeleniumClient();
// $httpClient = \Symfony\Component\Panther\Client::createFirefoxClient();

$response = $httpClient->get('https://www.magicbricks.com/owner-property-for-sale-in-pune-pppfs');
// $response = $httpClient->get("https://www.99acres.com/residential-land-plot-for-sale-in-sector-37-rohini-north-delhi-72-sq-yard-r9-spid-W52497002");
$titles = $response->getCrawler()->filter('.mb-srp__card--title');
$details = $response->getCrawler()->filter('.mb-srp__card');    //provides all information inside the card
$price_Title = $response->getCrawler()->filter('.mb-srp__card--title , .mb-srp__card__price--amount');

$price_Title->each(function ($title) {

  var_dump($title->text());
  // exit();
});

var_dump($details->text());
var_dump($price_Title->text());




