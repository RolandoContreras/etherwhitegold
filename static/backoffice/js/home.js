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
function make_order(){
    bootbox.confirm({
    message: "Confirm that you want to place the order?",
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
                   url: site+"dashboard/comentarios/cambiar_status",
                   dataType: "json",
                   data: {comment_id : comment_id},
                   success:function(data){                             
                   location.reload();
                   }         
           });
    }
});
}