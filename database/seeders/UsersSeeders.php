<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\srr;
use Illuminate\Support\Facades\Hash;


class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username'=>'Krishan',
            'email'=>'abc@gmail',
            'password'=>Hash::make('123')

        ]);
    }
}
