<?php
if (isset($_POST['MainProductCode'])) {
$MainProductCode=$_POST['MainProductCode'];
$Property2=$_POST['Property2'];
$Barcode=$MainProductCode.'--'.$Property2;
$StockVal=$_POST['StockVal'];

include('Php_Barcode/src/BarcodeGenerator.php');
include('Php_Barcode/src/BarcodeGeneratorPNG.php');
include('Php_Barcode/src/BarcodeGeneratorJPG.php');
$generator = new Picqer\Barcode\BarcodeGeneratorJPG();
file_put_contents('Barcodes/'.$Barcode.'.jpg',$generator->getBarcode($Barcode, $generator::TYPE_CODE_128));

for ($i=0; $i < $StockVal; $i++) {
echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($Barcode, $generator::TYPE_CODE_128)) . '">';
echo "<br>";
echo "<br>";
}

}
 ?>
