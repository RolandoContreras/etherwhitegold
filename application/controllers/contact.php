<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    public function __construct() {
        parent::__construct();     
        $this->load->model('comments_model','obj_comments');
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
		$this->load->view('contact');
	}
        public function send_messages(){
                $name = $this->input->post('name');  
                $email = $this->input->post('email');  
                $message = $this->input->post('message');  
                
                //validate background
                $this->form_validation->set_rules('name','name',"required|trim");
                $this->form_validation->set_rules('email','email','required|trim'); 
                $this->form_validation->set_rules('message','message','required');              
                $this->form_validation->set_message('required','Campo requerido %s');   

                if ($this->form_validation->run($this)== false){ 
                    $data['message'] = "false";
                    $data['print'] = "Complete todos los datos correctamente";
                }else{
                    //status_value 0 means (not read
                    $data = array(
                        'name' => $name,
                        'email' => $email,
                        'comment' => $message,
                        'date_comment' => date("Y-m-d H:i:s"),
                        'active' => 1,
                        'status_value' => 1,
                    );
                    $id = $this->obj_comments->insert($data);
                } 
                redirect('contact#contact'); 
        }   
}
