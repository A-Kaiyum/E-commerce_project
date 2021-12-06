<?php
class Category extends DbConnection{

	public $id;
	public $name;
	public $image;
	public $parent_id;
	public $status;
	private $table_name = 'categories';

	public function __construct(){

		parent::__construct();
	}

	public function getCategories(){
		$sql = "SELECT * FROM ".$this->table_name;
		$query = $this->connect->query($sql);
		$data = $query->fetchAll(PDO::FETCH_ASSOC);
		return $data ? $data : [];
	}

	public function getCategoriesByParentId($id){
		 $sql = "SELECT * FROM ".$this->table_name." WHERE parent_id=?";
		$query = $this->connect->prepare($sql);
		$query->execute([$id]);
		$data = $query->fetchAll(PDO::FETCH_ASSOC);
		return $data ? $data : [];
	}

	public function getCategoriesWithParentName(){

		$sql = "SELECT ".$this->table_name.".*, c1.name as `parent_name` FROM ".$this->table_name." LEFT JOIN ".$this->table_name." as c1 ON c1.id = categories.parent_id";
		$query = $this->connect->query($sql);
		$data = $query->fetchAll(PDO::FETCH_ASSOC);
		return $data ? $data : [];
	}
	
	public function getCategoryById($id){
        $sql = "SELECT * FROM ".$this->table_name." WHERE id=?";
		$query = $this->connect->prepare($sql);
		$query->execute([$id]);
		$data = $query->fetch(PDO::FETCH_ASSOC);
		return $data ? $data : [];
	}

	public function save(){

		$sql = "INSERT INTO ".$this->table_name." (name, parent_id, image, status) VALUES(?, ?, ?, ?)";
		$query = $this->connect->prepare($sql);
		$query->execute([$this->name, $this->parent_id, $this->image, $this->status]);

		return $this->connect->lastInsertId();

	}

	public function update(){
		$sql = "UPDATE ".$this->table_name." SET  name=?, parent_id=?, status=? WHERE id=?";
		$query = $this->connect->prepare($sql);
	    $status = $query->execute([$this->name, $this->parent_id, $this->status, $this->id]);

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
	         	move_uploaded_file($FILES['image']['tmp_name'], "../uploads/".$file_name);

	         	return ['status'=>1, 'file_name'=>$file_name];

	         }
	         else{

	         	return ['status'=>0, 'file_name'=>$file_name];
	         }


	} 


}


?>