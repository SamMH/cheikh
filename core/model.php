<?php

class Model {

	public $table;
	public $id;
	private $PDO;

	public function __construct(){
		$this->PDO = $this->connect();
	}

	public function connect(){
		try {
		    $db = new PDO('mysql:host=localhost;dbname=cheikhmc;', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

		    // Renvoi le fetch sous forme d'objet
		    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		    // Renvoi une erreur plus comprehensible
		    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		} catch (Exception $e) {
		    echo 'Impossible de se connecter à la base de donnée.';
		    echo '<strong>' . $e->getMessage() . '</strong>';
		    die();
		}
		return $db;
	}

	public function read($fields = null){
		if($fields==null) $fields = "*";
		$sql = "SELECT $fields FROM ".$this->table." WHERE id=".$this->id;
		$req =$this->PDO->query($sql);
		$data = $req->fetchAll();
		foreach ($data as $key => $value) {
			$this->$key = $value;
		}
	}

	public function save($data){

		$testImg = FALSE;

		if (isset($data['image_name']) && !empty($data['image_name'])) {
			$extension_upload = strtolower(  substr(  strrchr($data['image_name'], '.')  ,1)  );
			$image_tmp_upload = $data['image_tmp_name'];
			$registration_nb = ($this->PDO->query("SELECT * FROM ".$this->table)->rowCount()) + 1;

			$image_name = $registration_nb.'.'.$extension_upload;

			$data['image'] = $image_name;
			$testImg = TRUE;
		}

		unset($data['image_tmp_name']);
		unset($data['image_name']);

		

		$data['slug'] = $this->slugify($data['titre']);

		if(isset($data["id"]) && !empty($data["id"])){
			$sql = "UPDATE ".$this->table." SET ";
			foreach ($data as $k => $v) {
				if($k !="id"){
					$sql .= "$k='".htmlspecialchars($v, ENT_QUOTES)."',"; 
				}
			}
			$sql = substr($sql, 0, -1);
			$sql .="WHERE id=".$data["id"];
		}
		else{
			unset($data["id"]);
			$sql = "INSERT INTO ".$this->table." (";
			foreach ($data as $k => $v) {
				$sql .= "$k,"; 
			}
			$sql = substr($sql, 0, -1);
			$sql .= ") VALUES(";
			foreach ($data as $v) {
				$sql .= "'".htmlspecialchars($v, ENT_QUOTES)."',"; 
			}
			$sql = substr($sql, 0, -1);
			$sql .=")";
		}


		$this->PDO->exec($sql);
		
		if(!isset($data["id"])){
			$this->id = $this->PDO->lastInsertId();
		}else{
			$this->id = $data['id'];
		}

		if ($testImg) {
			$uplaod_dir = ROOT."views/uplaods/{$this->table}/";
			if(is_dir($uplaod_dir)){
				move_uploaded_file($image_tmp_upload, $uplaod_dir.$image_name);
			}
			else{
				mkdir($uplaod_dir,0777,TRUE);
				move_uploaded_file($image_tmp_upload, $uplaod_dir.$image_name);
			}
		}

		return $this->id;
	}

	public function find($data=array()){

		$conditions = "1=1";
		$fields = "*";
		$limit = "";
		$order = "id DESC";
		if(isset($data['conditions'])){ $conditions = $data['conditions']; }
		if(isset($data['fields'])){ $fields = $data['fields']; }
		if(isset($data['limit'])){ $limit = "LIMIT 0,".$data['limit']; }
		if(isset($data['order'])){ $order = $data['order']; }
		$sql = "SELECT $fields FROM ".$this->table." WHERE $conditions ORDER BY $order $limit";
		$req = $this->PDO->query($sql);
		$d = $req->fetchAll();
		return $d;

	}

	public function del($id=null){
		if($id==null){ $id = $this->id;}
		$extention = array('png', 'jpg', 'gif');
		$sql = "DELETE FROM ".$this->table." WHERE id=$id";
		$this->PDO->exec($sql);
	}

	static function load($name){

		require ("$name.php");
		return new $name();

	}

	public function slugify($string){ 
	// replace non letter or digits by -
	$string = preg_replace('~[^\\pL\d]+~u', '-', $string);

	// trim
	$string = trim($string, '-');

	// transliterate
	$string = iconv('utf-8', 'us-ascii//TRANSLIT', $string);

	// lowercase
	$string = strtolower($string);

	// remove unwanted characters
	$string = preg_replace('~[^-\w]+~', '', $string);

	if (empty($string))
	{
	return 'n-a';
	}

	return $string;
	}

}