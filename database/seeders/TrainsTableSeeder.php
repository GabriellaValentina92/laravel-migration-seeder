<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;

class TrainstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //METODO CON ARRAY POPOLATO DA ME
        // $trains = config('trains'); (Spostato array nella cartella config->trains.php)

        // foreach($trains as $arrTrain){
        //     Train::create($arrTrain); //mass assignment
        // }

        //METODO FAKER
        for($i = 0; $i <= 50; $i++){
            Train::create([
                'azienda' => $faker->company(),
                'stazione_di_partenza'=> $faker->city(),
                'stazione_di_arrivo'=>$faker->city(),
                'orario_di_partenza'=> $faker->time(),
                'orario_di_arrivo'=> $faker->time(),
                'codice_treno'=> $faker->bothify('#?####'),
                'numero_carrozze'=> rand(1, 50),
                'in_orario'=> $faker-> boolean(),
                'cancellato'=> $faker-> boolean(),
            ]);
        }

    }
}
