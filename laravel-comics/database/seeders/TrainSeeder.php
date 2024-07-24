<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tests = [
            [
                "Azienda" => "Trenitalia",
                "Stazione_di_arrivo" => "Milano Centrale",
                "Stazione_di_partenza" => "Roma Termini",
                "Orario_di_arrivo" => "10:30:00",
                "Orario_di_partenza" => "06:00:00",
                "Codice_Treno" => "IC1234",
                "Numero_Carrozze" => 8,
                "orario" => "10:30:00",
                "Cancellato" => false,
                "data" => "2024-07-24",
                "image_url" => "https://images.pexels.com/photos/164634/pexels-photo-164634.jpeg"
            ],
            [
                "Azienda" => "Italo",
                "Stazione_di_arrivo" => "Torino Porta Nuova",
                "Stazione_di_partenza" => "Napoli Centrale",
                "Orario_di_arrivo" => "15:30:00",
                "Orario_di_partenza" => "10:00:00",
                "Codice_Treno" => "IT5678",
                "Numero_Carrozze" => 10,
                "orario" => "15:30:00",
                "Cancellato" => false,
                "data" => "2024-07-24",
                "image_url" => "https://images.pexels.com/photos/1168474/pexels-photo-1168474.jpeg"
            ]
        ];
        foreach ($tests as $test) {
            $train = new Train();
            $train->Azienda = $test['Azienda'];
            $train->Stazione_di_partenza = $test['Stazione_di_partenza'];
            $train->Stazione_di_arrivo = $test['Stazione_di_arrivo'];
            $train->Orario_di_partenza = $test['Orario_di_partenza'];
            $train->Orario_di_arrivo = $test['Orario_di_arrivo'];
            $train->Codice_Treno = $test['Codice_Treno'];
            $train->Numero_Carrozze = $test['Numero_Carrozze'];
            $train->orario = $test['orario'];
            $train->Cancellato = $test['Cancellato'];
            $train->data = $test['data'];
            $train->image_url = $test['image_url'];
            $train->save();
        }
        }
    }
