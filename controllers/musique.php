<?php

/**
 * Description of liens
 *
 * @author Toiha
 */
class musique extends Controller {

    function index($param)
    {
        $list = $this->redDir();
        $this->set($list);
        $this->render('index', $param);
    }
}