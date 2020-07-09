<?php

use Illuminate\Database\Seeder;

class GenerosTableSeeder extends Seeder  {
    public function run() {
        // factory(App\Models\Genero::class, 5)->create();
        App\Models\Genero::insert(['genero' => 'Aventura']);
        App\Models\Genero::insert(['genero' => 'Documentário']);
    }
}
