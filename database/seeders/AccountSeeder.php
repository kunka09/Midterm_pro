<?php

namespace Database\Seeders;

use App\Models\Accounts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;


class AccountSeeder extends Seeder
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
                'accName'=>'Colantros Account',
                'invest'=>'9432.00',
                'date_started'=>'2020-07-04'
            ],
            [
                'AccName'=>'Cubero, Kevin Account',
                'invest'=>'54242.00n',
                'date_started'=>'2020-07-10',
            ],
            [
                'AccName'=>'Lupiba, Rafe Account',
                'invest'=>'12394.00',
                'date_started'=>'2020-09-04',
            ],
        ];
        foreach($data as $acc){
           \App\Models\Accounts::create($acc);
        }
    }
}
