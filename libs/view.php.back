<?php
/**
 * Created by PhpStorm.
 * User: win 8
 * Date: 2/20/2016
 * Time: 6:02 PM
 */

class View {

    function __construct(){
//        $data['username'] = "Ajith";
    }
    /**
     * @param $name / view name
     * @param null $data
     * @return null
     * this loads a view file and returned data are accessible using $data parameter
     */
    public function render($name, $data=null){
        $view_file = ABSPATH.'view/pages/'.$name.".php";
        if(file_exists($view_file)){
            require_once($view_file);
        } else {
            require_once(ABSPATH.'view/pages/error.php');
        }
        return $data;
    }
}