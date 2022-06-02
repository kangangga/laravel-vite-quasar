<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataBranch = [
            [
                'branch_code' => 101,
                'name' => 'JagadDistributor',
                'email' => 'admin@jagad.com',
                'phone' => '0812341234',
                'zip' => 1621,
                'city' => 'Jakarta',
                'address' => 'Jl. Jagad',
            ],
            [
                'branch_code' => 102,
                'name' => 'JagadDigitalindo',
                'email' => 'admin@jagadindo.com',
                'phone' => '0812341232',
                'zip' => 1622,
                'city' => 'Bogor',
                'address' => 'Jl. Metland',
            ]
        ];


        foreach ($dataBranch as $value) {

            $branch = \App\Models\Branch::create($value);

            if ($value['branch_code'] == 101) {
                \App\Models\User::create([
                    'branch_id' => $branch->id,
                    'name' => 'Santoso Santuy',
                    'phone' => '0812341234',
                    'email' => 'santuy@santuy.com',
                    'address' => 'Jl. Jagad',
                    'password' => bcrypt('123123123'),
                ]);
            } else if ($value['branch_code'] == 102) {
                \App\Models\User::create([
                    'branch_id' => $branch->id,
                    'name' => 'Masgun Santuy',
                    'phone' => '0812341232',
                    'email' => 'masgun@santuy.com',
                    'address' => 'Jl. Gandoang',
                    'password' => bcrypt('123123123'),
                ]);
            }
        }
    }
}
