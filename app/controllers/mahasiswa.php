<?php

class Mahasiswa extends Controller{
private $insert_db;

  public function index($page=1){

    $data_per_page = 3;

    $hal = isset($page) ? (int)$page : 1;
    $posisi = ($hal > 1) ? ($hal * $data_per_page) - $data_per_page :0;


    if (isset($page)) {
      $nopage = $page;
    }else {
      $nopage = 1;
    }

    $offset = ($nopage-1)*$data_per_page;


    $this->insert_db = new Database;

    $data['judul'] = "Data Mahasiswa";
    $data['mhs'] = $this->insert_db->query('SELECT * FROM mahasiswa LIMIT ' . $offset . ',' . $data_per_page);
    $data['mhs'] = $this->insert_db->execute();
    $data['mhs'] = $this->insert_db->resultSet();

    $this->insert_db->query('SELECT COUNT(*) AS jumlah FROM mahasiswa');
    $this->insert_db->execute();
    $data['jumlah'] = $this->insert_db->single();

    $this->view('templates/header',$data);
    $this->view('mahasiswa/index',$data);
    $this->view('templates/footer');

  }

  public function detailmhs($id){

    $data['judul'] = "Detail Mahasiswa";
    $data['mhs'] = $this->model('Mahasiswa_model')->get_mahasiswa_by_id($id);
    $this->view('templates/header',$data);
    $this->view('mahasiswa/detail',$data);
    $this->view('templates/footer');

  }

  public function update_proses_mahasiswa($id){

    $data['judul'] = "Berhasil Update";

    $this->insert_db = new Database;
    $this->insert_db->query('UPDATE mahasiswa SET nama=:nama,npm=:npm,email=:email,jurusan=:jurusan WHERE id=:id');
    $this->insert_db->bind('id' , $id);
    $this->insert_db->bind('nama' , $_POST['nama']);
    $this->insert_db->bind('npm' , $_POST['npm']);
    $this->insert_db->bind('email' , $_POST['email']);
    $this->insert_db->bind('jurusan' , $_POST['jurusan']);

    $this->insert_db->execute();

      $data['judul'] = "Update Data Mahasiswa";
      $this->view('mahasiswa/berhasil_update');

  }

  public function form_insert_mahasiswa(){

    $data['judul'] = "Insert Data Mahasiswa";
    $this->view('templates/header',$data);
    $this->view('mahasiswa/form_insert_mahasiswa');
    $this->view('templates/footer');

  }

  public function insert_proses_mahasiswa(){



    $this->insert_db = new Database;
    $this->insert_db->query('INSERT INTO mahasiswa (nama,npm,email,jurusan) VALUES (:nama,:npm,:email,:jurusan)');
    $this->insert_db->bind('nama' , $_POST['nama']);
    $this->insert_db->bind('npm' , $_POST['npm']);
    $this->insert_db->bind('email' , $_POST['email']);
    $this->insert_db->bind('jurusan' , $_POST['jurusan']);

    $this->insert_db->execute();

      $data['judul'] = "Insert Data Mahasiswa";
      $this->view('templates/header',$data);
      $this->view('mahasiswa/berhasil_input');
      $this->view('templates/footer');


  }

  public function delete_mahasiswa($id){

    $this->insert_db = new Database;
    $this->insert_db->query('DELETE FROM mahasiswa WHERE id=:id');
    $this->insert_db->bind('id' , $id);

    $this->insert_db->execute();

    $this->index();

  }

}
