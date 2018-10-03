<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Generator </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">
    <link rel="stylesheet" href="loader.css">
    <link rel="shortcut icon" href="favico.ico">


      <!-- <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script> -->

  </head>
  <body>

    <img src="logo.png"  width="20%" style="margin-left: 700px;">
    <br>
    <div class="row" id="loader" style="display:none">
        <div class="col-md-12">
            <div class="loader">
                <div class="loader-inner">
                    <div class="loading one"></div>
                </div>
                <div class="loader-inner">
                    <div class="loading two"></div>
                </div>
                <div class="loader-inner">
                    <div class="loading three"></div>
                </div>
                <div class="loader-inner">
                    <div class="loading four"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-md-offset-4" id="Content">



      <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">The Barcode Generator V 2.0</h3>
          </div>
          <div class="panel-body">
            <div class="col-md-12">

    <h1> </h1>

    <div id="Anotherform" >
      <form class="" id="SubProductForm">
        <div class="form-group">
          <label for=""></label>
          <input type="reset" class="form-control" id="" name="reset" placeholder="">
          
        </div>
        <div class="form-group">
          <label for="">Ürün Kodü</label>
          <input type="text" id="MainProductCode" class="form-control"  value="" name="MainProductCode" >

        </div>

        <div class="form-group">
          <label for="">Beden</label>
          <input type="text" id="Property2" class="form-control" name="Property2" value="">

        </div>

        <div class="form-group">
          <label for="">Stok</label>
          <input type="text" id="Stock" class="form-control" name="Stock" value="">

        </div>
        <div class="form-group">
          <label for=""></label>
          <input type="submit"class="form-control btn btn-primary" id="BarkodBtn"  name="button" value="Barkod Olüştür">

        </div>



      </form>

    <button class="form-control btn btn-warning" id="createBtn" style="display:none" >Create Render</button>
    <br><br>
        <button class="form-control btn btn-success" id="PrintBtn" style="display:none" onclick="printDiv('print')">Print only the above div</button>
    </div>
    <div id="print">

    <div id="barcodediv" style="text-align:center;">
      <img id="barcode" />
    </div>


    </div>


   </div>
 </div>
</div>


     </div>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="JsBarcode/dist/JsBarcode.all.js"></script>

            <script src="index2.js"></script>
  </body>
</html>
