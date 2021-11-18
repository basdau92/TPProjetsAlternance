<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ServiceSeed extends Seeder
{
    public function run()
    {
        $data = [
            [
                'servicename' => 'Maintenance',
                'description' => 'Les spécialistes du Hardware',
            ], 
            [
                'servicename' => 'Web Developer',
                'description' => 'Pour eux tout est code',
            ],
            [
                'servicename' => 'Web Designer',
                'description' => 'Y a que le CSS dans la vie',
            ],
            [
                'servicename' => 'Reférenceur',
                'description' => 'Regarde les Serps Google du matin au soir et du soir au matin',
            ],
        ];
        
        // Using Query Builder
        $this->db->table('service')->insertBatch($data);
    }
}
