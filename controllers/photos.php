<?php

/**
 * Description of liens
 *
 * @author Toiha
 */
class photos extends Controller {

         var $models = array('Photo');

    function index($params = null)
    {
        $d['photos'] = $this->Photo->find();
        $this->set($d);
        $this->render('index');
    }

    function album($slug)
    {
        $d['photo'] = $this->Photo->find(array('conditions' => "slug='$slug'"));
        $d['photo'] = $d['photo'][0];
        $this->set($d);
    	$this->render('album');
    }
}