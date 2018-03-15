<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_orders extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("orders_model","obj_orders");
    }   
                
    public function index(){  
        
           $this->get_session();
           $params = array(
                        "select" =>"orders.order_id,
                                    orders.amount_ether,
                                    orders.amount_ewg,
                                    orders.date,
                                    orders.active,
                                    orders.status_value,
                                    customer.username,
                                    customer.first_name,
                                    customer.last_name,
                                    bonus.name,
                                    bonus.percent",
                        "join" => array('customer, orders.customer_id = customer.customer_id',
                                        'bonus, orders.bonus_id = bonus.bonus_id'),
                        "where" => "orders.status_value = 1",                
                        "order" => "orders.order_id DESC"
               );
           //GET DATA FROM CUSTOMER
           $obj_orders= $this->obj_orders->search($params);
           
           /// PAGINADO
            $modulos ='Order'; 
            $seccion = 'List';        
            $link_modulo =  site_url().'dashboard/order'; 
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_orders",$obj_orders);
            $this->tmp_mastercms->render("dashboard/order/order_list");
    }
    
    public function details($pay_id){  
        
           $this->get_session();
           $params = array(
                        "select" =>"commissions.commissions_id,
                                    commissions.name, 
                                    commissions.amount,
                                    commissions.normal_account,
                                    commissions.date,
                                    commissions.status_value",
                        "where" => "pay_commission.pay_id = $pay_id",
                        "join" => array('commissions, pay_commission.commissions_id = commissions.commissions_id'),
                        "order" => "commissions.date ASC"
                        );
           //GET DATA FROM CUSTOMER
           $obj_pay_commission= $this->obj_pay_commission->search($params);
           
           
           /// PAGINADO
            $modulos ='cobros'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/cobros'; 
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_pay_commission",$obj_pay_commission);
            $this->tmp_mastercms->render("dashboard/cobros/cobros_details");
    }
    
    public function pagado(){
        
        if($this->input->is_ajax_request()){  
            ///GET PAY_ID
            $pay_id = $this->input->post("pay_id");
            //GET DATA FROM EMAIL
            $first_name = $this->input->post("first_name");
            $username = $this->input->post("username");
            $amount = $this->input->post("amount");
            $email = $this->input->post("email");
            
            //UPDATE FILES PAY
            $data_pay = array(
                        'status_value' => 4,
                        'updated_by' =>  $_SESSION['usercms']['user_id'],
                        'updated_at' => date("Y-m-d H:i:s")
                    ); 
            $this->obj_pay->update($pay_id,$data_pay);
                    
            //SELECT ALL FILE WHERE PAY_ID = $pay_id
            $params = array(
                        "select" =>"pay_commission_id,commissions_id",
                        "where" => "pay_id = $pay_id"
               );
           //GET DATA FROM CUSTOMER
           $obj_pay_commission= $this->obj_pay_commission->search($params);
            
           foreach ($obj_pay_commission as $value) {
               $data_pay_comission = array(
                        'status_value' => 4,
                        'updated_by' =>  $_SESSION['usercms']['user_id'],
                        'updated_at' => date("Y-m-d H:i:s")
                    ); 
                    $this->obj_pay_commission->update($value->pay_commission_id,$data_pay_comission);
                    
                $data_comission = array(
                        'status_value' => 4,
                        'updated_by' =>  $_SESSION['usercms']['user_id'],
                        'updated_at' => date("Y-m-d H:i:s")
                    ); 
                    $this->obj_commission->update($value->commissions_id,$data_comission);    
           }  
           
         // Envio de Correo de confirmacion de pago
               $mail = '<html> 
                            <head> 
                               <title>COBRO PROCESADO</title> 
                            </head> 
                            <body> 
                            <h2>Pedido de cobro procesado</h2> 
                            <p>     
                            Saludos '.$first_name.' la petición de cobro del usuario: '.$username.' por la cantidad: '.$amount.', fue procesada exitósamente. <br>Gracias por su confianza. 
                            </p> 
                            <br>
                            <br>
                            <br>
                            <p><b><u>Department of Payments</u></b><br>
                            CRIPTOWIN - The Best Investment<br>
                            <i>http://www.criptowin.com</i></p> 
                            </body> 
                            </html> 
                            '; 

                // Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
                $mensaje = wordwrap($mail, 70, "\r\n");
                //Titulo
                $titulo = "PEDIDO DE COBRO PROCESADO";
                //cabecera
                $headers = "MIME-Version: 1.0\r\n"; 
                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                //dirección del remitente 
                $headers .= "From: CRIPTOTWIN - The Best Investment< noreplay@criptowin.com >\r\n";
                //Enviamos el mensaje a tu_dirección_email 
                
                $bool = mail("$email",$titulo,$mensaje,$headers);

                $data['message'] = "true";
                echo json_encode($data); 
            exit();
        }
    }
    
    public function devolver(){
        if($this->input->is_ajax_request()){  
            ///GET PAY_ID
            $pay_id = $this->input->post("pay_id");
            //GET DATA FROM EMAIL
            $first_name = $this->input->post("first_name");
            $username = $this->input->post("username");
            $amount = $this->input->post("amount");
            $email = $this->input->post("email");
            
            //UPDATE FILES PAY
            $data_pay = array(
                        'status_value' => 2,
                        'updated_by' =>  $_SESSION['usercms']['user_id'],
                        'updated_at' => date("Y-m-d H:i:s")
                    ); 
            $this->obj_pay->update($pay_id,$data_pay);
                    
            //SELECT ALL FILE WHERE PAY_ID = $pay_id
            $params = array(
                        "select" =>"pay_commission_id,commissions_id",
                        "where" => "pay_id = $pay_id"
               );
           //GET DATA FROM CUSTOMER
           $obj_pay_commission= $this->obj_pay_commission->search($params);
            
           foreach ($obj_pay_commission as $value) {
               $data_pay_comission = array(
                        'status_value' => 2,
                        'updated_by' =>  $_SESSION['usercms']['user_id'],
                        'updated_at' => date("Y-m-d H:i:s")
                    ); 
                    $this->obj_pay_commission->update($value->pay_commission_id,$data_pay_comission);
                    
                $data_comission = array(
                        'status_value' => 2,
                        'updated_by' =>  $_SESSION['usercms']['user_id'],
                        'updated_at' => date("Y-m-d H:i:s")
                    ); 
                    $this->obj_commission->update($value->commissions_id,$data_comission);    
           }
            
           // Envio de Correo de confirmacion de pago
                $mail = '<html> 
                            <head> 
                               <title>PEDIDO DE COBRO CANCELADO</title> 
                            </head> 
                            <body> 
                            <h2>Pedido de Cobro Cancelado</h2> 
                            <p>     
                            Saludos líder '.$first_name.' la petición de cobro del usuario: '.$username.' por la cantidad: '.$amount.', fue procesada cancelada. 
                            <br>Comunicarse con soporte. Gracias por su confianza. 
                            </p> 
                            <br>
                            <br>
                            <br>
                            <p><b><u>Department of Payments</u></b><br> 
                            Bitshare - Una solución para las personas<br>
                            <i>http://www.yourbitshares.com</i></p> 
                            </body> 
                            </html> 
                            '; 

                // Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
                $mensaje = wordwrap($mail, 70, "\r\n");
                //Titulo
                $titulo = "PEDIDO DE COBRO CANCELADO";
                //cabecera
                $headers = "MIME-Version: 1.0\r\n"; 
                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                //dirección del remitente 
                $headers .= "From: Bitshare - Una solución para las personas < noreplay@yourbitshares.com >\r\n";
                //Enviamos el mensaje a tu_dirección_email 
                $bool = mail("$email",$titulo,$mensaje,$headers);
           
                    $data['message'] = "true";
                    echo json_encode($data); 
            exit();
        }
    }

    
    public function get_session(){          
        if (isset($_SESSION['usercms'])){
            if($_SESSION['usercms']['logged_usercms']=="TRUE" && $_SESSION['usercms']['status']==1){               
                return true;
            }else{
                redirect(site_url().'dashboard');
            }
        }else{
            redirect(site_url().'dashboard');
        }
    }
}
?>