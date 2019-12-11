<?php 

class About extends Controller{

    public function index ($nama = 'danis', $pekerjaan = 'programmer'){
        
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About Me';
        
        $this->view('templates/header',$data);
        $this->view('about/index',$data);
        $this->view('templates/footer');
        
    }

    public function page(){

        $data['judul'] = 'Home Page';

        $this->view('templates/header',$data);
        $this->view('about/page');
        $this->view('templates/footer');

    }
}