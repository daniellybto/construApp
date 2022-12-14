<?php

namespace Database\Seeders;

use App\Models\Imagem;
use Illuminate\Database\Seeder;

class ImagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Imagem::create([
            'src' => './..',
        ]);
    }
}
