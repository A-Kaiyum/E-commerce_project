<?php
class Users extends DbConnection{

	public $id;
	public $fullname;
	public $email;
	public $phone;
	public $password;
	public $address;
	public $user_type;
	public $status;
	public $created_at;
	public $updated_at;
	private $table_name = "users";

	public function __construct(){

		parent::__construct();

	}

	public function getUserByEmail($email){

      $sql = "SELECT * FROM ".$this->table_name." WHERE email='$email'";
      $query = $this->connect->query($sql);
      $data = $query->fetch(PDO::FETCH_ASSOC);
      return $data;

	}

	public function getUsers(){
        
      $sql = "SELECT * FROM ".$this->table_name;  
      $query = $this->connect->query($sql);
      $data = $query->fetchAll(PDO::FETCH_ASSOC);
      return $data ? $data : [];


	}

	public function getUserById($id){

		$sql = "SELECT * FROM ".$this->table_name." WHERE id= ? ";
		$query = $this->connect->prepare($sql);
		$query->execute([$id]);
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return $data ? $data : [];

	}

	public function save(){

		$sql  = "INSERT INTO ".$this->table_name." (`fullname`, `email`, `phone`, `password`, `address`, `user_type`) VALUES(?, ?, ?, ?, ?, ?)";
		$query = $this->connect->prepare($sql);

		$save = $query->execute([$this->fullname, $this->email, $this->phone, $this->password, $this->address, $this->user_type]);
        
		return $save ? 1: 0;

	}

	public function update(){

		$sql = "UPDATE ".$this->table_name." SET fullname=?, email=?, phone=?, address=?, user_type=?, status=? WHERE id=?";

		$query = $this->connect->prepare($sql);

		$status = $query->execute([$this->fullname, $this->email, $this->phone, $this->address, $this->user_type, $this->status, $this->id]);

		return $status ? true : false;

	}


	public function delete(){

		$sql = "DELETE FROM ".$this->table_name." WHERE id=?";
		$query = $this->connect->prepare($sql);
		$status = $query->execute([$this->id]);

		return $status;

	}


}


?>