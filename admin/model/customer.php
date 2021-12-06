<?php
class Customer extends DbConnection{

	public $id;
	public $name;
	public $phone;
	public $email;
	public $company;
	public $address;
	public $city;
	public $postcode;
	public $password;
	public $status;
	private $table_name = 'customers';

	public function __construct(){

		parent::__construct();
	}

	public function getCustomers(){
		$sql = "SELECT * FROM ".$this->table_name;
		$query = $this->connect->query($sql);
		$data = $query->fetchAll(PDO::FETCH_ASSOC);
		return $data ? $data : [];
	}

	public function getCustomerById($id){
        $sql = "SELECT * FROM ".$this->table_name." WHERE id=?";
		$query = $this->connect->prepare($sql);
		$query->execute([$id]);
		$data = $query->fetch(PDO::FETCH_ASSOC);
		return $data ? $data : [];
	}

	public function getCustomerByEmail($email){
        $sql = "SELECT * FROM ".$this->table_name." WHERE email=?";
		$query = $this->connect->prepare($sql);
		$query->execute([$email]);
		$data = $query->fetch(PDO::FETCH_ASSOC);
		return $data ? $data : [];
	}

	public function save(){

		$sql = "INSERT INTO ".$this->table_name." (name, email, phone, company, address, city, postcode, password) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
		$query = $this->connect->prepare($sql);

		$query->execute([$this->name, $this->email, $this->phone, $this->company, $this->address, $this->city, $this->postcode, $this->password]);

		return $this->connect->lastInsertId();

	}

	public function update(){
		
		$sql = "UPDATE ".$this->table_name." SET name=?, email=?,   phone=?, company=?, address=?, city=? , postcode=?, status=? WHERE id=?";
		$query = $this->connect->prepare($sql);
	    $query->execute([$this->name, $this->email, $this->phone, $this->company, $this->address, $this->city, $this->postcode, $this->status, $this->id]);

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