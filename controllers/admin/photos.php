<?php 

class photosAdmin extends Controller {

    var $models = array('Photo');

    function index($params = null)    {
        $this->layout = "admin";
        $d['photos'] = $this->Photo->find();
        $this->set($d);
        $this->render('index');
    }

    function edit($id){
        $this->layout = "admin";
        if (isset($_POST) && !empty($_POST)){
            $this->Photo->save($_POST);
        }
        $d['photo'] = $this->Photo->find(array('conditions' => 'id='.$id));
        $d['photo'] = $d['photo'][0];
        $this->set($d);
        $this->render('edit');
    }

    function add(){
        $d['photo'] = array();
        $this->layout = "admin";
        if (isset($_POST) && !empty($_POST)){
            $id = $this->Photo->save($_POST);
            $d['photo'] = $this->Photo->find(array('conditions' => 'id='.$id));
            $d['photo'] = $d['photo'][0];
        }
        $this->set($d);
    	$this->render('edit');
    }

    function del($id){
        $this->Photo->del($id);
        header("Location: ".WEBROOT."admin/photos");
        // $this->layout = "admin";
        // $d['photos'] = $this->Photo->find();
        // $this->set($d);
        // $this->render('adminindex');
    }

}