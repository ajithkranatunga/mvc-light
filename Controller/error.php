<?php
class Error extends BaseController{
    function __construct(){
        parent::__construct();
        $this->view->render('error');
    }
}