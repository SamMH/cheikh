<?php

/**
 * Description of liens
 *
 * @author Toiha
 */
class news extends Controller {

    function index($param)
    {
    	$this->layout = "default";
        $list = $this->redDir();
        $this->set($list);
        $this->render('index', $param);
    }

}

?>
