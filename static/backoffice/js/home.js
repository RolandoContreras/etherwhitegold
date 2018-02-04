function validate_eth(value){
        $.ajax({
        type: "post",
        url: site + "b_home/validate_eth",
        dataType: "json",
        data: {value: value},
        success:function(data){  
           $("#ewg").val(data).html(data.print);
        }            
    });
}
function validate_ewg(value){
        $.ajax({
        type: "post",
        url: site + "b_home/validate_ewg",
        dataType: "json",
        data: {value: value},
        success:function(data){            
            $("#eth").val(data).html(data.print);
        }            
    });
}