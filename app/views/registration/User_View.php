<?php

class User_View {

    public function show_registration(){
       include "app/views/template/register.html";
    }

    public function show_login(){
        include "app/views/template/login.html";
    }
}