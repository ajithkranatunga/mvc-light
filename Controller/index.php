<?php
class Index extends BaseController{
    function __construct(){
        parent::__construct();
        $this->index();
    }

    function index(){
        $data = "";
        $this->view->render('index', $data);
    }
}