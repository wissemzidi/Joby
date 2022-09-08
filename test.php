<?php
echo "test";

function curl_get_contents($url)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}



echo curl_get_contents('https://www.fiverr.com/search/gigs?query=front%20end');

?>
