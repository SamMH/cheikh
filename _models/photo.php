
<?php 
class Photo extends Model{
	var $table = "photos";
	function getLast($num=1){
		return $this->find(array('limit'=>$num, 'order' => 'id DESC'));
	}
}