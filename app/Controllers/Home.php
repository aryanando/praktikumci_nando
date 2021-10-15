<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        helper('date');
        $data = [
            "judul_halaman" => "Arya Sport - Home",
            "halaman_aktif" => "home"

        ];

        echo view('/template/header.php', $data);
        echo view('/template/beranda.php');
        echo view('/template/footer.php');
    }

    public function about()
    {
        helper('date');
        $data = [
            "judul_halaman" => "Arya Sport - Tentang Perusahaan",
            "halaman_aktif" => "about"
        ];

        echo view('/template/header.php', $data);
        echo view('/template/body.php');
        echo view('/template/footer.php');
    }

    public function kontak()
    {
        helper('date');
        $data = [
            "judul_halaman" => "Arya Sport - Tentang Perusahaan",
            "halaman_aktif" => "kontak"
        ];

        echo view('/template/header.php', $data);
        echo view('/template/kontak.php');
        echo view('/template/footer.php');
    }

    public function inibaru()
    {
        helper('date');
        $data = [
            "judul_halaman" => "Arya Sport - Baru",
            "halaman_aktif" => "home"

        ];

        echo view('/template/header.php', $data);
        echo view('/template/kontak2.php');
        echo view('/template/footer.php');
    }
}
