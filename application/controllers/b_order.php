<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B_order extends CI_Controller {
     function __construct() {
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("bonus_model","obj_bonus");
        $this->load->model("order_model","obj_order");
    }

    public function index()
    {
        //GET SESION ACTUALY
        $this->get_session();
        
        /// VISTA
        $customer_id = $_SESSION['customer']['customer_id'];
        $params = array(
                        "select" =>"*",
                         "where" => "orders.customer_id = $customer_id");
        $obj_order = $this->obj_order->search($params);
            
        $this->tmp_backoffice->set("obj_order",$obj_order);
        $this->tmp_backoffice->render("backoffice/b_order");
    }
    
    public function get_session(){          
        if (isset($_SESSION['customer'])){
            if($_SESSION['customer']['logged_customer']=="TRUE" && $_SESSION['customer']['status']=='1'){               
                return true;
            }else{
                redirect(site_url().'home');
            }
        }else{
            redirect(site_url().'home');
        }
    }
}


    
