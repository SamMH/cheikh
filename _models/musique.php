
<?php 
class Musique extends Model{
	var $table = "musiques";
	function getLast($num=1){
		return $this->find(array('limit'=>$num, 'order' => 'id DESC'));
	}
}