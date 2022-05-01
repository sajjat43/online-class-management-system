<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

        'name'=>'admin',
        'user_id'=>'nothing',
        'gender'=>'male',
        'mobile'=>'01725104909',
        'email'=>'admin@gmail.com',
        'password'=>bcrypt('1234'),
        'status'=>'yes',
        'role'=>'admin',
        'address'=>'uttara',
        'image'=>'avatar-01.jpg',
        
        ]);
    }
}
