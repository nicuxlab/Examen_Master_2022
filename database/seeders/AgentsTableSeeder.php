<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AgentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,10) as $index) {
            $note1 = $faker->numberBetween(0, 5);
            $note2 = $faker->numberBetween(0, 5);
            $note3 = $faker->numberBetween(0, 5);
            $note4 = $faker->numberBetween(0, 5);
        
            DB::table('agents')->insert([
                'identity' => $faker->randomElement(['Agent comptable','Agent de service', 'Directeur des Ressources Humaines', 'Agent de renseignement', 'Agent commercial']),
                'matricule' => $faker->unique()->numerify('######'),
                'nom' => $faker->lastName,
                'prenom' => $faker->firstName,
                'grade' => $faker->jobTitle,
                'notation' => $faker->boolean,
                'annee' => $faker->year,
                'trimestre' => 'trimestre ' . $faker->numberBetween(1, 4),
                'absence' => $faker->numberBetween(0, 20),
                'nb_jour_travail' => $faker->numberBetween(0, 90),
                'note1' => $note1,
                'note2' => $note2,
                'note3' => $note3,
                'note4' => $note4,
                'appreciation' => $faker->text,
                'note_total' => $note1 + $note2 + $note3 + $note4,
                'pdf' => null,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),            
            ]);
        }
    }
}
