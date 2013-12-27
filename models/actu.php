
<?php 
class Actu extends Model{
	var $table = "actus";
	function getLast($num=1){
		return $this->find(array('limit'=>$num, 'order' => 'id DESC'));
	}
}