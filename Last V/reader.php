<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Reader </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">
    <link rel="stylesheet" href="loader.css">
<link rel="shortcut icon" href="favico.ico">

      <!-- <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script> -->

  </head>
  <body>
    <img src="logo.png" alt="" width="20%" style="margin-left: 700px;">
    <br>
    <div class="row" id="loader" style="display:none">
        <div class="col-md-12">
            <!-- <div class="loader">
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
            </div> -->
        </div>
    </div>
    <div class="col-md-4 col-md-offset-4" id="Content">
      <!-- <div class="row">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Reader</h3>
            </div>
            <div class="panel-body">
              <img src="supplier.gif" alt="" width="100%">


            </div>
            <div class="panel-footer">

            </div>
          </div>
      </div> -->





    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">The Barcode Reader V 1.0</h3>
        </div>
        <div class="panel-body">
          <div class="col-md-12">
            <div class="" id="ReaderFormDiv">


            <form class="" name="readerForm" id="readerForm">
              <div class="form-group">
                <label for="">Barcode</label>
                <input type="text" value="" name="Barcode" class="form-control" id="Barcode" placeholder="">
                <p class="help-block">Here Will Be Readed Barcode.</p>
              </div>


            </form>
            </div>
            <div id="New_Product_form_Div" class="" style="display:none">


            <form  class="" id="New_Product_form" >
              <input type="hidden" name="Barcode2" value="" id="Barcode2">
              <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" value="" name="ProductName" class="form-control" id="ProductName" placeholder="">
                <p class="help-block">Please Enter Product Name Here.</p>
              </div>
              <div class="form-group">
                <label for="">Product Code</label>
                <input type="text" value="" name="ProductCode" class="form-control" id="ProductCode" placeholder="">
                <p class="help-block">Please Enter Product Code Here.</p>
              </div>
              <div class="form-group">
                <label for="">DefaultCategoryCode</label>

                <select class="form-control" name="DefaultCategoryCode"  id="DefaultCategoryCode">
                  <?php include "Category.php";
                    foreach ($Cate['data'] as $categoies):?>
                  <option value="<?=$categoies['CategoryCode']?>"><?=$categoies['CategoryName']?></option>
                <?php endforeach;?>
                </select>
                <p class="help-block">Please Enter DefaultCategoryCode Here.</p>
              </div>
              <div class="form-group">
                <label for="">SupplierProductCode</label>
                <input type="text" value="" name="SupplierProductCode" class="form-control" id="SupplierProductCode" placeholder="">
                <p class="help-block">Please SupplierProductCode Here.</p>
              </div>
              <div class="form-group">
                <label for="">Brand</label>
                <select class="form-control" name="Brand"  id="Brand">
                  <?php include "Brand.php";
                    foreach ($Brand['data'] as $Brands):?>
                  <option value="<?=$Brands['BrandName']?>"><?=$Brands['BrandName']?></option>
                <?php endforeach;?>
                </select>
                <p class="help-block">Please Enter Brand Here.</p>
              </div>
              <div class="form-group">
                <label for="">Model</label>
                <select class="form-control" name="Model"  id="Model">
                  <?php include "model.php";
                    foreach ($Resault['data'] as $value):?>
                  <option value="<?=$value['Name']?>"><?=$value['Name']?></option>
                <?php endforeach;?>
                </select>
                <p class="help-block">Please Enter Model Here.</p>
              </div>

              <div class="form-group">

                <input type="submit" class="form-control btn btn-primary" id="submit" value="Send">

              </div>

            </form>
            </div>

          </div>

        </div>
        <div class="panel-footer">

        </div>
      </div>
    </div>
      </div>




    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="reader.js">

    </script>
  </body>
</html>
