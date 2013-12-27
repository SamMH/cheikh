<?php 

class actusAdmin extends Controller {

    var $models = array('Actu');

    function index($params = null)    {
        $this->layout = "admin";
        $d['actus'] = $this->Actu->find();
        $this->set($d);
        $this->render('index');
    }

    function edit($id){
        $this->layout = "admin";
        if (isset($_POST) && !empty($_POST)){
            $this->Actu->save($_POST);
        }
        $d['actu'] = $this->Actu->find(array('conditions' => 'id='.$id));
        $d['actu'] = $d['actu'][0];
        $this->set($d);
        $this->render('edit');
    }

    function add(){
        $d['actu'] = array();
        $this->layout = "admin";
        if (isset($_POST) && !empty($_POST)){
            $id = $this->Actu->save($_POST);
            $d['actu'] = $this->Actu->find(array('conditions' => 'id='.$id));
            $d['actu'] = $d['actu'][0];
        }
        $this->set($d);
    	$this->render('edit');
    }

    function del($id){
        $this->Actu->del($id);
        header("Location: ".WEBROOT."admin/actus");
    }

}