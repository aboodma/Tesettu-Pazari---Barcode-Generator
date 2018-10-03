function printDiv(divName){
  var printContents = document.getElementById(divName).innerHTML;
  var originalContents = document.body.innerHTML;
  document.body.innerHTML = printContents;
  window.print();
  document.body.innerHTML = originalContents;
}


$(document).ready(function(){
          // alert("Document Is ready");

          $("#Content").fadeOut('slow', function() {
            $("#loader").fadeIn('slow', function() {
              $("#Content").fadeIn('slow', function() {
                $("#loader").fadeOut('slow', function() {

                });
              });
            });
          });



  $("#MainProductForm").submit(function (event) {
    $("#Content").fadeOut('slow', function() {
      $("#loader").fadeIn('slow', function() {

      });
    });
  //  alert("Form Submited");
    var ProductCode=$("#ProductCode").val();
    var ProductName=$("#ProductName").val();
    var SupplierProductCode=$("#SupplierProductCode").val();
    var Barcode=$("#Barcode").val();
    var DefaultCategoryCode=$("#DefaultCategoryCode").val();
    var formData = $("#MainProductForm").serialize();
    var AnotherForm=$("#Anotherform");
    var FirstForm=$("#MainProductForm");
    var MainProductCode=$("#MainProductCode").val();
    var SubProductCode=$("#SubProductCode").val();
    var Property2=$("#Property2").val();
    var Barcode2=$("#Barcode2").val();



    var url="mainProduct0.php";
    event.preventDefault();
    $.ajax({
      type: "POST",
      url: url,
      data:formData   ,
      success: function(Response) {
      //alert(Response);

    }
  }).done(function (Response) {
    $("#Content").fadeIn('slow', function() {
      $("#loader").fadeOut('slow', function() {

      });
    });
    if (Response == 1) {
      $(FirstForm).fadeOut( "slow", function() {
                    // Animation complete.
                    $(AnotherForm).fadeIn( "slow", function() {
                      $("#MainProductCode").val(ProductCode);
                      $("#SubProductCode").val(ProductCode);
                      $("#Property2").keypress(function () {
                        console.log($(this).val());
                        $("#Barcode2").val(ProductCode+'--'+$(this).val());

                      });
                      $("#Property2").on("blur",function () {
                        $("#Barcode2").val(ProductCode+'--'+$(this).val());
                        $('#barcode').JsBarcode($("#Barcode2").val(), {
                            width: 1,
                            height: 40
                          });

                      })
                      $("#Stock").on("blur",function () {
                        var srci=$("#barcode").attr("src");
                        var cou = $(this).val();
                        var son=cou-1;
                        for (var i = 0; i < son; i++) {

                        $('#barcodediv').append('<br><img id="barcode" src='+srci+' />');

                        }

                      })


                                });
                  });


    }
    });
    return false;

  })
})
