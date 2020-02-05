<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_login');
	}
	
	public function index(){
		// $data['content'] = 'tampilan_utama';
		//$data["produk"]=$this->model_data->getBarang();
		$this->load->view('tampilan_awal');
		//$this->load->view('tampilan_utama');
	}

	public function klik_login(){
		$this->load->view('view_login');
	}

	public function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run())
		{
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$this->load->model('model_login');

			if($this->model_login->can_login($email,$password))
			{
				$session_data = array(
					'id_ses' => $this->model_login->getID($email),
					'email' => $email,
					'password' => ($password),
					'status' => "sudahlogin"
					);
				$this->session->set_userdata($session_data);
				// var_dump($session_data);
				redirect(base_url() . 'login/enter');
			}
			else{
				$this->session->set_flashdata('error','Invalid Email or Password');
				$this->load->view('view_login');
			}
		}
		else{
			// $this->index();
			$this->session->set_flashdata('error','Invalid Email or Password');
				$this->load->view('view_login');
		}

	}
	
	public function enter(){
  		$email = $this->session->userdata('email');
   		if($email==""){
   		 redirect('login/index');
   		}
   		else{
    		redirect('main/Home');
  		}
 	}
	public function logout(){
		$this->session->unset_userdata('email');
		redirect(base_url('login/index'));
	}

}

