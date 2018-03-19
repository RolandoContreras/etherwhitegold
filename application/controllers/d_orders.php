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
    
    public function cambiar_cancel(){
            //UPDATE DATA ORDERS
        if($this->input->is_ajax_request()){   
              $order_id = $this->input->post("order_id");
                if(count($order_id) > 0){
                    $data = array(
                        'active' => 2,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_orders->update($order_id,$data);
                }
                echo json_encode($data);            
        exit();
            }
    }
    
    public function cambiar_processed(){
            //UPDATE DATA ORDERS
        if($this->input->is_ajax_request()){   
              $order_id = $this->input->post("order_id");
              
                if(count($order_id) > 0){
                    $data = array(
                        'active' => 3,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_orders->update($order_id,$data);
                }
                echo json_encode($data);            
        exit();
            }
    }
    
    public function cambiar_awaiting(){
            //UPDATE DATA ORDERS
        if($this->input->is_ajax_request()){   
              $order_id = $this->input->post("order_id");
              
                if(count($order_id) > 0){
                    $data = array(
                        'active' => 1,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_orders->update($order_id,$data);
                }
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