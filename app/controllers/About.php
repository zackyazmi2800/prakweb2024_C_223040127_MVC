<?php 

class About {
    public function index($nama = 'Zack', $pekerjaan = 'Mahasiswa') 
    {
        echo "Halo, Nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page() 
    {
        echo 'About/page';
    }
}

?>