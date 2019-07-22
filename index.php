<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://www38.polyu.edu.hk/eStudent/login.jsf"); // url
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$responseResult = curl_exec($curl);
curl_close($curl);

$coding = mb_detect_encoding($responseResult);
if ($coding != "UTF-8" || !mb_check_encoding($responseResult, "UTF-8"))
    $responseResult = mb_convert_encoding($responseResult, 'utf-8', 'GBK,UTF-8,ASCII');

$pattern = '|<a[^>]*>(.*)</a>|isU';
preg_match_all($pattern, $responseResult, $matches);

foreach($matches as $key){
    print_r($key[0]);
}