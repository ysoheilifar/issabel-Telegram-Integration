#!/usr/bin/php -q
<?php
require('phpagi.php'); 
$agi = new AGI(); 
$cid = $agi->request['agi_callerid'];
$exten = $agi->request['agi_dnid'];
$phoneFieldset = "call from number: ";
$phoneFieldset2 = "to number: ";
$token = "1415363275:AAFD0ZPLgQvtlMBgehw-QNWTTG09P8G42bU";
$chat_id = "90320218";
$arr = array(
$phoneFieldset => $cid,
$phoneFieldset2 => $exten,
);
foreach($arr as $key => $value) {
$txt .= "".$key." ".$value."%0A";
};
fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
?>