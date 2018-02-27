<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B_message_confirmation extends CI_Controller {
     function __construct() {
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("activation_message_model","obj_activation_message");
        $this->load->model("bonus_model","obj_bonus");
        $this->load->model("orders_model","obj_orders");
        
    }

    public function index()
    {
        //GET SESION ACTUALY
        $this->get_session();
        //GET CUSTOMER_ID 
        $customer_id = $_SESSION['customer']['customer_id'];
        
        //GET IF ISSET ORDER // GET LAST ORDER
        $params = array(
                        "select" =>"orders.order_id,
                                    orders.date,
                                    bonus.name,
                                    bonus.bonus_id,
                                    bonus.price,
                                    orders.amount_ether,
                                    orders.amount_ewg,
                                    orders.active
                                    ",
                         "where" => "orders.customer_id = $customer_id and orders.status_value = 1",
                         "order" => "orders.order_id DESC",
                         "join" => array('bonus, orders.bonus_id = bonus.bonus_id',)
                                        );
        $obj_order = $this->obj_orders->get_search_row($params);
        
         if(count($obj_order)>0){
            //GET MESSAGE SEND FROM USER
            $param = array(
                            "select" =>"customer_id,
                                        first_name,
                                        last_name",
                             "where" => "customer_id = $customer_id and status_value = 1",
                             );
             $obj_customer = $this->obj_customer->get_search_row($param);
         }
         
            //GET BONUS DAY
            $obj_bonus = $this->bonus_day();  
            //GET TOTAL ETHERWHITEGOLD
            $obj_total_etherwhitegold = $this->total_etherwhitegold($customer_id);
            
            //SEND DATA TO VIEW
            $this->tmp_backoffice->set("obj_order",$obj_order);
            $this->tmp_backoffice->set("obj_customer",$obj_customer);
            $this->tmp_backoffice->set("obj_total_etherwhitegold",$obj_total_etherwhitegold);
            $this->tmp_backoffice->set("obj_bonus",$obj_bonus);
            $this->tmp_backoffice->render("backoffice/b_message_confirmation");
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
                        "where" => "customer_id = $customer_id and active = 1");
        $obj_total_ewg = $this->obj_orders->get_search_row($params_bonus); 
        return $obj_total_ewg = $obj_total_ewg->total;
    }
    public function upload()
    {
        //GET SESION ACTUALY
        $this->get_session();
        $customer_id = $_POST['customer_id'];
        
        //GET IF ISSET LAST ORDER
        $param = array(
                        "select" =>"activation_message_id,
                                    status_value",
                         "where" => "customer_id = $customer_id and active = 1"
                         );
         $obj_message_activate = $this->obj_activation_message->get_search_row($param);
         $messaje_active_count = count($obj_message_activate);
         
        //VERIFI ONLY 1 ROW 
        if($messaje_active_count == 0){
            if(isset($_FILES["image_file"]["name"]))
            {
            $config['upload_path']          = './static/backoffice/uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('image_file'))
                {
                     $error = array('error' => $this->upload->display_errors());
                      echo '<div class="alert alert-danger">'.$error['error'].'</div>';
                }
                else
                {
                    $data = array('upload_data' => $this->upload->data());

                    /// GET DATA METHOD POST
                        $bonus_id = $_POST['bonus_id'];
                        $message = $_POST['message'];
                        $img = $_FILES["image_file"]["name"];
                    // INSERT ON TABLE activation_message
                        $data = array(
                                'customer_id' => $customer_id,
                                'date' => date("Y-m-d H:i:s"),
                                'message' => $message,
                                'status_value' => 1,    
                                'active' => 1,    
                                'img' => $img,
                                'subject' => "Correo de Activacion",
                                'bonus_id' => $bonus_id,
                                'created_by' => $customer_id,
                                'created_at' => date("Y-m-d H:i:s")
                            ); 
                        
                           $this->obj_activation_message->insert($data);
                        echo '<div class="alert alert-success" style="text-align: center">Successfully Sent</div>';
                }
            }
        }else{
            echo '<div class="alert alert-success" style="text-align: center">You have already sent the message previously</div>';
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


    
