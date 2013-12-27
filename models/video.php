
<?php 
class Video extends Model{
	var $table = "videos";
	function getLast($num=1){
		return $this->find(array('limit'=>$num, 'order' => 'id DESC'));
	}
}