<?php
require '../src/BarcodeGenerator.php';
require '../src/BarcodeGeneratorPNG.php';
 $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
        $generated = $generator->getBarcode('081231723897', $generator::TYPE_CODE_128);

        $this->assertEquals('PNG', substr($generated, 1, 3));

?>