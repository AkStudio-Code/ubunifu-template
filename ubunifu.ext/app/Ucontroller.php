<?php


use Triposhub\Ubunifu\Application\Model;
use Triposhub\Ubunifu\Application\Session;

class Ucontroller extends \Triposhub\Ubunifu\Application\Controller
{
    public $view;
   function __construct()
   {
       parent::__construct();

       $this->view = new Uview();

   }
}