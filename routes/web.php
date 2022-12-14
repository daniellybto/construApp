<?php

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-usuario', function (Request $request){

    // echo "aqui";
    // dd($request->all());


    Usuario::create([

        'id_tipo_usuario' => '1',
        'id_imagens' => '1',
        'id_cidade' => '1',
        'primeiro_nome' => $request->primeiro_nome,
        'sobrenome' => $request->sobrenome,
        'apelido' => $request->apelido,
        'data_nascimento' => $request->data_nascimento,
        'email' => $request->email,
        'senha' => $request->senha,
        'whatsapp' => $request->whatsapp,
        'status' => 'ativo',

    ]);

    echo "Usuário cadastrado !";
});
