<?php
// print_r($_POST);
if (isset($_POST['MainProductCode'])) {
  // code...
$MainProductCode=$_POST['MainProductCode'];
$SubProductCode=$_POST['Barcode'];
$Barcode=$_POST['Barcode'];
$Property2=$_POST['Property'];
$url = "http://tesetturpazari.com/rest1/subProduct/addSubProducts";

$fields = array( 'token' => 'j0ai8vbq4bc0a5adtmipepfja3',
                  'data'=>'[
                              {
                                  "MainProductCode": "'.$MainProductCode.'",
                                  "SubProductCode": "'.$SubProductCode.'",
                                  "Barcode": "'.$Barcode.'",
                                  "SupplierSubProductCode": "",
                                  "Property1GroupId": "",
                                  "Property2GroupId": "",
                                  "Property1": "",
                                  "Property2": "'.$Property2.'",
                                  "BuyingPrice": "200",
                                  "SellingPrice": "350",
                                  "VendorSellingPrice": "380",
                                  "Stock": "1",
                                  "CBM": "30",
                                  "IsActive": "1"
                              }
                          ]');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

 print_r($response);
$Resault= json_decode($response, true);
if ($Resault['success']==false) {
  // Get Stock
  $coco=urlencode($SubProductCode);
                $url = "http://tesetturpazari.com/rest1/subProduct/getSubProductByCode/".$SubProductCode."";

              $fields = array( 'token' => 'j0ai8vbq4bc0a5adtmipepfja3');

              $ch = curl_init();
              curl_setopt($ch, CURLOPT_URL, $url);
              curl_setopt($ch, CURLOPT_POST, 1);
              curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

              $Stock = curl_exec($ch);
              curl_close($ch);

              //print_r($Stock);
              $StockResault= json_decode($Stock, true);
              foreach ($StockResault['data'] as  $value) {
                $StockToAdd=$value['Stock']+1;

//Update Stock

  $url = "http://tesetturpazari.com/rest1/subProduct/updateStock";

$fields = array( 'token' => 'j0ai8vbq4bc0a5adtmipepfja3',
'data' => '[    {        "SubProductCode": "'.$SubProductCode.'",        "Stock": "'.$StockToAdd.'"    }]');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

print_r($response);
  }
}

}
  ?>
