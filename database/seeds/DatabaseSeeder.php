<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder {
    public function run() {
        $this->call(FilmesTableSeeder::class);
        $this->call(GenerosTableSeeder::class);
        $this->call(AtoresTableSeeder::class);

        DB::table('filmegeneros')->insert(['filme_id' => 1, 'genero_id' => 1]);
        DB::table('filmegeneros')->insert(['filme_id' => 1, 'genero_id' => 2]);
        DB::table('filmegeneros')->insert(['filme_id' => 2, 'genero_id' => 1]);
        DB::table('filmegeneros')->insert(['filme_id' => 2, 'genero_id' => 2]);
        DB::table('filmegeneros')->insert(['filme_id' => 3, 'genero_id' => 1]);
        DB::table('filmegeneros')->insert(['filme_id' => 3, 'genero_id' => 2]);
        DB::table('filmegeneros')->insert(['filme_id' => 4, 'genero_id' => 1]);

        DB::table('filmeatores')->insert(['filme_id' => 1, 'ator_id' => 1]);
        DB::table('filmeatores')->insert(['filme_id' => 1, 'ator_id' => 2]);
        DB::table('filmeatores')->insert(['filme_id' => 2, 'ator_id' => 3]);
        DB::table('filmeatores')->insert(['filme_id' => 3, 'ator_id' => 4]);
        DB::table('filmeatores')->insert(['filme_id' => 4, 'ator_id' => 5]);
    }
}
