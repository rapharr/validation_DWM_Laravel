<?php

use Illuminate\Database\Seeder;

class PianosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pianos')->insert([
            'name' => Str::random(10),
            'color' => 'Black',
            'brand' => 'Schimmel',
            'description' => 'instrument parfait pour les passionnés',
        ]);
        DB::table('pianos')->insert([
            'name' => Str::random(10),
            'color' => 'Grey',
            'brand' => 'Schulze Pollman',
            'description' => 'parfait pour les virtuoses',
        ]);
        DB::table('pianos')->insert([
            'name' => Str::random(10),
            'color' => 'White',
            'brand' => 'Seiler',
            'description' => 'créer pour les débutants',
        ]);     
        DB::table('pianos')->insert([
            'name' => Str::random(10),
            'color' => 'Ivory',
            'brand' => 'Steinberg',
            'description' => 'pour les experts du classique',
        ]);         
        DB::table('pianos')->insert([
            'name' => Str::random(10),
            'color' => 'Blue',
            'brand' => 'Steingraeber',
            'description' => 'les mélomanes ne pourront pas lui résister',
        ]);         
                


    }
}
