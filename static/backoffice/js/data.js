function alter_btc(){
    var address = document.getElementById("btc").value;
    var customer_id = document.getElementById("customer_id").value;
    
        $.ajax({
        type: "post",
        url: site +"b_data/update_btc_address",
        dataType: "json",
        data: {address: address,
               customer_id: customer_id
               },
        success:function(data){            
              if(data.message == "true"){  
                  $("#message_addres").val(data).html(data.info);
                  location.reload();  
            }else{
                $("#message_addres").val(data).html(data.info);
            }
        }            
    });
}

function alter_password(){
        var customer_id = document.getElementById("customer_id").value;
        var password_one = document.getElementById("password_one").value;
        var password_two = document.getElementById("password_two").value;
        
        if(password_one == password_two){
                $.ajax({
                    type: "post",
                    url: site + "b_data/update_password",
                    dataType: "json",
                    data: {customer_id: customer_id,
                           password_one: password_one
                       },
                    success:function(data){            
                            if(data.message == "true"){         
                            $(".alert-1").html(data.print);
                            location.reload();  
                        }else{
                            $(".alert-1").html(data.print);
                        }
                    }            
                });
        }else{
           $(".alert-1").html('<div class="alert alert-danger" style="text-align: center">The password is not the same.</div>');
        }
}

function validate_password(password){
        var customer_id = document.getElementById("customer_id").value;
        $.ajax({
        type: "post",
        url: site + "b_data/validate_password",
        dataType: "json",
        data: {password: password,
               customer_id: customer_id},
        success:function(data){            
                if(data.message == "true"){         
                $(".alert-0").removeClass('text-danger').addClass('text-success').html(data.print);
                    document.form.password_one.disabled = false;
                    document.form.password_two.disabled = false;
            }else{
                $(".alert-0").removeClass('text-success').addClass('text-danger').html(data.print)
            }
        }            
    });
}