<?php
require '../src/BarcodeGenerator.php';
require '../src/BarcodeGeneratorPNG.php';
 $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
        $generated = $generator->getBarcode('081231723897', $generator::TYPE_CODE_128);
        echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode('081231723897', $generator::TYPE_CODE_128)) . '">';
        echo "<br>";
        echo "<br>";


?>
