function mark_cancel(order_id){
     bootbox.dialog("Confirm that you want to cancel the order?", [        
        { "label" : "Cancel"},
        {
            "label" : "Confirm",
            "class" : "btn-success",
            "callback": function() {
               $.ajax({
                   type: "post",
                   url: site+"dashboard/order/cambiar_cancel",
                   dataType: "json",
                   data: {order_id : order_id},
                   success:function(data){                             
                   location.reload();
                   }         
           });
            }
        }
    ]);
}
function mark_processed(order_id){
     bootbox.dialog("Confirm that you want to process the order?", [        
        { "label" : "Cancel"},
        {
            "label" : "Confirm",
            "class" : "btn-success",
            "callback": function() {
               $.ajax({
                   type: "post",
                   url: site+"dashboard/order/cambiar_processed",
                   dataType: "json",
                   data: {order_id : order_id},
                   success:function(data){                             
                   location.reload();
                   }         
           });
            }
        }
    ]);
}
function mark_awating(order_id){
     bootbox.dialog("Confirm that you want mark awating?", [        
        { "label" : "Cancel"},
        {
            "label" : "Confirm",
            "class" : "btn-success",
            "callback": function() {
               $.ajax({
                   type: "post",
                   url: site+"dashboard/order/cambiar_awaiting",
                   dataType: "json",
                   data: {order_id : order_id},
                   success:function(data){                             
                   location.reload();
                   }         
           });
            }
        }
    ]);
}
