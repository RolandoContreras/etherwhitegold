<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_pays extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("activation_message_model","obj_activation_message");
    }   
                
    public function index(){  
        
           $this->get_session();
           
           $params = array(
                        "select" =>"customer.username,
                                    customer.first_name,
                                    customer.last_name,
                                    activation_message.activation_message_id,
                                    activation_message.amount_ewg,
                                    activation_message.amount_eth,
                                    activation_message.img,
                                    activation_message.date,
                                    activation_message.active,
                                    bonus.name",
                        "join" => array('customer, activation_message.customer_id = customer.customer_id',
                                        'bonus, activation_message.bonus_id = bonus.bonus_id'),
                        "where" => "activation_message.status_value = 1",                
                        "order" => "activation_message.activation_message_id DESC"
               );
           //GET DATA FROM CUSTOMER
           $obj_pay= $this->obj_activation_message->search($params);
           
           /// PAGINADO
            $modulos ='Payments'; 
            $seccion = 'List';        
            $link_modulo =  site_url().'dashboard/pagos'; 
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_pay",$obj_pay);
            $this->tmp_mastercms->render("dashboard/pagos/payments_list");
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