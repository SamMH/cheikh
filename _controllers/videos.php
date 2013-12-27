<?php

/**
 * Description of liens
 *
 * @author Toiha
 */
class videos extends Controller {

    var $models = array('Video');

    function index($params = null)
    {
        $d['videos'] = $this->Video->find();
        $this->set($d);
        $this->render('index');
    }

    function view($slug)
    {
        $d['video'] = $this->Actu->find(array('conditions' => "slug='$slug'"));
        $d['video'] = $d['video'][0];
        $this->set($d);
    	$this->render('view');
    }

}

?>
