<?php

$url = "https://www.nobroker.in/sitemap/rent_bangalore_locality_misc.xml.gz"; //add the url from the sitemap you want to download.
$file_name = basename($url);
$save_file = "./extracted_files/".$file_name;
$zip_resource = fopen($save_file, "w");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FILE, $zip_resource);

$page = curl_exec($ch);

fclose($zip_resource);

// print_r($save_file);

return $save_file;