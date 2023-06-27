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
        $trains = [
            [
                'azienda' => 'Trenitalia',
                'stazione_di_partenza'=> 'Catania',
                'stazione_di_arrivo'=>'Palermo',
                'orario_di_partenza'=> '15.00',
                'orario_di_arrivo'=> '18.30',
                'codice_treno'=> 'AF34679',
                'numero_carrozze'=> 20,
                'in_orario'=> true,
                'cancellato'=> false,
            ],

            [
                'azienda' => 'italo',
                'stazione_di_partenza'=> 'Milano',
                'stazione_di_arrivo'=>'Roma',
                'orario_di_partenza'=> '0700',
                'orario_di_arrivo'=> '1130',
                'codice_treno'=> 'A38779',
                'numero_carrozze'=> 15,
                'in_orario'=> false,
                'cancellato'=> true,
            ],
        ];

        foreach($trains as $arrTrain){
            Train::create($arrTrain);
        }
    }
}
