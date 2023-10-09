<?php
class coba1 extends CI_controller
{
    public function index ()
    {
       echo "<h1>selamat ulang tahu mail syuhudi<h1>";
    }

    public function biodata($nama=null,$nim=null)
    {
        //echo "Nama : $Nama<br>";
        //echo "Nim  : $Nim<br>";
        
        $data['nama']=$nama;
        $data['nim']=$nim;
        $this->load->view('v_coba1',$data);
    }
} 