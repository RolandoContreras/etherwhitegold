<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {
    function __construct() { 
        parent::__construct();
        $this->load->model('customer_model','obj_customer');
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
            /// VIEW
            $this->load->view("register");
	}
        
        public function username()
	{
            /// VIEW
            $this->load->view("register_username");
	}
        
        public function validate_username($username) {
            if ($this->input->is_ajax_request()) {
                //SELECT ID FROM CUSTOMER
                $username = str_to_minuscula(trim($this->input->post('username')));
                $param_customer = array(
                    "select" => "customer_id",
                    "where" => "username = '$username'");
                $customer = count($this->obj_customer->get_search_row($param_customer));

                if ($customer > 0) {
                    $data['message'] = "true";
                    $data['print'] = "Not available! <i class='fa fa-times-circle-o' aria-hidden='true'></i>";
                } else {
                    $data['message'] = "false";
                    $data['print'] = "Available! <i class='fa fa-check-square-o' aria-hidden='true'></i>";
                }
                echo json_encode($data);
            }else{
                $param_customer = array(
                    "select" => "customer_id",
                    "where" => "username = '$username'");
                $customer = count($this->obj_customer->get_search_row($param_customer));
                return $customer;
            }
        }

        public function crear_registro() {
                //SET TIMEZONE AMERICA
                date_default_timezone_set('America/Lima');
                //VALIDATION BACKEND
                $this->form_validation->set_rules('name', 'usuario', "required|trim");
                $this->form_validation->set_rules('password', 'name', 'required|trim');
                $this->form_validation->set_rules('email', 'address', 'required|trim');
                $this->form_validation->set_rules('ether', 'telefono', "required|trim");
                $this->form_validation->set_message('required', 'Campo requerido %s');

                if ($this->form_validation->run($this) == false) {
                    $data['print'] = "Debe llenar todos los campos";
                    $data['message'] = "false";
                }else{
                    //GET DATA $_POST
                    $username = $this->input->post('username');  
                    $password = $this->input->post('password');  
                    $name = $this->input->post('name');  
                    $last_name = $this->input->post('last_name');  
                    $email = $this->input->post('email');   
                    $ether = $this->input->post('ether');
                    
                    $value = $this->validate_username($username);
                    if($value == 1){
                        redirect('register/username'); 
                    }else{
                    
                    //INSERT INTO TABLE CUSTOMER
                    $data = array(
                        'username' => $username,
                        'password' => $password,
                        'first_name' => $name,
                        'last_name' => $last_name,
                        'email' => $email,
                        'ether_address' => $ether,
                        'active' => 0,
                        'status_value' => 1,
                        'created_at' => date("Y-m-d H:i:s"),
                    );
                    $customer_id = $this->obj_customer->insert($data);
                    
                    //ACTIVE SESSION
                    $data_customer_session['customer_id'] = $customer_id;
                    $data_customer_session['name'] = $name;
                    $data_customer_session['username'] = $username;
                    $data_customer_session['email'] = $email;
                    $data_customer_session['active'] = 0;
                    $data_customer_session['logged_customer'] = "TRUE";
                    $data_customer_session['status'] = 1;
                    $_SESSION['customer'] = $data_customer_session;
                    
                    //SEND MESSAGE BY EMAIL
                    $this->mensaje($email, $username, $password);
                    }
                }
       }

        public function mensaje($email,$username,$password){
        // Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
                    $mensaje = wordwrap("<html><body><h1>Welcome to EtherWhiteGold</h1><p>Welcome now you are part of 3T we are very happy that you have made the best decision at this time. </p><p>We are here to support you in everything you need. We leave your login information.</p><h3>Username: $username</h3><h3>Password: $password</h3></body></html>", 70, "\n", true);
                    //Titulo
                    $titulo = "Welcome to EtherWhiteGold";
                    //cabecera
                    $headers = "MIME-Version: 1.0\r\n"; 
                    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                    $headers .= "From: EtherWhiteGold:  < noreplay@etherwhitegold.io >\r\n";
                    //Enviamos el mensaje a tu_dirección_email 
                    $bool = mail("$email",$titulo,$mensaje,$headers);
                    redirect('backoffice');         
            
        }

}
