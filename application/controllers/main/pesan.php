<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('model_data');
        $this->load->helper('string');
    }

	public function pesan($id_ev)
	{
        $data['event']= $this->model_data->get_detail_event($id_ev);
        $data['content'] = 'main/pesan/pesan_tiket';
        $this->load->view('main/home',$data);
    }

    public function buy($id_ev)
    {   
            $harga_tiket = $this->input->post('harga_tiket');
            $jumlah_tiket = $this->input->post('jumlah_tiket');
            $id_pemesan = $this->session->userdata('id_ses');
            $order_number = random_string('numeric',8);
            $data=array(
            "id_ev"=>$id_ev,
            "id_pemesan"=> $id_pemesan,
            "harga"=>$harga_tiket,
            "jumlah_tiket" => $jumlah_tiket,
            "jumlah_bayar"=>$jumlah_tiket*$harga_tiket,
            "order_number"=>$order_number,
            "status"=>"BELUM CHECKOUT"
        );
            // var_dump($data);
        $this->model_data->tambah_pemesanan($data);
        redirect('main/pesan/nyari_id_pesan/'.$id_ev.'/'.$id_pemesan.'/'.$order_number.'');
        // $data['content'] = 'main/pesan/buy_tiket';
        // $this->load->view('main/home',$data);
    }

    public function nyari_id_pesan($id_ev,$id_pemesan,$order_number)
    {
        $data['content'] = 'main/pesan/buy_tiket';
        // $data['content'] = 'main/pesan/berhasil';
        $data['checkout']=$this->model_data->get_pesanan($id_ev,$id_pemesan,$order_number);
        $this->load->view('main/home',$data);
        //var_dump($rinci);
    }

    public function checkout($id_pesan)
    {
        $this->model_data->update_status_checkout($id_pesan);
        $data['checkout']=$this->model_data->get_pesanan_by_id($id_pesan);
        $data['user']=$this->model_data->get_data_user($this->session->userdata('id_ses'));
        $data['content'] = 'main/pesan/checkout_tiket';
        $this->load->view('main/home',$data);
    }
    

    public function pembayaran($id_pesan)
    {
        $data['checkout']=$this->model_data->get_pesanan_by_id($id_pesan);
        $data['content'] = 'main/pesan/view_pembayaran';
        $this->load->view('main/home',$data);
    }

    public function detail_bayar($id_pesan)
    {
        $jenis = $this->input->post('jenis_pembayaran');
        // var_dump($jenis);
        $this->model_data->update_jenis_pembayaran($id_pesan,$jenis);
        $data['checkout']=$this->model_data->get_pesanan_by_id($id_pesan);
        $data['content'] = 'main/pesan/detil_bayar';
        $this->load->view('main/home',$data);
    }

    public function pembayaran_berhasil()
    {
        $data['content'] = 'main/pesan/berhasil_dibayar';
        $this->load->view('main/home',$data);
    }

}

