<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 33 ; $i++) {

            $news = new News();
            $news->Azienda = $faker->words(5, true);
            $news->Stazione_di_partenza = $faker->words(2, true);
            $news->Stazione_di_arrivo = $faker->words(2, true);
            $news->Orario_di_partenza = $faker->dateTime;
            $news->Orario_di_arrivo = $faker->dateTime;
            $news->Codice_Treno = $faker->randomNumber(6, true);
            $news->Numero_Carrozze = $faker->numberBetween(1, 20);
            $news->orario = $faker->boolean;
            $news->Cancellato = $faker->boolean;
            $news->data = $faker->date('Y-m-d');
            $news->image_url = $faker->imageUrl();
            $news->save();
        }
    }
}
