<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author Toiha
 */
class Controller {
    
    var $vars = array();
    var $layout = 'default';

    function __construct(){

        if(isset($_POST)) {
            if(isset($_FILES) && !empty($_FILES)) {
                $_POST['image_name'] = $_FILES['image']['name'];
                $_POST['image_tmp_name'] = $_FILES['image']['tmp_name'];
            }
            $this->data = $_POST;
        }

        if (isset($this->models)) {

            foreach ($this->models as $v) {
                $this->loadModel($v);
            }
        }
    }

    function set($d)
    {
        $this->vars = array_merge($this->vars, $d);
    }

    function render($filename)
    {

        $params = explode("/", $_GET['p']);

        extract($this->vars);

        ob_start();
        
        $page_title = get_class($this);
        $home_link = ROOT;

        if(count($params)> 1){
            $breadcrumb = $params[0];
        }else{
            $breadcrumb = null;
        }

        if($params[0]=="admin"):
            if( count($params) == 1):
                require (ROOT . 'views/pages/' . $params[0] . "/$filename.php");
            elseif(count($params) >= 2) : 
                require (ROOT . 'views/pages/' . $params[0] . '/' . $params[1] . "/$filename.php");
            endif;
        elseif($params[0]==""):
            require (ROOT . "views/pages/$filename.php");
        else:
            require (ROOT . 'views/pages/' . $params[0] . "/$filename.php");
        endif;

        $content_for_layout = ob_get_clean();

        if ($this->layout == FALSE)
        {
            echo $content_for_layout;
        }
        else
        {
            require (ROOT . 'views/skin/layout/' . $this->layout . '/header.php');
            require (ROOT . 'views/skin/layout/' . $this->layout . '/index.php');
            require (ROOT . 'views/skin/layout/default/footer.php');
        }

        // require (ROOT . 'views/skin/debug.php');
    }

    function loadModel($name)
    {
        require_once ROOT . 'models/' . strtolower($name) . '.php';
        $this->$name = new $name;
    }


}

?>
