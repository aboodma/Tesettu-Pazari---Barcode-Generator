function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    location.reload();
    MainProductCode = $("#MainProductCode").val(" ");
    Property2 = $("#Property2").val(" ");
    StockVal = $("#Stock").val(" ");
    document.body.innerHTML = originalContents;
}



$(document).ready(function() {

    $(SubProductForm).submit(function(event) {

        event.preventDefault();
        var SubProductForm = $("#SubProductForm");

        var MainProductCode = $("#MainProductCode").val();
        var Property2 = $("#Property2").val();
        var StockVal = $("#Stock").val();
        var Stock = $("#Stock");
        var BarkodBtn = $("#BarkodBtn");
        var PrintBtn = $("#PrintBtn");
        //
        // window.open("barcode_procces.php?MainProductCode="+MainProductCode+"Property2="+StockVal, "MsgWindow", "width=500,height=500")
        // $.ajax({
        //         url: 'barcode_procces.php',
        //         type: 'POST',
        //         data: {
        //             MainProductCode: MainProductCode,
        //             Property2: Property2,
        //             StockVal: StockVal
        //         }
        //     })
        //     .done(function(data, Response) {

        //         $('#barcodediv').append(" ");
        //         $('#barcodediv').append(data);
        //         console.log(Response);
        //         console.log(data);
        //         $(PrintBtn).fadeIn('slow', function() {

        //         });


        //     })
        //     .fail(function() {
        //         console.log("error");
        //     })
        //     .always(function() {
        //         console.log("complete");
        //     });
        var Barcode2=MainProductCode+"--"+Property2
        $('#barcode').JsBarcode(Barcode2, {
                            width: 1,
                            height: 40
                          });
                          $("#createBtn").fadeIn('slow', function() {
                            });
                          
                          $("#createBtn").on("click",function(){
                              $(BarkodBtn).fadeOut('slow', function() {
                            });
                              var srci=$("#barcode").attr("src");
                        var cou = StockVal;
                        var son=cou-1;
                        for (var i = 0; i < son; i++) {

                        $('#barcodediv').append('<br><img id="barcode" src='+srci+' />');

                        }
                        $(PrintBtn).fadeIn('slow', function() {
                            });
                          });
        
                         
                          
                          

    });




});
