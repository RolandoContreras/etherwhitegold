<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B_order extends CI_Controller {
     function __construct() {
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("bonus_model","obj_bonus");
        $this->load->model("orders_model","obj_orders");
    }

    public function index()
    {
        //GET SESION ACTUALY
        $this->get_session();
        
        /// VISTA
        $customer_id = $_SESSION['customer']['customer_id'];
        $params = array(
                        "select" =>"orders.order_id,
                                    orders.date,
                                    bonus.name,
                                    bonus.price,
                                    orders.amount_ether,
                                    orders.amount_ewg,
                                    orders.active
                                    ",
                         "where" => "orders.customer_id = $customer_id and orders.status_value = 1",
                        "join" => array('bonus, orders.bonus_id = bonus.bonus_id',)
                                        );
        $obj_order = $this->obj_orders->search($params);
        
        //GET BONUS DAY
        $obj_bonus = $this->bonus_day();  
        
        //GET TOTAL ETHERWHITEGOLD
        $obj_total_etherwhitegold = $this->total_etherwhitegold($customer_id);
        
        
        $this->tmp_backoffice->set("obj_total_etherwhitegold",$obj_total_etherwhitegold);
        $this->tmp_backoffice->set("obj_bonus",$obj_bonus);
        $this->tmp_backoffice->set("obj_order",$obj_order);
        $this->tmp_backoffice->render("backoffice/b_order");
    }
    
     public function bonus_day(){
        //GET DATE TODAY    
        $day = date("Y-m-d"); 
        $where = "date_start <= '$day' and date_end >= '$day'";
        $params_bonus = array(
                        "select" =>"*",
                        "where" => $where,
                        "order" => "bonus_id DESC");
        $obj_bonus = $this->obj_bonus->get_search_row($params_bonus); 
        return $obj_bonus;
    }
    
    public function total_etherwhitegold($customer_id){
        //GET DATE TODAY    
        $params_bonus = array(
                        "select" =>"sum(amount_ewg) as total",
                        "where" => "customer_id = $customer_id and active = 3 and status_value = 1");
        $obj_total_ewg = $this->obj_orders->get_search_row($params_bonus); 
        return $obj_total_ewg = $obj_total_ewg->total;
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


    
