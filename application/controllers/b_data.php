<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_data extends CI_Controller {
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
        /// VISTA
        $customer_id = $_SESSION['customer']['customer_id'];
        
        $params = array(
                        "select" =>"customer.customer_id,
                                    customer.username,
                                    customer.email,
                                    customer.created_at,
                                    customer.password,
                                    customer.first_name,
                                    customer.last_name,
                                    customer.ether_address,
                                    customer.status_value,
                                    ",
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
         $this->tmp_backoffice->render("backoffice/b_data");
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
        
        public function update_password(){
             if($this->input->is_ajax_request()){   
                //SELECT ID FROM CUSTOMER
               $password_one = $this->input->post('password_one');
               $customer_id = $this->input->post('customer_id');
               
               if($password_one != ""){
                            //UPDATE DATA EN CUSTOMER TABLE
                            $data = array(
                                            'password' => $password_one,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);

                                 $data['message'] = "true";
                                 $data['print'] = '<div class="alert alert-success" style="text-align: center">Successfully saved.</div>';
                                 $data['url'] = "misdatos";
                             echo json_encode($data); 
                             exit();
                    
               }else{
                     $data['message'] = "false";
                     $data['print'] = '<div class="alert alert-danger" style="text-align: center">You must fill all the fields.</div>';
                     $data['url'] = "misdatos";
                     echo json_encode($data); 
                     exit();
               }
            }
        }
    
        public function update_btc_address(){
         if($this->input->is_ajax_request()){   
            //SELECT ID FROM CUSTOMER
           $btc_ether = trim($this->input->post('address'));
           $customer_id = $this->input->post('customer_id');

           if($btc_ether == ""){
               $data['message'] = "false";
               $data['info'] = '<div class="alert alert-danger" style="text-align: center">You must fill all the fields.</div>';
               echo json_encode($data); 
               exit();
           }else{
               //UPDATE DATA EN CUSTOMER TABLE
               $data = array(
                               'ether_address' => $btc_ether,
                               'updated_by' => $customer_id,
                               'updated_at' => date("Y-m-d H:i:s")
                           ); 
                           $this->obj_customer->update($customer_id,$data);
                     //SEND MESSAGE OF CHANGE ETHER ADDRESS      
                    $data['message'] = "true";
                    $data['info'] = '<div class="alert alert-success" style="text-align: center">Successfully saved.</div>';
                echo json_encode($data); 
                exit();
            }
        }
    }
    
        public function validate_password() {
        //SELECT ID FROM CUSTOMER
        $password = str_to_minuscula(trim($this->input->post('password')));
        $customer_id = trim($this->input->post('customer_id'));
        
        $param_customer = array(
            "select" => "password",
            "where" => "customer_id = '$customer_id' and password = '$password'");
        $customer = count($this->obj_customer->get_search_row($param_customer));
        
        if ($customer > 0) {
            $data['message'] = "true";
            $data['print'] = "✔ Verify";
        } else {
            $data['message'] = "false";
            $data['print'] = "Incorrect password";
        }
        echo json_encode($data);
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
    
        public function get_messages($customer_id){
            $params = array(
                        "select" =>"messages_id,
                                    date,
                                    subject,
                                    label,
                                    messages",
                        "where" => "customer_id = $customer_id and status_value = 1",
                        "order" => "date DESC",
                        "limit" => "3",
                                        );
            $obj_message = $this->obj_messages->search($params); 
            //GET ALL MESSAGE   
            return $obj_message;
    }
}
