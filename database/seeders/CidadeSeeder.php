<?php

namespace Database\Seeders;

use App\Models\Cidade;
use Illuminate\Database\Seeder;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cidade::create([
            'id_estado' => '1',
            'nome' => 'Paraiso do Tocantins',
        ]);
    }
}
