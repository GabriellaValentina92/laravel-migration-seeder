<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TrainstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = config('trains');

        foreach($trains as $arrTrain){
            Train::create($arrTrain);
        }
    }
}
