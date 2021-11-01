<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataBarang extends Seeder
{
    public function run()
    {
        $data = [
            'barang_title'    => 'Addidas',
            'barang_description'    => 'Addidas Ori',
            'barang_harga'    => '2000000',
            'barang_stok'    => '99'
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('barang')->insert($data);
    }
}
