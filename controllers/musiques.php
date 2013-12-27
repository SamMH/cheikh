<?php

/**
 * Description of liens
 *
 * @author Toiha
 */
class musiques extends Controller {

     var $models = array('Musique');

    function index($params = null)
    {
        $d['list'] = $this->Musique->find();
        $this->set($d);
        $this->render('index');
    }

    function view($slug)
    {
        $d['musique'] = $this->Musique->find(array('conditions' => "slug='$slug'"));
        $d['musique'] = $d['musique'][0];
        $this->set($d);
    	$this->render('view');
    }
}