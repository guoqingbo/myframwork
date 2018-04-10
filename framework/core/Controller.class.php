<?php

/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018-04-09
 * Time: 18:51
 */
class Controller
{
    // Base Controller has a property called $loader, it is an instance of Loader class(introduced later)

    protected $loader;


    public function __construct(){

        $this->loader = new Loader();

    }


    public function redirect($url,$message,$wait = 0){

        if ($wait == 0){

            header("Location:$url");

        } else {

            include CURR_VIEW_PATH . "message.html";

        }


        exit;

    }
}