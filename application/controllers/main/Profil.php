<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_data');
	}
	
	public function index(){
		$data['content'] = 'main/profil_akun';
		$data['akun']=$this->model_data->getAkun($this->session->userdata('id_ses'));
		$data['events']=$this->model_data->get_event_by_id_pengguna($this->session->userdata('id_ses'));
		$this->load->view('main/home',$data);
		// var_dump($data);
		//$this->load->view('tampilan_utama');
    }

}