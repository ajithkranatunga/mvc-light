<?php
/**
 * Created by PhpStorm.
 * User: win 8
 * Date: 2/20/2016
 * Time: 5:54 PM
 */

class BaseController {
    public $view;

    function __construct(){
        $this->view = new View();
    }

    /*function addNew(){
        $this->view->addNew($name="");
    }*/
}