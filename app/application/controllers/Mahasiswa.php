<?php 

class Mahasiswa extends Controller{

    public function index()
    {
        $data['judul'] = 'Mahasiswa Page';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();

        $this->view('templates/header',$data);
        $this->view('mahasiswa/index');
        $this->view('templates/footer');
    }

}