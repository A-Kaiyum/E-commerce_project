<?php
class Products extends DbConnection{

	public $id;
	public $category_id;
	public $sku;
	public $name;
	public $description;
	public $brand_id;
	public $quantity;
	public $price;
	public $spacial_price;
	public $status;
	public $image;
	private $table_name = 'products';

	public function __construct(){

		parent::__construct();
	}

	public function getProducts(){
		$sql = "SELECT * FROM ".$this->table_name;
		$query = $this->connect->query($sql);
		$data = $query->fetchAll(PDO::FETCH_ASSOC);
		return $data ? $data : [];
	}

	public function getProductsByCategoryId($id){
		$sql = "SELECT * FROM ".$this->table_name." WHERE category_id=?";
		$query = $this->connect->prepare($sql);
		$query->execute([$id]);
		$data = $query->fetchAll(PDO::FETCH_ASSOC);
		return $data ? $data : [];
	}

	public function getProductWithCategory(){

		$sql = "SELECT p.*, c.name as category_name FROM ".$this->table_name." as p, categories as c WHERE p.category_id = c.id";

		$query = $this->connect->query($sql);
		$data = $query->fetchAll(PDO::FETCH_ASSOC);
		return $data ? $data : [];
	}
	
	public function getProductById($id){
        $sql = "SELECT * FROM ".$this->table_name." WHERE id=?";
		$query = $this->connect->prepare($sql);
		$query->execute([$id]);
		$data = $query->fetch(PDO::FETCH_ASSOC);
		return $data ? $data : [];
	}

	public function save(){

		$sql = "INSERT INTO ".$this->table_name." (category_id, sku, name, description, quantity, price, spacial_price, status, image) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$query = $this->connect->prepare($sql);

		$query->execute([$this->category_id, $this->sku, $this->name, $this->description, $this->quantity, $this->price, $this->spacial_price, $this->status, $this->image]);

		return $this->connect->lastInsertId();

	}

	public function update(){
		
		$sql = "UPDATE ".$this->table_name." SET category_id=?, sku=?,   name=?, description=?, quantity=?, price=? , spacial_price=?, status=? WHERE id=?";
		$query = $this->connect->prepare($sql);
	    $status = $query->execute([$this->category_id, $this->sku, $this->name, $this->description, $this->quantity, $this->price, $this->spacial_price, $this->status, $this->id]);

	    return $status ? true : false;
	}

	public function delete(){

		$sql = "DELETE FROM ".$this->table_name." WHERE id=?";
		$query = $this->connect->prepare($sql);
		$status = $query->execute([$this->id]);
		return $status;

	}

	public function uploadImage($FILES){
         
         $ext_array = ['jpg', 'png', 'jpeg', 'gif'];
         $ext = @end(explode('.', $FILES['image']['name']));
         $file_name = time().'_'.$FILES['image']['name'];

         if(in_array($ext, $ext_array))
	         {
	         	move_uploaded_file($FILES['image']['tmp_name'], "../uploads/product/".$file_name);

	         	return ['status'=>1, 'file_name'=>$file_name];

	         }
	         else{

	         	return ['status'=>0, 'file_name'=>$file_name];
	         }


	} 


	public function getTotalProduct(){
		 $sql = "SELECT COUNT(*) as total FROM ".$this->table_name;
		 $query = $this->connect->query($sql);
		 $data = $query->fetch(PDO::FETCH_ASSOC);
		 return $data['total'];
	}


}


?>