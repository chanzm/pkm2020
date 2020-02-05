<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model("calendar_model");   
        $this->load->model("model_data");
    }

    public function index(){
        $data['content'] = 'calendar/index1';
        $data['events'] = $this->model_data->get_all_events();
        $this->load->view('main/home',$data);
    }
}