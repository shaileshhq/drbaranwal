<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = User::first();
        if(!$data){
            $data = new User;
        }
        $data->user_type = 'admin';
        $data->name = 'Admin';
        $data->email = 'admin@yopmail.com';
        $data->password = bcrypt('123456789');
        $data->save();
    }
}
