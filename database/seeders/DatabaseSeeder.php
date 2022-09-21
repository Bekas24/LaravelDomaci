<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ClanSeeder;
use Database\Seeders\StudioSeeder;
use Database\Seeders\UciteljSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $cs = new ClanSeeder();
       $stud = new StudioSeeder();
       $uc = new UciteljSeeder();

       $cs->run();
       $stud->run();
       $uc->run();
    }
}
