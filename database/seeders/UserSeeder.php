<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'lname'=>'Colantro',
                'fname'=>'Jimro',
                'address'=>'Calape',
                'phone'=>'09197645550',
                'email'=>'jimrocolantro@gmail.com',
                'password'=>bcrypt('pass1234')
            ],
            [
                'lname'=>'Cubero',
                'fname'=>'Kevin',
                'address'=>'Calape,Ulbojan',
                'phone'=>'09197679550',
                'email'=>'KevCubero21@gmail.com',
                'password'=>bcrypt('pass1234')
            ],
            [
                'lname'=>'Lupiba',
                'fname'=>'Rafe',
                'address'=>'Cebu',
                'phone'=>'09197679550',
                'email'=>'RafeLupiba@gmail.com',
                'password'=>bcrypt('pass1234')
            ],
        ];
        foreach($data as $usr){
            \App\User::create($usr);
        }
    }
}
