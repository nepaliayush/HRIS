<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Human Resource',
            'email'=>'hr@hradmin.com',
            'password'=>bcrypt('@Demo123'),
        ])->assignRole('requests','hr');
    }
}
