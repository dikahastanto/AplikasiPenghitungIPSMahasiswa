<?php

class About extends Controller{
  public $pagetampil;

  public function index(){

    $this->view('templates/header');
    $this->view('about/index');
    $this->view('templates/footer');

  }

}
