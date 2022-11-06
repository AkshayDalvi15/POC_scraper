<?php

require_once './gz_file_extraction.php';

// we can provide the .xml file from which we need to collect the URLs as per below comment.
// $output_file = './extracted_files/sitemap_dp_Business_Centre.xml';
// $output_file comes from the gz_file_extraction.php

$xmldata = simplexml_load_file($output_file);
$urls = [];

foreach ($xmldata->url as $test) {
  $urls[] = $test->loc;
}

var_dump($urls);

return $urls;
