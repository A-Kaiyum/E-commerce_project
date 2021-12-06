<?php
class Setting extends DbConnection{

	public $address;
	public $email;
	public $phone;
	public $support_phone;
	public $logo;
	public $facebook_id;
	public $google_id;
	public $skype_id;
	public $tweeter_id;
	public $youtube_id;
	private $table_name = 'setting';

	public function __construct(){

		parent::__construct();
	}

	
	public function getSetting(){
        $sql = "SELECT * FROM ".$this->table_name;
		$query = $this->connect->query($sql);
		$data = $query->fetch(PDO::FETCH_ASSOC);
		return $data ? $data : [];
	}


	public function update(){
		$sql = "UPDATE ".$this->table_name." SET  address=?, email=?, phone=?, support_phone=?, logo=?, facebook_id=?, google_id=?, tweeter_id=?, skype_id=?, youtube_id=?";
		$query = $this->connect->prepare($sql);
	    $status = $query->execute([$this->name, $this->parent_id, $this->status, $this->id]);

	    return $status ? true : false;
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