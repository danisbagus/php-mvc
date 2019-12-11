<?php 

class Mahasiswa_model{

    private $mhs = [

        [
            'nama' => 'Danis Bagus Setiawan',
            'nrp' => '00006',
            'email' => 'danis@gmail.com',
            'jurusan' => 'Teknik Informatika'
        ],
        [
            'nama' => 'Sholahudin',
            'nrp' => '00004',
            'email' => 'mufasy@gmail.com',
            'jurusan' => 'Teknik Otomasi'
        ]
    ];

    public function getAllMahasiswa(){
        return $this->mhs;
    }
}