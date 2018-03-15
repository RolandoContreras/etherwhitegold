function details_customer(customer_id){    
     var url = 'dashboard/clientes/detalle/'+customer_id;
     location.href = site+url;   
}
function edit_customer(customer_id){    
     var url = 'dashboard/clientes/load/'+customer_id;
     location.href = site+url;   
}
function cancelar_customer(){
	var url= 'dashboard/clientes';
	location.href = site+url;
}
