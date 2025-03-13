<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ModulesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'modulename'    => 'Dashboard',
                'description'   => 'A delicious food item, served with syrup and butter',
                'release_date'  => '2023-01-01',
            ],
            [
                'modulename'    => 'Ecommerce',
                'description'   => 'User documentation for software tools',
                'release_date'  => '2023-02-01',
            ],
            [
                'modulename'    => 'Pancake',
                'description'   => 'Device Test Report system',
                'release_date'  => '2023-03-01',
            ],
            [
                'modulename'    => 'Board',
                'description'   => 'Device Test Report system',
                'release_date'  => '2023-03-01',
            ],
            [
                'modulename'    => 'Finance',
                'description'   => 'Device Test Report system',
                'release_date'  => '2023-03-01',
            ],
            [
                'modulename'    => 'Logistics and Inventory',
                'description'   => 'Device Test Report system',
                'release_date'  => '2023-03-01',
            ],
            [
                'modulename'    => 'Human resource',
                'description'   => 'Device Test Report system',
                'release_date'  => '2023-03-01',
            ],
            [
                'modulename'    => 'User Management',
                'description'   => 'Device Test Report system',
                'release_date'  => '2023-03-01',
            ],
            [
                'modulename'    => 'DTR',
                'description'   => 'Device Test Report system',
                'release_date'  => '2023-03-01',
            ],
        ];
        
        $this->db->table('modules')->insertBatch($data);
    }
}
