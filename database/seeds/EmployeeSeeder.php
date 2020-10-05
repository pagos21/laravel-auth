<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Location;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Employee::class, 75)
      -> make()
      -> each(function($empl){
        $loc = Location::inRandomOrder() -> first();
        $empl -> location() -> associate($loc);
        $empl -> save();
      });
    }
}
