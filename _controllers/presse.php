<?php

/**
 * Description of liens
 *
 * @author Toiha
 */
class presse extends Controller {

    var $models = array('Presses');

    function index($params = null)
    {
        $d['presses'] = $this->Presses->find();
        $this->set($d);
        $this->render('index');
    }

    function view($slug)
    {
        $d['presse'] = $this->Presses->find(array('conditions' => "slug='$slug'"));
        $d['presse'] = $d['presse'][0];
        $this->set($d);
    	$this->render('view');
    }

}

?>
