<?php
class latihan1 extends CI_controller
{
    public function index()
    {
        echo "Selamat Datang .. Selamat belajar Web programming";
        
    }

     public function penjumlahan($nil1, $nil2)
    {
        $this->load->model('model_latihan1');

        $this->load->model('model_latihan1');
        $data['nilai1'] = $nil1;
        $data['nilai2'] = $nil2;
        $data['hasil'] = $this->model_latihan1->jumlah($nil1, $nil2);

        $this->load->view('view-latihan1', $data);
       

    }
}