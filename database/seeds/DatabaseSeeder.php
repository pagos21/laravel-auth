<?php

use App\Employee;
use App\Location;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LocationSeeder::class,
            TaskSeeder::class,
            EmployeeSeeder::class
        ]);
    }
}
