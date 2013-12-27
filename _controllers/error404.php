<?php

/**
 * Description of liens
 *
 * @author Toiha
 */
class error404 extends Controller {

    function index()
    {
        $this->layout = "home";
        $d = array();
        $d['liens'] = array(
            'titre' => 'Facebook',
            'lien' => 'https://www.facebook.com/',
            'detail' => 'Exemple de description',
        );
        $this->set($d);
        $this->render('index');
    }

}

?>
