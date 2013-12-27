<?php 

class musiquesAdmin extends Controller {

    var $models = array('Musique');

    function index($params = null)    {
        $this->layout = "admin";
        $d['musiques'] = $this->Musique->find();
        $this->set($d);
        $this->render('index');
    }

    function edit($id){
        $this->layout = "admin";
        if (isset($_POST) && !empty($_POST)){
            $this->Musique->save($_POST);
        }
        $d['musique'] = $this->Musique->find(array('conditions' => 'id='.$id));
        $d['musique'] = $d['musique'][0];
        $this->set($d);
        $this->render('edit');
    }

    function add(){
        $d['musique'] = array();
        $this->layout = "admin";
        if (isset($_POST) && !empty($_POST)){
            $id = $this->Musique->save($_POST);
            $d['musique'] = $this->Musique->find(array('conditions' => 'id='.$id));
            $d['musique'] = $d['musique'][0];
        }
        $this->set($d);
    	$this->render('edit');
    }

    function del($id){
        $this->Musique->del($id);
        header("Location: ".WEBROOT."admin/musiques");
        // $this->layout = "admin";
        // $d['musiques'] = $this->Musique->find();
        // $this->set($d);
        // $this->render('adminindex');
    }

}