<?php

if (isset($_POST['ProductCode'])) {
  $ProductCode=$_POST['ProductCode'];
  $ProductName=$_POST['ProductName'];
  $DefaultCategoryCode=$_POST['DefaultCategoryCode'];
  $Barcode=$_POST['Barcode2'];
  $SupplierProductCode=$_POST['SupplierProductCode'];


$url = 'http://tesetturpazari.com/rest1/product/setProducts';


$fields = array( 'token' => 'j0ai8vbq4bc0a5adtmipepfja3',
                            'data' => '[    {
                              "ProductCode": "'.$ProductCode.'",
                              "ProductName": "'.$ProductName.'",
                              "DefaultCategoryCode": "'.$DefaultCategoryCode.'",
                              "SupplierProductCode": "'.$SupplierProductCode.'",
                              "Barcode": "'.$Barcode.'",
                              "Stock": "5",
                              "StockUnit": "adet",
                              "IsActive": "1",
                              "Vat": "",
                              "Currency": "TL",
                              "BuyingPrice": "300",
                              "SellingPrice": "500",
                              "SearchKeywords": "",
                              "IsNewProduct": "",
                              "OnSale": "",
                              "ImageUrl": "http://celil.meticaret.com/kiz-cocuk-elbise-503-64-B.jpg",
                              "IsDisplayProduct": "",
                              "VendorDisplayOnly": "",
                              "DisplayWithVat": "",
                              "Brand": "Donatella",
                              "Model": "beige",
                              "HasSubProducts": false,
                              "Supplier": "Penta",
                              "CustomerGroupDisplay": "TZ0|TE2",
                              "Additional1": "",
                              "Additional2": "",
                              "Additional3": "",
                              "RelatedProductsBlock1": "T678|T3181",
                              "RelatedProductsBlock2": "",
                              "RelatedProductsBlock3": "",
                              "Magnifier": "",
                              "MemberMinOrder": "",
                              "MemberMaxOrder": "",
                              "VendorMinOrder": "",
                              "VendorMaxOrder": "",
                              "FreeDeliveryMember": "0",
                              "FreeDeliveryVendor": "0",
                              "ShortDescription": "",
                              "Details": "detailsdetails",
                              "Width": "",
                              "Height": "",
                              "Depth": "",
                              "Weight": "",
                              "CBM": "",
                              "Document": "DocumentDocumentDocument",
                              "Warehouse": "",
                              "WarrantyInfo": "",
                              "DeliveryInfo": "",
                              "DeliveryTime": "",
                              "ProductNote": "ProductNoteProductNote",
                              "SeoSettingsId": "",
                              "SeoTitle": "",
                              "SeoKeywords": "",
                              "SeoDescription": "",
                              "Gtip": "",
                              "Gender": 0,
                              "ListNo": "",
                              "Label1": {
                                    "Value": 1
                                    },
                                    "Label2": {
                                          "Value": 0
                                          },
                                          "Label3": 1,
                                          "Label4": 0,
                                          "Label5": 0,
                                          "Label6": 0,
                                          "Label7": 0,
                                          "Label8": 0,
                                          "Label9": 0,
                                          "Label10": 0    }]');


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

//print_r($response);
echo "1";
};

 ?>
