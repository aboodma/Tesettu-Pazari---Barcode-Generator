<?php

if (isset($_POST['ProductCode'])) {
  $ProductCode=$_POST['ProductCode'];
  $ProductName=$_POST['ProductName'];
  $Brand=$_POST['Brand'];
  $Model=$_POST['Model'];
  $DefaultCategoryCode=$_POST['DefaultCategoryCode'];
  $Barcode=$_POST['Barcode2'];
  $SupplierProductCode=$_POST['SupplierProductCode'];

    $Token=$_POST['Token'];

    $Detail='<div class="urun_ozellik" style="">
<h3 style="color: rgb(255, 255, 255); font-size: 1em; background-color: rgb(255, 51, 102); line-height: 22px;">&nbsp;Ürünümüz standart beden olup , 36 ile 44 arası bedenlerle uyumludur.</h3><h2 style="color: #FF3367; font-size: 1.5em;  line-height: 22px;">Tesettür Panço Triko Alg2078-5 Özellikleri:<br></h2>
<div class="urun_satir" style="font-size: 12px;">
<div class="urun_satir" style="color: rgb(0, 0, 0);"><span class="urun_ozellik_madde"><span style="color: #ff0000;"><b>KUMAŞ :</b></span>&nbsp;</span>Triko</div>
<div class="urun_satir" style="color: rgb(0, 0, 0);"><span class="urun_ozellik_madde">&nbsp;</span></div>
<div class="urun_satir" style=""><span class="urun_ozellik_aciklama" style=""><font style="font-weight: bold;" color="#ff0000">ÜRÜN ÖLÇÜLERİ : </font>Panço Boy:<font style="" color="#ff0000"> </font>85 cm</span></div>
<div class="urun_satir" style="color: rgb(0, 0, 0); font-weight: normal;">&nbsp; &nbsp;</div>
<div class="urun_satir" style="color: rgb(0, 0, 0);"><span class="urun_ozellik_madde"><span style="color: #ff0000;"><b>NUMUNENİN BEDENİ :</b></span>&nbsp;Standart ( 36 - 44 arası uyumludur)</span></div>
<div class="urun_satir" style="color: rgb(0, 0, 0); font-weight: normal;"><span class="urun_ozellik_madde">&nbsp;</span></div>
<div class="urun_satir" style="color: rgb(0, 0, 0);"><span class="urun_ozellik_madde" style=""><span style="color: rgb(255, 0, 0);"><b>AÇIKLAMA :</b>&nbsp;</span></span>&nbsp;Örme trikodan üretilen pançomuz mevsimlik olarak serin sonbahar günlerinde içinizi ısıtacak. 30 derecenin altında yıkanması ve sıkmadan , düz bir zemine sererek kurutmanız tavsiye edilir. Kompakt çekimden dolayı ürün ile resim arasında küçük ton farklılıkları olabilir.<span style="color: rgb(255, 0, 0);">&nbsp;</span></div><div class="urun_satir" style="color: rgb(0, 0, 0);"><span style="color: rgb(255, 0, 0);"><br></span></div>
<div class="urun_satir" style="color: rgb(0, 0, 0);"><span class="urun_ozellik_madde"><span style="color: #ff0000;"><b>MANKENİN ÖLÇÜLERİ :</b></span></span></div>
<div class="urun_satir_float_left" style="color: rgb(0, 0, 0);">
<div class="urun_satir_float_left" style="color: rgb(0, 0, 0); font-weight: normal;"><div baseline="" class="urun_satir_float_left" vertical-align:="" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: " open="" sans",="" sans-serif;="" baseline;"="">Basen : 97 cm</div><div baseline="" class="urun_satir_float_left" vertical-align:="" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: " open="" sans",="" sans-serif;="" baseline;"="">Bel : 67 cm</div><div baseline="" class="urun_satir_float_left" vertical-align:="" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: " open="" sans",="" sans-serif;="" baseline;"="">Göğüs :85 cm</div><div baseline="" class="urun_satir_float_left" vertical-align:="" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: " open="" sans",="" sans-serif;="" baseline;"="">Boy :165 cm</div><div baseline="" class="urun_satir_float_left" vertical-align:="" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: " open="" sans",="" sans-serif;="" baseline;"="">Kilo :54 kg</div></div><div class="urun_satir_float_left" style="color: rgb(0, 0, 0); font-weight: normal;"><br></div><div class="urun_satir_float_left" style="color: rgb(0, 0, 0); font-weight: normal;"><br></div><div class="urun_satir_float_left" style="color: rgb(0, 0, 0); font-weight: normal;"><span style="color: rgb(255, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif;">Not: Kolye aksesuar olup ürüne dahil değildir.</span><br></div><div class="urun_satir_float_left" style="color: rgb(0, 0, 0); font-weight: normal;"><br></div><div class="urun_satir_float_left" style=""><br></div><div class="urun_satir_float_left" style="color: rgb(0, 0, 0); font-weight: normal;"><br></div>
</div>
</div>
</div>';
$htmlDetail=  urlencode($Detail);

$url = 'http://tesetturpazari.com/rest1/product/setProducts';


$fields = array( 'token' => $Token,
                            'data' => '[    {
                              "ProductCode": "'.$ProductCode.'",
                              "ProductName": "'.$ProductName.'",
                              "DefaultCategoryCode": "'.$DefaultCategoryCode.'",
                              "SupplierProductCode": "'.$SupplierProductCode.'",
                              "Barcode": "'.$Barcode.'",
                              "Stock": "",
                              "StockUnit": "adet",
                              "IsActive": "0",
                              "Vat": "8",
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
                              "Brand": "'.$Brand.'",
                              "Model": "'.$Model.'",
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
                              "Details": "",
                              "Width": "30",
                              "Height": "35",
                              "Depth": "3",
                              "Weight": "0.5",
                              "CBM": "0.5",
                              "Document": "",
                              "Warehouse": "",
                              "WarrantyInfo": "",
                              "DeliveryInfo": "",
                              "DeliveryTime": "",
                              "ProductNote": "",
                              "SeoSettingsId": "",
                              "SeoTitle": "",
                              "SeoKeywords": "",
                              "SeoDescription": "",
                              "Gtip": "",
                              "Gender": 0,
                              "ListNo": "",
                              "Label1": {
                                    "Value": 0
                                    },
                                    "Label2": {
                                          "Value": 0
                                          },
                                          "Label3": 0,
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
