<?php
echo "test";
$config['useragent'] = 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0';


function curl_get_contents($url)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_USERAGENT, $config['useragent']);
  curl_setopt($ch, CURLOPT_REFERER, 'https://www.google.com/');
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}



echo curl_get_contents('https://www.fiverr.com/search/gigs?query=front%20end');

?>
