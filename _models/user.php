
<?php 
class User extends Model{
	var $table = "user";
	function getLast($num=1){
		return $this->find(array('limit'=>$num, 'order' => 'id DESC'));
	}
}