<?php 

class presseAdmin extends Controller {

    var $models = array('Presses');

    function index($params = null)    {
        $this->layout = "admin";
        $d['presses'] = $this->Presses->find();
        $this->set($d);
        $this->render('index');
    }

    function edit($id){
        $this->layout = "admin";
        if (isset($_POST) && !empty($_POST)){
            $this->Presses->save($_POST);
        }
        $d['presse'] = $this->Presses->find(array('conditions' => 'id='.$id));
        $d['presse'] = $d['presse'][0];
        $this->set($d);
        $this->render('edit');
    }

    function add(){
        $d['presse'] = array();
        $this->layout = "admin";
        if (isset($_POST) && !empty($_POST)){
            $id = $this->Presses->save($_POST);
            $d['presse'] = $this->Presses->find(array('conditions' => 'id='.$id));
            $d['presse'] = $d['presse'][0];
        }
        $this->set($d);
    	$this->render('edit');
    }

    function del($id){
        $this->Presses->del($id);
        header("Location: ".WEBROOT."admin/presse");
    }

}