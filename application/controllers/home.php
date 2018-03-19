<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
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
            //SET TIMEZONE AMERICA
            date_default_timezone_set('America/Lima');
            //GET BONUS DAY
            $obj_bonus = $this->bonus_day();    
            
            //GET DATA ARRAY
            $data['round'] = $obj_bonus->name;
            $data['percent'] = $obj_bonus->percent;
            
            //TOTAL PAY
            $obj_total_eth = formate_number($this->total_ethereum_to_sell(),2);
            $data['obj_total_eth'] = $obj_total_eth;
            
            //SEND DATA VIEW
            $this->load->view('home',$data);
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
        
        public function total_ethereum_to_sell(){
        //GET DATE TODAY    
        $params_bonus = array(
                        "select" =>"sum(amount_ether) as total",
                        "where" => "active = 3 and status_value = 1");
        $obj_total_ewg = $this->obj_orders->get_search_row($params_bonus); 
        return $obj_total_ewg = $obj_total_ewg->total;
    }
}
