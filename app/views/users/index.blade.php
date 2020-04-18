<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Usuários</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th colspan="2">Ações</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{url('users/'.$user->id.'/edit')}}">Editar</a>
                </td>
                <td>
                    <form method="POST" action="{{url('users/'.$user->id)}}">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit">Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <br>
    <a href="{{url('users/create')}}">Cadastrar novo</a>
</body>
</html>