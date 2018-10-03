<?php

$MainProductCode=$_POST['MainProductCode'];
// $MainProductCode="Asm7566-4";
$url = "http://tesetturpazari.com/rest1/product/getProducts";

$fields = array( 'token' => 'j0ai8vbq4bc0a5adtmipepfja3',
'columns' => 'ProductCode',
'f' => 'ProductCode|'.$_POST['MainProductCode'].'');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);
$Resault = json_decode($response, true);

if ($Resault['data']==null) {
  echo "0";
}else{
  echo "1";
}

 ?>
