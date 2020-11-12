<?php

use Triposhub\Ubunifu\Application\Auth\User;
use Triposhub\Ubunifu\Application\Auth\Xauth;
use Triposhub\Ubunifu\Application\Model;
use Triposhub\Ubunifu\Application\Session;

class Home extends Ucontroller
{
    public $auth;
    public function __construct()
    {
        parent::__construct();
        $this->auth = Model::Auth();
        $this->auth->checkAuthentication();
        $this->auth->checkSessionConcurrency();


    }
    function test()
    {

    }

    public function index()
    {
        $this ->view->useTemplate();
        $this->view->render('index');
    }

    public function blog()
    {
        $auth = new Xauth(new User());
        $auth->AuthenticateUser();

        echo \Triposhub\Ubunifu\Application\Session::get('user_email');

    }
}