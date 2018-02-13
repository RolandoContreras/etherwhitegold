<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B_home extends CI_Controller {
     function __construct() {
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("bonus_model","obj_bonus");
        $this->load->model("otros_model","obj_otros");
        $this->load->model("orders_model","obj_orders");
    }

    public function index()
    {
        //GET SESION ACTUALY
        $this->get_session();
        
        /// VISTA
        $customer_id = $_SESSION['customer']['customer_id'];
        $params = array(
                        "select" =>"customer.customer_id,
                                    customer.username,
                                    customer.email,
                                    customer.password,
                                    customer.first_name,
                                    customer.last_name,
                                    customer.active,
                                    customer.created_at,
                                    customer.ether_address,
                                    customer.status_value
                                    ",
                         "where" => "customer.customer_id = $customer_id");
            $obj_customer = $this->obj_customer->get_search_row($params);
            
        //GET BONUS DAY
        $obj_bonus = $this->bonus_day();    
        //GET TOTAL PAY
        $obj_total_pay = $this->total_pay($customer_id);
        //GET TOTAL ETHERWHITEGOLD
        $obj_total_etherwhitegold = $this->total_etherwhitegold($customer_id);

        $this->tmp_backoffice->set("obj_total_etherwhitegold",$obj_total_etherwhitegold);
        $this->tmp_backoffice->set("obj_total_pay",$obj_total_pay);
        $this->tmp_backoffice->set("obj_bonus",$obj_bonus);
        $this->tmp_backoffice->set("obj_customer",$obj_customer);
        $this->tmp_backoffice->render("backoffice/b_home");
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
    
    public function total_pay($customer_id){
        //GET DATE TODAY    
        $params_bonus = array(
                        "select" =>"sum(amount_ether) as total",
                        "where" => "customer_id = $customer_id and active = 1");
        $obj_total_pay = $this->obj_orders->get_search_row($params_bonus); 
        return $obj_total_pay = $obj_total_pay->total;
    }
    
    public function total_etherwhitegold($customer_id){
        //GET DATE TODAY    
        $params_bonus = array(
                        "select" =>"sum(amount_ewg) as total",
                        "where" => "customer_id = $customer_id and active = 1");
        $obj_total_ewg = $this->obj_orders->get_search_row($params_bonus); 
        return $obj_total_ewg = $obj_total_ewg->total;
    }

    public function make_pedido(){

             if($this->input->is_ajax_request()){   
                //SELECT ID FROM CUSTOMER
               $franchise_id = $this->input->post('franchise_id');
               $customer_id = $_SESSION['customer']['customer_id'];
               
               if($franchise_id != "" && $customer_id != ""){
                            //UPDATE DATA EN CUSTOMER TABLE
                            if($franchise_id == 1){
                                //CHANGE TO BASIC
                                 $data = array(
                                            
                                            'franchise_id' => 1,
                                            'point_calification_left' => 50,
                                            'point_calification_rigth' => 50,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);
                            }elseif($franchise_id == 2){
                                //CHANGE TO EXECUTIVE
                                 $data = array(
                                            
                                            'franchise_id' => 2,
                                            'point_calification_left' => 100,
                                            'point_calification_rigth' => 100,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);
                            }elseif($franchise_id == 3){
                                //CHANGE TO SENIOR EXECUTIVE
                                 $data = array(
                                            'franchise_id' => 3,
                                            'point_calification_left' => 300,
                                            'point_calification_rigth' => 300,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);
                            }elseif($franchise_id == 4){
                                //CHANGE TO MASTER
                                 $data = array(
                                            'franchise_id' => 4,
                                            'point_calification_left' => 500,
                                            'point_calification_rigth' => 500,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);
                            }elseif($franchise_id == 5){
                                //CHANGE TO MASTER
                                 $data = array(
                                            'franchise_id' => 5,
                                            'point_calification_left' => 1000,
                                            'point_calification_rigth' => 1000,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);
                            }elseif($franchise_id == 6){
                                //CHANGE TO MASTER
                                 $data = array(
                                            'franchise_id' => 6,
                                            'point_calification_left' => 5000,
                                            'point_calification_rigth' => 5000,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);
                            }
                             $data['message'] = "true";
                             echo json_encode($data); 
                             exit();
               }else{
                     $data['message'] = "true";
                     echo json_encode($data); 
                     exit();
               }
            }
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
    
    public function validate_eth() {
            if ($this->input->is_ajax_request()) {
                //SELECT ID FROM CUSTOMER
            $value = str_to_minuscula(trim($this->input->post('value')));
            $price = str_to_minuscula(trim($this->input->post('price')));
            //MULTIPLE BY THE VALUE
            $new_data =  $value / $price;
            echo json_encode($new_data);
            }
        }
        
    public function validate_ewg() {
            if ($this->input->is_ajax_request()) {
                //SELECT ID FROM CUSTOMER
            $value = str_to_minuscula(trim($this->input->post('value')));
            $price = str_to_minuscula(trim($this->input->post('price')));
            //MULTIPLE BY THE VALUE
            $new_data =  $value * $price;
            echo json_encode($new_data);
            }
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


    
