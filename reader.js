$(document).ready(
    function() {
        //Document Ready
        // $("#Content").fadeOut('slow', function() {
        //     $("#loader").fadeIn('slow', function() {
        //         $("#Content").fadeIn('slow', function() {
        //             $("#loader").fadeOut('slow', function() {
        //
        //             });
        //         });
        //     });
        // });


        $(readerForm).submit(function(event) {
            var AlertModal=$("#AlertModal");
            var Token= $("#Token").val();
            var form = $("#rederForm");
            var Barcode = $("#Barcode").val();
            var Url = "Control.php";
            event.preventDefault();
            var formData = $("#rederForm").serialize();
            //alert("reader Is Ready");
            // Split The Barcode To Control The Main Product If True Or False
            var Resault = $("#Barcode").val().split('--');
            var MainProductCode = Resault[0];
            var Property = Resault[1];
            console.log('The Product Code Is :' + MainProductCode);
            console.log('The Property Is :' + Property);
            //alert();
            // Now Send Post To control
            $(AlertModal).css('display','block');
            $(AlertModalMSG).append("Is Loading");
            $.ajax({
                type: "POST",
                url: Url,
                data: {
                    MainProductCode: MainProductCode,
                    Token: Token
                },
                success: function(data, Response) {
                    // alert(data );
                    //   alert(Response );
                }
            }).done(function(data) {
              $(AlertModalMSG).empty();
              $(AlertModal).css('display','none');
                if (data == "1") {

                    // alert(data);
                    $.ajax({
                            url: 'subproduct.php',
                            type: 'POST',
                            data: {
                                MainProductCode: MainProductCode,
                                Property: Property,
                                Token: Token,
                                Barcode: MainProductCode + '--' + Property
                            }
                        })
                        .done(function() {
                            $(readerForm).trigger("reset");
                            $(AlertModal).css('display','block');
                            var SucessMSG="<img class='text-center' src='Okey.png' style='margin-left: 37px;'>"
                            $(AlertModalMSG).append("Sub Product Stock Updated Success"+SucessMSG);
                            setTimeout(function(){$(AlertModal).css('display','none');},500)
                            console.log("success");
                        })
                        .fail(function() {
                            $(readerForm).trigger("reset");
                            console.log("error");
                        })
                        .always(function(data) {
                            $(readerForm).trigger("reset");
                            console.log("complete");
                            console.log(data);
                        });

                };
                if (data == "0") {
                    // alert(data);
                    $(AlertModal).css('display','block');
                    var FailMSG="<img class='text-center' src='error.png' style='margin-left: 37px;'>"
                    $(AlertModalMSG).append("This Product Not Found!!"+FailMSG);
                    setTimeout(function(){$(AlertModal).css('display','none');},500)
                    console.log("This Product Not Found!!");
                    $("#ReaderFormDiv").fadeOut("slow", function() {
                        $("#New_Product_form_Div").fadeIn("slow", function() {
                            $("#ProductCode").val(MainProductCode);
                            $("#SupplierProductCode").val(MainProductCode);
                            $("#Barcode2").val(Barcode);
                            $(Barcode).val("");
                        });
                    });
                };
            })

        })



        var NewProductForm = $("#New_Product_form");
        var NewUrl = "mainProduct.php";
        var ProductName = $("#ProductName").val();
        var ProductCode = $("#ProductCode").val();
        var DefaultCategoryCode = $("#DefaultCategoryCode").val();
        var SupplierProductCode = $("#SupplierProductCode").val();
        var Brand = $("#Brand").val();
        var Model = $("#Model").val();
        $(NewProductForm).submit(function(event) {
            /* Act on the event */
            event.preventDefault();
            var NewProductFormData = $(NewProductForm).serialize();
            $.ajax({
                    url: NewUrl,
                    type: 'POST',
                    data: NewProductFormData
                    // {param1: 'value1'}
                })
                .done(function(data) {
                  $(AlertModal).css('display','block');
                  var SucessMSG="<img class='text-center' src='Okey.png' style='margin-left: 37px;'>"
                  $(AlertModalMSG).append("Product Create Successfuly"+SucessMSG);
                  setTimeout(function(){$(AlertModal).css('display','none');},500)
                    console.log("success");
                    console.log(data);
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    $("#New_Product_form_Div").fadeOut('slow', function() {
                      $("#ReaderFormDiv").fadeIn('slow', function() {
                        //Stuff to do *after* the animation takes place
                      })
                    })
                });

        });
    }
)
