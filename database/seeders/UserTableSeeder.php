<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $data = [
            [
                'name'=>'lms',
                'email'=>'info@user.com',
                'password'=>bcrypt('secret'),
                
            ],
            
            ];
        \App\Models\User::insert($data);
    }
}
