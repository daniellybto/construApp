<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastrar Usuário - ConstruApp</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body >

        <form action="cadastrar-usuario" method="POST">
            @csrf
            <label for="">Nome:</label>
            <input type="text" placeholder="insira o primeiro nome" name="primeiro_nome" >
            <br>
            <br>
            <label for="">Sobre nome:</label>
            <input type="text" placeholder="insira o sobrenome" name="sobrenome" >
            <br>
            <br>

            <label for="">Apelido:</label>
            <input type="text" placeholder="insira o apelido" name="apelido" >
            <br>
            <br>

            <label for="">Data de Nascimento:</label>
            <input type="date" name="data_nascimento">
            <br>
            <br>

            <label for="">Email:</label>
            <input type="text" placeholder="insira o email" name="email" >
            <br>
            <br>


            <label for="">Senha:</label>
            <input type="password" placeholder="insira a senha" name="senha" >
            <br>
            <br>

            <label for="">Whatsapp:</label>
            <input type="text" placeholder="insira seu whatsapp" name="whatsapp" >
            <br>
            <br>

           <button>Cadastrar</button>
        </form>

    </body>
</html>
