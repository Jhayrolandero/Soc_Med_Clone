<?php

include "app/model/User_model.php";
include "app/views/registration/User_View.php";

class User_Controller{

    private $model;
    private $view;

    public function __construct(){
        $this->model = new User_model();
        $this->view = new User_View();
    }

    public function add_user($fname, $lname, $password, $email){

        if(empty($fname) || empty($lname) || empty($email) || empty($password)){
            exit();
        }
        $this->model->add_user($fname, $lname, $password, $email);
    }

    public function validate_user($email, $password){

        $data = $this->model->validate_user($email, $password);
        if($data){
            $user_password = $data[0]["user_password"];
            $user_email = $data[0]["user_email"];

            if ($user_password !== $password || $user_email !== $email){
                return false;
            }

            return true;
        }else{
            return false;
        }
    }

    public function show_registration(){
        $this->view->show_registration();

    }
    public function show_login(){
        $this->view->show_login();
    }

    public function check_email($email){
        if($this->model->check_email($email)){
            return true;
        }
    }    
}