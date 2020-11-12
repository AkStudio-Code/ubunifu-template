<?php


use Triposhub\Ubunifu\Application\Model;
use Triposhub\Ubunifu\Application\Session;

class Account extends Ucontroller
{
    public $auth;
    public $app;
    public function __construct()
    {
        parent::__construct();
        $this->auth = Model::Auth();
        $this->app = Model::App();
    }

    function index()
    {
        $this->signIn();
    }

    function signIn()
    {
        if (isset($_GET['redirect'])) {
            $redirect = $_GET['redirect'];
        } else {
            $redirect = null;
        }
        if (!isset($_POST)) {
            $this->view->account('login', ['redirect' => $redirect]);
        } else {
            if ($this->auth->AuthenticateUser()) {
                unset($_POST);
                if (isset($_POST['redirect'])) {
                    $path = ltrim(urldecode($_POST['redirect']), '/');
                    header('location: http://' . $_SERVER['HTTP_HOST'] . '/' . $path);
                } else {
                    header('location:' . $this->app->base_url() . $this->app->urlTabs()->getApp() . '/home');
                }
            } else {
                unset($_POST);
                Session::set('auth error', ' incorrect  email or password');
                $this->view->account('login', ['redirect' => $redirect]);

            }

        }
    }

    function forgotPassword()
    {
        $this->view->account('forgot');
    }

    function logout()
    {
        $this ->auth ->logout();
    }

}