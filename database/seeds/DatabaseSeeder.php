<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run() {
        $this->call(AtoresTableSeeder::class);
        $this->call(GenerosTableSeeder::class);
    }
}
