<?php
class Person extends BaseController{
    function  __construct(){
        parent::__construct();
    }

    function addNew(){
        if(isset($_POST['new_user_form']) && $_POST['new_user_form'] == "YES"){
            $person = new PersonDao();

            $person->setFname($_POST['first_name']);
            $person->setLname($_POST['last_name']);
            $person->setAddress($_POST['address']);

            $model  = new PersonModel();
            $model->addNew($person);
        }
        $this->view->render("new_person");
    }

    function view($id=''){
        print_r($id);
    }
}