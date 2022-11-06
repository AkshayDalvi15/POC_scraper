<?php

require_once './download_gzFromSitemap.php';

// you can provide the file name as the location of .gz file as below comment example.
// $file_name = './extracted_files/sitemap_dp_Co_working_Space.xml.gz';
$buffer_size = 4096;
$output_file = str_replace('.gz','',$save_file);

//  $save_file is the variable which we get from download_gzFromSitemap.php 

$file = gzopen($save_file,'rb');

$out_file = fopen($output_file,'wb');

while(!gzeof($file)) {
  fwrite($out_file, gzread($file, $buffer_size));
}

fclose($out_file);
gzclose($file);

print_r($output_file);

return $output_file;

?>