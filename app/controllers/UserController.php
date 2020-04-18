<?php

class UserController extends BaseController {

	//Função que exibe a tela de lista de usuários cadastrados
	//passando a variável que contém todos os usuários do banco 
	public function index()
	{
		//Pegando todos os registros do model User (que representa a tabela 'users')
		$users = User::all();
	
		//Exibindo a view que está em 'views/users/index.blade.php'
		//Passando o array $users
		return View::make('users.index', [
			'users' => $users
		]);
	}

	//Função que exibe a tela com o formulário de cadastro de usuários
	public function create()
	{
		//Armazena um usuário 'vazio'
		$user = new User;

		//Armazena a rota para cadastro
		$action = url('users');

		//Armazena o tipo do método
		$method = 'POST';

		//Exibindo a view que está em 'views/users/create-edit.blade.php'
		return View::make('users.create-edit', [
			'user' => $user,
			'action' => $action,
			'method' => $method
		]);
	}

	//Função que cadastra o usuário no banco
	public function store()
	{
		//Armazenando todos os dados que estão vindo do formulário no array $input
		$input = Input::all();

		//Cadastrando um novo registro do model User que represanta a tabela 'users'
		//passando os dados que estão vindo do formulário
		User::create([
			'name' => $input['name'],
			'email' => $input['email'],
			'password' => $input['password']
		]);

		//Exibindo uma mensagem de sucesso
		return 'Usuário cadastrado com sucesso!';
	}

	//Função que exibe a tela de formulário de edição para editar o usuário
	//que tem o id passado por parâmetro
	public function edit($id) {

		//Buscando usuário pelo ID
		$user = User::find($id);

		//Url para atualizar usuário (ex: users/2 => atualizará o usuário que tiver o ID = 2)
		$action = url('users/'.$id);

		//Armazena o tipo do método
		$method = 'PUT';

		//Exibindo a view que está em 'views/users/create-edit.blade.php'
		return View::make('users.create-edit', [
			'user' => $user,
			'action' => $action,
			'method' => $method
		]);
	}

	public function update($id)
	{
		//Armazenando todos os dados que estão vindo do formulário no array $input
		$input = Input::all();

		//Buscando usuário pelo ID
		$user = User::find($id);

		//Atualizndo o usuário com os dados que estão vindo do formulário
		$user->update([
			'name' => $input['name'],
			'email' => $input['email'],
			'password' => $input['password']
		]);

		//Exibindo uma mensagem de sucesso
		return 'Usuário atualizado com sucesso';
	}

	public function destroy($id)
	{
		//Buscando usuário pelo ID
		$user = User::find($id);

		//Deletando o usuário
		$user->delete();

		//Exibindo uma mensagem de sucesso
		return 'Usuário deletado com sucesso';

	}

}
