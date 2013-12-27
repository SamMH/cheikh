<?php

/**
 * Description of liens
 *
 * @author Toiha
 */
class contact extends Controller {

    function index($param = null)
    {
        $d = array();
        if (isset($_POST) && !empty($_POST))
        {
            if ($this->sendMail($_POST))
                $d['sendMail'] = array("isSend" => true, "fromName" => $_POST['name']);
            else
                $d['sendMail'] = array("isSend" => false, "fromName" => $_POST['name']);
        }
        $this->set($d);
        $this->render('index');
    }

}

?>
