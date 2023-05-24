<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bscs;
use App\Models\Dani;
use faker\Factory as faker;

class BscsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // $faker = faker::create();
        // for($i=1;$i<=50;$i++){

        // $student =new bscs;
        // $student->name=$faker->name();
        // $student->fathername=$faker->lastName();
        // $student->sname=$faker->name();
        // $student->phone=$faker->phoneNumber();
        // $student->password=$faker->password();
        // $student->save();
        // }


        // ......................... factory ..............

        Bscs::factory(5)->create();
        // Dani::factory(30)->create();
    }
}
