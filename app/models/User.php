<?php 

class User
{
	private $table = 'users';
	public $id;
	public $username;
	public $email;
	public $password;
	public $createdAt;

	public function __construct($id = null, $username = null, $email = null, $password = null, $createdAt = null)
	{
		$this->id = $id;
		$this->username = $username;
		$this->email = $email;
		$this->password = $password;
		$this->createdAt = $createdAt;
	}

	public function getAll()
	{
		$sql = "SELECT * FROM {$this->table}";
		return getDatas($sql);
	}

	public function find($id)
	{
		$sql = "SELECT * FROM {$this->table} WHERE id = :id";
		$result = getData($sql, ['id' => $id]);
		if($result) {
			return new static($result->id, $result->username, $result->email, $result->password, $result->created_at);
		}
		return null;
	}

	public function save()
	{
		$sql = "INSERT INTO {$this->table} (username, email, password, created_at) VALUES (:username, :email, :password, :created_at)";
		$params = [ 'username' => $this->username, 'email' => $this->email, 'password' => $this->password, 'created_at' => $this->createdAt];
		return setData($sql, $params);
	}

	public function update()
	{
		$sql = "UPDATE {$this->table} SET username = :username, email = :email, password = :password, created_at = :created_at WHERE id = :id";
		$params = ['id' => $this->id, 'username' => $this->username, 'email' => $this->email, 'password' => $this->password, 'created_at' => $this->createdAt];
		return setData($sql, $params);
	}

	public function delete($id)
	{
		$sql = "DELETE FROM {$this->table} WHERE id = :id";
		return setData($sql, ['id' => $id]);
	}
	
	public function findByKeyWord($keyword)
	{
		$sql = "SELECT * FROM {$this->table} WHERE username LIKE concat('%', :username, '%') OR email LIKE concat('%', :email, '%')";
		return getDatas($sql, ['username' => $keyword, 'email' => $keyword]);
	}
} 