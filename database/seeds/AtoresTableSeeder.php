<?php

use Illuminate\Database\Seeder;

class AtoresTableSeeder extends Seeder {
    public function run() {
        factory(App\Models\Ator::class, 5)->create();
    }
}
