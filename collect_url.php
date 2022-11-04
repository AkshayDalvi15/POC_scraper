<?php

require_once './gz_file_extraction.php';

// $output_file = './extracted_files/sitemap_dp_Business_Centre.xml';

$xmldata = simplexml_load_file($output_file);

// var_dump($xmldata);
// exit();

// echo $xmldata->url[1]->loc;
// exit();
$urls = [];

foreach ($xmldata->url as $test) {
  $urls[] = $test->loc;
}

// var_dump($urls);

return $urls;
