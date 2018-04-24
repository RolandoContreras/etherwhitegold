<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_guests extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("otros_model","obj_otros");
        $this->load->model("bonus_model","obj_bonus");
        $this->load->model("orders_model","obj_orders");
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        
                //VERIFIRY GET SESSION    
        $this->get_session();    
        
        $customer_id = $_SESSION['customer']['customer_id'];
        //GET CUSTOMER WHERE PARENTS_ID = CUSTOMER_ID
        $params = array(
                        "select" =>"*",
                        "where" => "customer.parents_id = $customer_id");
         $obj_customer_n2 = $this->obj_customer->search($params); 
         
         $params = array(
                        "select" =>"*",
                        "where" => "customer.customer_id = $customer_id");
         $obj_customer = $this->obj_customer->get_search_row($params); 
         
          //GET BONUS DAY
        $obj_bonus = $this->bonus_day();    
        //GET TOTAL ETHERWHITEGOLD
        $obj_total_etherwhitegold = $this->total_etherwhitegold($customer_id);
         
         //SEND DATA TO VIEW
         $this->tmp_backoffice->set("obj_total_etherwhitegold",$obj_total_etherwhitegold);
         $this->tmp_backoffice->set("obj_bonus",$obj_bonus);
         $this->tmp_backoffice->set("obj_customer",$obj_customer);
         $this->tmp_backoffice->set("obj_customer_n2",$obj_customer_n2);
         $this->tmp_backoffice->render("backoffice/b_guests");
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
                            "where" => "customer_id = $customer_id and active = 2");
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
    
        public function get_messages_informative(){
            $params = array(
                            "select" =>"",
                             "where" => "status_value = 1 and page = 5 and active = 1",
                            "order" => "position ASC");
                
           $messages_informative = $this->obj_otros->search($params); 
            return $messages_informative;
        }
    
        public function get_total_messages($customer_id){
        $params = array(
                        "select" =>"count(messages_id) as total",
                        "where" => "customer_id = $customer_id and status_value = 1",
                        
                                        );
            $obj_message = $this->obj_messages->get_search_row($params);
            //GET TOTAL MESSAGE ACTIVE   
            $all_message = $obj_message->total;
            return $all_message;
        }
    
        public function get_messages($customer_id){
            $params = array(
                        "select" =>"messages_id,
                                    date,
                                    subject,
                                    label,
                                    type,
                                    messages",
                        "where" => "customer_id = $customer_id and status_value = 1",
                        "order" => "messages_id DESC",
                        "limit" => "3",
                                        );
            $obj_message = $this->obj_messages->search($params); 
            //GET ALL MESSAGE   
            return $obj_message;
        }
}
