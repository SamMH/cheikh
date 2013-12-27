
<?php 
class Presses extends Model{
	var $table = "presses";
	function getLast($num=1){
		return $this->find(array('limit'=>$num, 'order' => 'id DESC'));
	}
}