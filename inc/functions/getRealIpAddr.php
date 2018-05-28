<?php
// for frontend customizer chat box - greeting
function getRealIpAddr()
{
  if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
  {
    $ip=$_SERVER['HTTP_CLIENT_IP'];
  }
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
  {
    $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  else
  {
    $ip=$_SERVER['REMOTE_ADDR'];
  }

  return $ip;
}

function getUserName() {
  $ip = getRealIpAddr();

  $ip_list = array(
    '192.168.2.28' => 'Nikesh',
    '192.168.2.29' => 'Simanta',
    '192.168.2.37' => 'Ashok',
    '192.168.2.40' => 'Abiral',
    '192.168.2.200' => 'EVision',
  );

  // var_dump($ip_list); //exit();

  foreach ($ip_list as $key => $value) {
    if(strpos($ip, $key) !== false) {
      $username = $value;
    } 
  }

  return $username;
}