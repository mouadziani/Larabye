<?php

use Rakit\Validation\Validator;
use Tamtamchik\SimpleFlash\Flash;

class UserController extends Controller
{
	private $model = null;

	public function __construct()
	{
		$this->model = $this->model('User');
	}

	public function index()
	{ 
		$users = $this->model->getAll();
		return $this->view('users/index', ['users' => $users]);
	}

	public function create()
	{
		return $this->view('users/create');
	}

	public function save()
	{
		if(serverMethod() != 'POST') {
			redirect('user/create');
		}

		// Rules 
		$rules = [
			'username'         => 'required|min:3|max:20',
			'email'            => 'required|email',
			'password'         => 'required|min:6',
			'confirm_password' => 'required|same:password',
			'createdAt'        => 'required|date'
		];

		// validate request
		$validator = new Validator;
		$validation = $validator->validate($_POST, $rules);
		if($validation->fails()) {
			$errors = $validation->errors()->firstOfAll();
			return $this->view('users/create', ['errors' => $errors]);
		} else {
			$user = $this->model;
			$user->username = $_POST['username'];
			$user->email = $_POST['email'];
			$user->password = $_POST['password'];
			$user->createdAt = $_POST['createdAt'];
			if(!$user->save()) {
				Flash::message('Error !', 'error');
				redirect('user/index');
			}
			Flash::message('User ' . $_POST['username'] . ' was added successfully !', 'success');
			redirect('user/index'); 
		}
	}

	public function edit($id)
	{
		$user = $this->model->find($id);
		if($user) {
			return $this->view('users/edit', ['user' => $user]);
		}
		return redirect('user/index');
	}

	public function update($id)
	{
		if(serverMethod() != 'POST') {
			redirect('user/index');
		}

		// Rules 
		$rules = [
			'username'         => 'required|min:3|max:20',
			'email'            => 'required|email',
			'password'         => 'required|min:6',
			'confirm_password' => 'required|same:password',
			'createdAt'        => 'required|date'
		];

		// Validate request
		$validator = new Validator;
		$validation = $validator->validate($_POST, $rules);
		if($validation->fails()) {
			$errors = $validation->errors()->firstOfAll();
			$user = $this->model->find($id);
			if($user) {
				return $this->view('users/edit', ['user' => $user, 'errors' => $errors]);
			}
		} else {
			$user = $this->model;
			$user->id = $id; 
			$user->username = $_POST['username'];
			$user->email = $_POST['email'];
			$user->password = $_POST['password'];
			$user->createdAt = $_POST['createdAt'];

			if(!$user->update()) {
				Flash::message('Error !', 'error');
				redirect('user/index');
			}
			Flash::message('User ' . $_POST['username'] . ' was updated successfully !', 'success');
			redirect('user/index');
		}
	}

	public function delete($id)
	{
		if(serverMethod() != 'POST') {
			redirect('user/index');
		}

		if(!$this->model->delete($id)) {
			Flash::message('Error !', 'error');
			redirect('user/index');
		}
		Flash::message('User deleted successfully !', 'success');
		redirect('user/index'); 
	}

	public function search()
	{
		if(serverMethod() != 'POST' || !isset($_POST['keyword']) || empty($_POST['keyword'])) {
			redirect('user/index');
		}

		$users = $this->model->findByKeyWord($_POST['keyword']);
		return $this->view('users/index', ['users' => $users]);
	}
}