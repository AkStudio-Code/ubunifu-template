<?php

use Triposhub\Ubunifu\Application\Auth\User;
use Triposhub\Ubunifu\Application\Auth\Xauth;
use Triposhub\Ubunifu\Application\Controller;

class Home extends Ucontroller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo 'inside index';
    }

    public function blog()
    {
        $auth = new Xauth(new User());
        $auth->AuthenticateUser();

        echo \Triposhub\Ubunifu\Application\Session::get('user_email');

    }
}