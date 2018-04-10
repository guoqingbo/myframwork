<?php

/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018-04-09
 * Time: 19:04
 */
class IndexController extends Controller{

    public function mainAction(){

        include CURR_VIEW_PATH . "main.html";

        // Load Captcha class

        $this->loader->library("Captcha");

        $captcha = new Captcha;

        $captcha->hello();

        $userModel = new UserModel();

        $users = $userModel->getUsers();

    }

    public function indexAction(){

        $userModel = new UserModel();

        $users = $userModel->getUsers();

        // Load View template

        include  CURR_VIEW_PATH . "index.php";

    }

    public function menuAction(){

        include CURR_VIEW_PATH . "menu.html";

    }

    public function dragAction(){

        include CURR_VIEW_PATH . "drag.html";

    }

    public function topAction(){

        include CURR_VIEW_PATH . "top.html";

    }

}