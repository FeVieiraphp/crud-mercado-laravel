<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de usuários</h1>

    <!-- method: (GET ou POST) -->
    <!-- action: rota para onde os dados serão enviados ao clicar no botão -->
    <form method="POST" action="{{$action}}">

        @if($method == 'PUT')
            <input type="hidden" name="_method" value="{{$method}}">
        @endif

        <label>Nome</label>
        <input type="text" name="name" value="{{$user->name}}">
        <br><br>

        <label>E-mail</label>
        <input type="text" name="email" value="{{$user->email}}">
        <br><br>

        <label>Senha</label>
        <input type="text" name="password" value="{{$user->password}}">
        <br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>