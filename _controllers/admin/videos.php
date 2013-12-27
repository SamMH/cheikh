<?php 

class videosAdmin extends Controller {

    var $models = array('Video');

    function index($params = null)    {
        $this->layout = "admin";
        $d['videos'] = $this->Video->find();
        $this->set($d);
        $this->render('index');
    }

    function edit($id){
        $this->layout = "admin";
        if (isset($_POST) && !empty($_POST)){
            $this->Video->save($_POST);
        }
        $d['video'] = $this->Video->find(array('conditions' => 'id='.$id));
        $d['video'] = $d['video'][0];
        $this->set($d);
        $this->render('edit');
    }

    function add(){
        $d['video'] = array();
        $this->layout = "admin";
        if (isset($_POST) && !empty($_POST)){
            $id = $this->Video->save($_POST);
            $d['video'] = $this->Video->find(array('conditions' => 'id='.$id));
            $d['video'] = $d['video'][0];
        }
        $this->set($d);
    	$this->render('edit');
    }

    function del($id){
        $this->Video->del($id);
        header("Location: ".WEBROOT."admin/videos");
        // $this->layout = "admin";
        // $d['videos'] = $this->video->find();
        // $this->set($d);
        // $this->render('adminindex');
    }

}