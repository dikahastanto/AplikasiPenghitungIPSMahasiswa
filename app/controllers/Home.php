<?php

class Home extends Controller{

  public function index()  {

    $data['judul'] = 'Home';
    $this->view('templates/header' ,$data);
    $this->view('home/index',$data);
    $this->view('templates/footer');

  }

  public function hitung_ips(){

      if (isset($_POST['jenis_input'])) {
        $jenis = $_POST['jenis_input'];

        $jumlah = $_POST['jumlah_input'];




      $data['jumlah'] = $jumlah;
      $data['jenis'] = $jenis;


        $this->view('templates/header');
        $this->view('home/hitung_ips',$data);
        $this->view('templates/footer');
      }else {
        $this->view('templates/header');
        $this->view('home/gagal');
        $this->view('templates/footer');
      }

  }

}
