<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $batch = 100000;

        for($i = 0; $i <= $batch; $i++) {
            Doctor::create([
                'name' => Str::random(15)
            ]);
        }
    }
}
