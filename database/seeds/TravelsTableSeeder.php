<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;


class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++){
            $new_Travel = new Travel();
            $new_Travel->citta = $faker->city();
            $new_Travel->nazione = $faker->country();
            $new_Travel->struttura = $faker->address();
            $new_Travel->partenza = $faker->dateTimeThisYear();
            $new_Travel->durata = $faker->numberBetween(1, 30);
            $new_Travel->prezzo = $faker->randomFloat(2, 20, 10000);
            $new_Travel->descrizione = $faker->paragraph();
            $new_Travel->save();
        }
    }
}
