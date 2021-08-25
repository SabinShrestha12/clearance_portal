<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('info')->insert([
        	'name'=>Str::random(10),
        	'email'=>Str::random(10).'@gmail.com',
        	'password'=>Str::random(10)
        ]);

        DB::table('flights')->insert([
        	'fname'=>Str::random(10),
        	'lname'=>Str::random(10)
        ]);
    }
}
