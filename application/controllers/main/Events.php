<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_data');
	}
	
	public function index(){
		$this->load->view('main/home');
    }

    public function event_terdekat(){
        $data['content'] = 'main/events/event_terdekat';
        $this->load->view('main/home',$data);
	}
	
	public function event_favorit(){
        $data['content'] = 'main/events/event_terfavorit';
        $this->load->view('main/home',$data);
    }

    public function cari_event(){
        $data['content'] = 'main/events/cari_event_view';
        $this->load->view('main/home',$data);
    }

    public function detail_event($id_ev){
        $data['content'] = 'main/events/detail_event_view';
        $data['events'] = $this->model_data->get_detail_event($id_ev);
        $this->load->view('main/home',$data);
    }

}