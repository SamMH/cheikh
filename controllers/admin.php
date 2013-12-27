<?php


class admin extends Controller {

    var $models = array('User');

    function index($params = null)
    {
        $this->layout = "admin";
        $this->render('index');
    }

    function login()
    {
        $this->layout = "admin";

        if (isset($_POST) && !empty($_POST)) {
            $email = $_POST['email'];
            $pwd = sha1($_POST['password'])."_$";
            $login = $this->User->find(array('conditions' => "email='$email' AND password='$pwd'"));

            if(!empty($login)){
                $_SESSION['login'] = $login;
                $this->render('index');
                die();
            }
            else{
                $this->render('login');

            }
            
        }   else{
            $this->render('login');
        }    
    }

}

?>
