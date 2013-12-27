<?php

/**
 * Description of liens
 *
 * @author Toiha
 */
class home extends Controller {

	var $models = array('Actu', 'Video');

    function index($param = null)
    {
        $this->layout = "home";
        $d['actus'] = $this->Actu->find(array('limit'=>'5'));
        $d['videos'] = $this->Video->find(array('limit'=>'1'));
        $this->set($d);
        $this->render('index');
    }

}

?>
