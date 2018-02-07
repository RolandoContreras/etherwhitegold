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