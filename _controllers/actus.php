<?php

/**
 * Description of liens
 *
 * @author Toiha
 */
class actus extends Controller {

    var $models = array('Actu');

    function index($params = null)
    {
        $d['actus'] = $this->Actu->find();
        $this->set($d);
        $this->render('index');
    }

    function view($slug)
    {
        $d['actu'] = $this->Actu->find(array('conditions' => "slug='$slug'"));
        $d['actu'] = $d['actu'][0];
        $this->set($d);
    	$this->render('view');
    }

}

?>
