<?php

use Illuminate\Database\Seeder;

class AtoresTableSeeder extends Seeder {
    public function run() {
        // factory(App\Models\Ator::class, 5)->create();
        App\Models\Ator::insert(['nome' => 'Alban Lenoir']);
        App\Models\Ator::insert(['nome' => 'Mary well-Formed']);
        App\Models\Ator::insert(['nome' => 'Sedna D. Atabase']);
        App\Models\Ator::insert(['nome' => 'Mark UPlanguage']);
        App\Models\Ator::insert(['nome' => 'Antonio Banderas']);
    }
}
