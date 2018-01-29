<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends CI_Controller {
    public function __construct() {
        parent::__construct();    
        $this->load->model("customer_model", "obj_customer");
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
		$this->load->view('forgot');
	}
        public function send()
	{
		$this->load->view('forgot');
	}
        public function notsend()
	{
		$this->load->view('forgot');
	}
        public function send_password(){
        $email = $this->input->post('email');  
        $params = array("select" =>"*",
                         "where" => "email = '$email' and status_value = 1");
        $obj_customer = $this->obj_customer->get_search_row($params);
        $password = $obj_customer->password;
        $email = $obj_customer->email;
        
        if (count($email)>0){
            // Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
                    $mensaje = wordwrap("<html><body><h1>Recover Password</h1><p>Welcome user, here I send you your password. </p><h3>Password: $password</h3></body></html>", 70, "\n", true);
                    //Titulo
                    $titulo = "Recover Password";
                    //cabecera
                    $headers = "MIME-Version: 1.0\r\n"; 
                    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                    $headers .= "From: EtherWhiteGold:  < noreplay@etherwhitegold.io >\r\n";
                    //Enviamos el mensaje a tu_dirección_email 
                    $bool = mail("$email",$titulo,$mensaje,$headers);
                    redirect('forgot_send'); 
        }else{
            redirect('forgot_notsend');
        }
    }
        
}
