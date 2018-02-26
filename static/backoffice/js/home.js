function validate_eth(value){
    var price = document.getElementById("price").value;
        $.ajax({
        type: "post",
        url: site + "b_home/validate_eth",
        dataType: "json",
        data: {value: value,price: price},
        success:function(data){  
           $("#ewg").val(data).html(data.print);
        }            
    });
}
function validate_ewg(value){
    var price = document.getElementById("price").value;
        $.ajax({
        type: "post",
        url: site + "b_home/validate_ewg",
        dataType: "json",
        data: {value: value,price: price},
        success:function(data){            
            $("#eth").val(data).html(data.print);
        }            
    });
}
function make_order(customer_id){
    var ewg = document.getElementById("ewg").value;
    var eth = document.getElementById("eth").value;
    var bonus_id = document.getElementById("bonus_id").value;
    
    bootbox.confirm({
    message: "Send the requested amount to the following etherium address\n\
    0x58FB4f49044266e0233121Ae8fF5589809c067C8",
    buttons: {
        confirm: {
            label: 'Confirm',
            className: 'btn-success'
        },
        cancel: {
            label: 'Cancel',
            className: 'btn-danger'
        }
    },
    callback: function () {
        $.ajax({
                   type: "post",
                   url: site+"b_home/make_pedido",
                   dataType: "json",
                   data: {customer_id : customer_id,
                          ewg : ewg,
                          eth : eth,
                          bonus_id : bonus_id},
                   success:function(data){
                       if(data.message == "false") {
                           $("#alert_message").html(data.info);
                       }else{
                           $("#alert_message").html(data.info);
                       }
                   }         
           });
    }
});
}