<?php

class Prakiraan_ipk extends Controller{

  private $total_sks;
  private $total_ipk;
  private $nilai_akir;

  public function index(){

    $this->view('templates/header');
    $this->view('prakiraan/index');
    $this->view('templates/footer');

  }

  public function hitung_ipk(){

    $data['all_sks'] = $_POST['all_sks'];
    $data['ipk_now'] = $_POST['ipk_now'];

    $data['sks_now'] = $_POST['sks_now'];
    $data['ips_now'] = $_POST['ips_now'];

    $this->total_sks = $data['all_sks'] + $data['sks_now'];
    $data['total_sks'] = $this->total_sks;
    
    $this->total_ipk = $data['ipk_now'] + $data['ips_now'];

    $this->nilai_akir = ($data['ipk_now'] + $data['ips_now']) / 2;
    $data['akhir'] = $this->nilai_akir;

    $this->view('templates/header');
    $this->view('prakiraan/hasil_ipk',$data);
    $this->view('templates/footer');

  }

}
